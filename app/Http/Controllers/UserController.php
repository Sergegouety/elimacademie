<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Role;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\EtudiantRepositoryInterface;
use App\Repositories\FormationRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;
    protected $etudiantRepository;
    protected $formationRepository;

    public function __construct(UserRepositoryInterface $userRepository, EtudiantRepositoryInterface  $etudiantRepository, FormationRepositoryInterface $formationRepository )
    {
        $this->userRepository = $userRepository;
        $this->etudiantRepository = $etudiantRepository;
        $this->formationRepository = $formationRepository;
    }

    public function loginView(){
        return view('login');
    }

    public function login(Request $request)
    {

            $data = $request->all();
            $rules = array(
                            'login'    => 'required',
                            'password'    => 'required',
                        );

        $messages = [
                        'login.required' => 'Email ou téléphone obligatoire',
                        'password.required'  => 'Le mot de passe est obligatoire',
                    ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            //dd($req);
            $userdata = array(
                'login' => $request->input('login'),
                'password' => $request->input('password')
            );

            if (Auth::guard()->attempt(['email' => $request->input('login'),'password' => $request->password,]) ||
                Auth::guard()->attempt(['telephone' => $request->input('login'),'password' => $request->password,])){
                $dt = Carbon::today();
                $firstConnexion = Auth::user()->first_login;
                $user = Auth::user();
                if ($firstConnexion) {

                 return view('frontoffice.password_setup',compact('user'));

                } 
                    // Redirection en fonction du rôle
                    if ($user->hasRole('admin')) {
                    return redirect()->route('dashboard');
                    } elseif ($user->hasRole('comptable')) {
                    return redirect()->route('dashboard');
                    } elseif ($user->hasRole('professeur')) {
                    return redirect()->route('professor.dashboard');
                    } elseif ($user->hasRole('etudiant')) {
                    return redirect()->route('student.dashboard');
                    } else {
                    return redirect()->route('dashboard');
                    }

            } else {
                Session::flash('error', 'Email/Telephone ou mot de passe incorrect');
                return Redirect::back();
            }
        }

    }

    public function doLogout()
    {
       Auth::logout(); 
       Session::flush();
       Session::flash('success','Vous avez bien été déconnecté !');

      return redirect()->route('login.view');
    }

    public function password_setup(Request $request){
        $user = User::find($request->get('user_id'));

        $user->first_login = false;
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect()->route('dashboard');

    }

    // Exemple de méthode pour afficher une liste d'utilisateurs
    public function index()
    {

        $permissions = Permission::get();
        $roles = Role::get();
        $users = User::paginate(30);
        // Votre logique ici
        return view('backoffice.users.index',compact('users','permissions','roles'));
    }

    public function getRoles()
    {
        $permission_list = Permission::get();
        $role_list = Role::with('permissions')->paginate(30);

        return view('backoffice.users.roles' ,compact('permission_list', 'role_list'));
    }

    public function getRoleForm($roleId = null)
    {

        $role = Role::find($roleId);

        $permission_list = Permission::get();

        return view('backoffice.users.role_form', compact('permission_list', 'role'));
    }
     //TODO extract role and permission codes 
     public function store_role(Request $req)
     {

       
         $roleId = $req->get('roleId');
         $permission_list = $req->get('checkbox_permission');
         $nom = $req->get('nom');
         $statut = $req->get('statut');
 
         if ($roleId) {  //si le role existe dejà 
 
             $affected = DB::table('roles')->where('id', $roleId)->update(['name' => $nom, 'statut' => $statut]);
 
             $role = Role::find($roleId);
 
             if ($permission_list) {
                 $role->syncPermissions([]);  // Supprimer toutes les permissions associées au rôle
                 $permissions = Permission::whereIn('id', $permission_list)->get();
 
                 foreach ($permissions as $permission) {  // associer les nouvelles permissions
 
                     $role->givePermissionTo($permission);
                 }
             } else {
                 $role->syncPermissions([]);  // Supprimer toutes les permissions associées au rôle
             }

             return Redirect::route('backoffice.users.roles')->with('success', "Rôle modifié avec succès");
         } else {
             //sinon si le role n'existe pas
            // dd( $req);
              try {
 
                 $role = Role::create([
                     'name' => $req->get('nom'),
                     'guard_name' => 'web',
                 ]); //creation du role
 
                 if ($permission_list !== null) {
 
                     // Récupérez les objets de permission correspondant aux valeurs cochées
                     $permissions = Permission::whereIn('id', $permission_list)->get();
 
                     // Attachez chaque permission au rôle
                     foreach ($permissions as $permission) {
                         $role->givePermissionTo($permission);
                     }
                 }
             } catch (\Exception $e) {
                 return Redirect::back()->with('error', $e);
             }
 
             return Redirect::route('users.roles')->with('success', "Rôle ajouté avec succès");
         }
     }
 
     public function store_permission(Request $req)
     {
 
         $permission = Permission::create([
             'name' => $req->get('nom'),
             'guard_name' => 'web',
         ]);
 
         return Redirect::back()->with('success', "Permission ajoutée avec succès");
     }

    public function getPermissions()
    {
        // Votre logique ici
        $permission_list = Permission::paginate(30);
        return view('backoffice.users.permissions',compact('permission_list'));
    }
    

    // Exemple de méthode pour afficher un utilisateur spécifique
    public function show($id)
    {
        // Votre logique ici
        return view('users.show', compact('id'));
    }

    // Exemple de méthode pour créer un nouvel utilisateur
    public function create()
    {
        $permissions = Permission::get();
        $roles = Role::get();
        return view('backoffice.users.create',compact('roles','permissions'));
    }

    // Exemple de méthode pour enregistrer un nouvel utilisateur
    public function store(Request $request)
    {
        $requestData = $request->all();
        //dd( $requestData);

        $uerdata = [];
        $uerdata['nom'] = $requestData['nom'] ?? null;
        $uerdata['prenoms'] = $requestData['prenoms'] ?? null;
        $uerdata['sexe_id'] = $requestData['sexe_id'] ?? null;
        $uerdata['telephone'] = $requestData['telephone'] ?? null;
        $uerdata['email'] = $requestData['email'] ?? null;

        $etudiantdata = [];
        $etudiantdata['date_naissance'] = $requestData['date_naissance'] ?? null;
        $etudiantdata['lieu_naissance'] = $requestData['lieu_naissance'] ?? null;
        $etudiantdata['ville_id'] = $requestData['ville'] ?? null;
        $etudiantdata['nationalite'] = $requestData['nationalite'] ?? null;
        $etudiantdata['adresse'] = $requestData['adresse'] ?? null;
        $etudiantdata['code_postal'] = $requestData['code_postal'] ?? null;
        $etudiantdata['telephone_parent'] = $requestData['telephone_parent'] ?? null;
        $etudiantdata['numero_parent'] = $requestData['numerparent'] ?? null;
        $etudiantdata['niveau_etude_id'] = $requestData['niveau_etude'] ?? null;
        $etudiantdata['diplome_id'] = $requestData['diplome'] ?? null;
        
        $formationdata = [];
        $formationdata['formation_id'] = $requestData['formation'] ?? null;
        try {
            DB::beginTransaction();

        $user = $this->userRepository->create($uerdata);
        $user->assignRole('etudiant');
        $etudiantdata['user_id'] = $user->id ?? null;
        $etudiant = $this->etudiantRepository->create($etudiantdata);

        $formationdata['etudiant_id'] = $etudiant->id ?? null;
        $formation = $this->formationRepository->create($formationdata);
        DB::commit();
        return Redirect::route('preinscription.confirm')->with('success', "Pré-inscription effectuée avec succès");
    } catch (Exception $e) {
        DB::rollBack();
        return Redirect::back()->with('error', $e->getMessage())->withInput($request->all());
    }

        // Votre logique ici
        // Validation et enregistrement des données
    }

     // Exemple de méthode pour enregistrer un nouvel utilisateur
     public function userStore(Request $request)
     {
         $requestData = $request->all();
         //dd( $requestData);
 
         $uerdata = [];
         $uerdata['nom'] = $requestData['nom'] ?? null;
         $uerdata['prenoms'] = $requestData['prenoms'] ?? null;
         $uerdata['sexe_id'] = $requestData['sexe_id'] ?? null;
         $uerdata['telephone'] = $requestData['telephone'] ?? null;
         $uerdata['email'] = $requestData['email'] ?? null;
         $uerdata['password']  =  bcrypt($requestData['password']);
 
         try {
             DB::beginTransaction();
 
         $user = $this->userRepository->create($uerdata);
         // Assign roles and permissions
         $user->assignRole($request->role_name);
         $user->givePermissionTo($request->checkbox_permission ?? []);
         DB::commit();
         return Redirect::route('user.index')->with('success', "Utilisateur créé avec succès");
     } catch (Exception $e) {
         DB::rollBack();
         return Redirect::back()->with('error', $e->getMessage())->withInput($request->all());
     }
 
         // Votre logique ici
         // Validation et enregistrement des données
     }

    // Exemple de méthode pour éditer un utilisateur existant
    public function edit($id)
    {
        // Votre logique ici
        return view('users.edit', compact('id'));
    }

    // Exemple de méthode pour mettre à jour un utilisateur existant
    public function update(Request $request, $id)
    {
        // Votre logique ici
        // Validation et mise à jour des données
    }

    // Exemple de méthode pour supprimer un utilisateur existant
    public function destroy($id)
    {
        // Votre logique ici
        // Suppression de l'utilisateur
    }

    // admindashboard
    public function dashboard()
    {
        // Votre logique ici
        // Suppression de l'utilisateur
        return view('backoffice.dashboard.dashboard');
    }

    // professor dashboard
    public function professor_dashboard()
    {
        // Votre logique ici
        // Suppression de l'utilisateur
        return view('backoffice.dashboard.professor_dashboard');
    }

    // student ashboard
    public function student_dashboard()
    {
        // Votre logique ici
        // Suppression de l'utilisateur
         return view('backoffice.dashboard.student_dashboard');
    }
}
