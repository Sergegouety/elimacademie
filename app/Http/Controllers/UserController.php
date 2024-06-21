<?php

namespace App\Http\Controllers;

use App\Repositories\EtudiantRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\FormationRepositoryInterface;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

use App\Models\User;

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

                return redirect()->route('dashboard',compact('user'));

            } else {
                Session::flash('error', 'Email/Telephone ou mot de passe incorrect');
                return Redirect::back();
            }
        }

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
        // Votre logique ici
        return view('users.index');
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
        return view('users.create');
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
