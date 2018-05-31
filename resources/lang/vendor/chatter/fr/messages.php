<?php

return [
    'words' => [
        'cancel'  => 'Annuler ',
        'delete'  => 'Supprimer ',
        'edit'    => 'Modifier',
        'yes'     => 'Oui',
        'no'      => 'Non',
        'minutes' => '1 minute| :count minutes',
    ],

    'discussion' => [
        'new'          => 'Nouveau '.trans('chatter::intro.titles.discussion'),
        'all'          => 'Tous'.trans('chatter::intro.titles.discussion'),
        'create'       => 'Créer '.trans('chatter::intro.titles.discussion'),
        'posted_by'    => 'Publié par ',
        'head_details' => 'publié en categorie',

    ],
    'response' => [
        'confirm'     => 'êtes-vous sûr de vouloir supprimer cette reponse ',
        'yes_confirm' => 'Oui ',
        'no_confirm'  => 'Non',
        'submit'      => 'Soumettre Reponse',
        'update'      => 'MOdifier Reponse',
    ],

    'editor' => [
        'title'               => 'Titre de  '.trans('chatter::intro.titles.discussion'),
        'select'              => 'Choisir catégorie ',
        'tinymce_placeholder' => 'Tapez Votre '.trans('chatter::intro.titles.discussion').' Ici...',
        'select_color_text'   => 'Select a Color for this '.trans('chatter::intro.titles.discussion').' (optional)',
    ],

    'email' => [
        'notify' => 'Notify me when someone replies',
    ],

    'auth' => 'veuillez se <a href="/:home/login">connecter </a>
                ou <a href="/:home/register">S inscrire</a>',

];
