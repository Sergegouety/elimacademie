<?php

use App\Sms;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;

use App\Models\Attachment;
use App\Models\Permission;
use App\Models\OffreEmploi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


if (!function_exists('checkRolePermission')) {
    function checkRolePermission($roleId, $permissionId)
    {

        // Obtenez le rôle
        $role = Role::find($roleId); // Remplacez $roleId par l'ID de votre rôle

        // Obtenez la permission
        $permission = Permission::find($permissionId); // Remplacez $permissionId par l'ID de votre permission
        if ($role) {

            // Vérifiez si le rôle a la permission
            if ($role->hasPermissionTo($permission)) {
                // Le rôle a la permission spécifiée
                echo "checked";
            } else {
                // Le rôle n'a pas la permission spécifiée
                echo "";
            }
        } else {
            echo "";
        }
    }
}


if (!function_exists('checkUserRole')) {
    function checkUserRole($userId, $roleName)
    {

        // Obtenez l'utilisateur
        $user = User::find($userId); // Remplacez $userId par l'ID de votre rôle
        $role = null;

        // vérifier si l'utilisateur a ce role
        if ($user) {
            $role = @$user->hasRole($roleName);
        }

        //dd($user->name,$userId,$role,$roleName);
        if ($role) {
            echo "checked";
        } else {
            echo "";
        }
    }
}


if (!function_exists('getInstanceName')) {
    function getInstanceName($table, $table_id, $value, $returnName)
    {

        $entree = DB::table($table)
            ->where([
                $table_id => $value
            ])
            ->first();

        return @$entree->$returnName;
    }
}

if (!function_exists('sendSMS')) {

    function sendSMS($phone, $message)
    {
        $config = array(
            'clientId' => config('aejgestdrhaja.clientId'),
            'clientSecret' =>  config('aejgestdrhaja.clientSecret'),
        );
        $osms = new Sms($config);
        $data = $osms->getTokenFromConsumerKey();
        $token = array(
            'token' => $data['access_token']
        );

        return $osms->sendSms(
            // sender
            'tel:+2250000',
            // receiver
            'tel:+225' . $phone,
            // message
            $message,
            'AEJ  INFO' // le senderName
        );
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        if ($date) {
            $carbonDate = Carbon::parse($date);
            if ($carbonDate->hour) {
                return $carbonDate->locale('fr_FR')->isoFormat('D MMMM YYYY [à] H[H]mm [min]');
            } else {
                return $carbonDate->locale('fr_FR')->isoFormat('D MMMM YYYY');
            }
        }
        return "Non définie";
    }
}


if (!function_exists('formatExceptionErrorsForSlackNotification')) {
    function formatExceptionErrorsForSlackNotification(Exception $e)
    {
        return collect([
            [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'code' => $e->getCode(),
            ]
        ])->concat(collect($e->getTrace())->take(5))->toArray();
    }
}

if (!function_exists('sendSlackNotificationErrors')) {
    function sendSlackNotificationErrors(string $message, array $context)
    {
        Log::channel('slack')->error($message, $context);
    }
}


if (!function_exists('storeAttachements')) {
    function storeAttachements($attachements, $model)
    {
        if (is_array($attachements)) {
            foreach ($attachements as $a) {
                saveModelAttachment($a, $model);
                $a->storeAs('attachments', $a->getClientOriginalName());
            }
            return;
        } else {
            saveModelAttachment($attachements, $model);
            $attachements->storeAs('attachments', $attachements->getClientOriginalName());
            return;
        }
    }
}

if (!function_exists('saveModelAttachment')) {
    function saveModelAttachment($attachment, $model)
    {
        Attachment::create([
            'filename' => $attachment->getClientOriginalName(),
            'filetype' => $attachment->getMimeType(),
            'path' => 'attachments',
            'offre_emploi_id' => $model instanceof OffreEmploi ? $model->id : null,
        ]);
    }
}

if (!function_exists('dateDiffForHumans')) {
    function dateDiffForHumans($startDate, $endDate)
    {
        Carbon::setLocale('fr');

        $startDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);

        return $startDate->diff($endDate);
    }
}


if (!function_exists('showLogDifferences')) {
    function showLogDifferences($activity)
    {

        if ($activity->count() > 1) {
            $oldAttributes = $activity->first();
            $newAttributes = $activity->last();
            $differences = [];

            foreach ($oldAttributes as $key => $oldValue) {
                $newValue = $newAttributes[$key] ?? null;
                if ($oldValue != $newValue) {
                    $differences[$key] = [
                        'old' => $oldValue,
                        'new' => $newValue,
                    ];
                }
            }
            return $differences;
        }
    }
}

if (!function_exists('translate_activity_log')) {
    function translate_activity_log($string)
    {
        return match ($string) {
            'created' => 'crée',
            'updated' => 'mis à jour',
            'delete' => 'supprimé',
            default => 'déclanché un évènement inconnu'
        };
    }
}

if (!function_exists('percentage')) {
    function percentage(int $numerator, int $denominator): string
    {

        return $denominator != 0 ? number_format(($numerator / $denominator) * 100, 2, '.', '') : 0;
    }
}

if (!function_exists('getBaseApiUrl')) {
    function getBaseApiUrl()
    {
        return env('API_URL');
    }
}
if (!function_exists('getApiToken')) {
    function getApiToken()
    {
        return env('API_TOKEN');
    }
}

if (!function_exists('sendSMS')) {

    function sendSMS($phone, $message){
        $config = array(
            'clientId' => config('aejgestdrhaja.clientId'),
            'clientSecret' =>  config('aejgestdrhaja.clientSecret'),
        );
        $osms = new Sms($config);
        $data = $osms->getTokenFromConsumerKey();
        $token = array(
            'token' => $data['access_token']
        );

        return $osms->sendSms(
            // sender
            'tel:+2250000',
            // receiver
            'tel:+225' . $phone,
            // message
            $message,
            'AEJ  INFO' // le senderName
        );
    }
} 

