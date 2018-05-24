@component('mail::message')
    Un nouveau mail de la part de {{ $datas['email'] }}

@component('mail::button', ['url' => 'http://cosmo.mag/administrator/messages'])
Lire le message
@endcomponent

L'équipe,<br>
{{ config('app.name') }}
@endcomponent
