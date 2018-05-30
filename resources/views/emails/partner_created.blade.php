@component('mail::message')
# Bonjour {{ $partner->name }}

Un administrateur a créé un compte pour vous.

<strong>E-mail: </strong>{{ $partner->email }}<br>
<strong>Mot de passe: </strong>{{ $partner->password }}

@component('mail::button', ['url' => route('partenaires.login')])
Connectez-vous
@endcomponent

Cordialement,<br>
L'équipe CosmoMag
@endcomponent
