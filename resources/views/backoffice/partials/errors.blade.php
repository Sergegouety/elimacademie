@if(session()->has('warning'))
<x-alert :type='"warning"' :icon='"ri-check-double-line"'>
    <strong>Oops</strong> : <span> {{ Session::get('warning') }} </span>
</x-alert>
@endif
@if(session()->has('success'))
<x-alert :type='"success"' :icon='"ri-check-double-line"'>
    <strong>L'opération a réussie</strong> : <span> {{ Session::get('success') }} </span>
</x-alert>
@endif
@if(session()->has('error'))
<x-alert :type='"danger"' :icon='"ri-check-double-line"'>
    <strong>Echec :</strong> : <span> {{ Session::get('error') }} </span>
</x-alert>
@endif
@if(session()->has('errors'))
<x-alert :type='"danger"' :icon='"ri-error-warning-line"'>
    <strong>Echec de la soumission</strong> : <span>Parcourez le formulaire afin de
        decouvrir les erreurs</span>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</x-alert>
@endif
@if(session()->has('server_error'))
<x-alert :type='"danger"' :icon='"ri-error-warning-line"'>
    <strong>Echec de la soumission</strong> : <span> {{ Session::get('server_error') }} </span>
</x-alert>
@endif