<?php

return [
    'success' => [
        'title'  => 'Well done!',
        'reason' => [
            'submitted_to_post'       => 'Réponse envoyée avec succès à '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'updated_post'            => 'la modification de '.mb_strtolower(trans('chatter::intro.titles.discussion')).'est effectuée avec succès.',
            'destroy_post'            => 'Successfully deleted the response and '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'destroy_from_discussion' => 'la suppression de la reponse  est effectuée avec succès de la'.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
            'created_discussion'      => 'la '.mb_strtolower(trans('chatter::intro.titles.discussion')).'est créé avec succès.',
        ],
    ],
    'info' => [
        'title' => 'Heads Up!',
    ],
    'warning' => [
        'title' => 'Wuh Oh!',
    ],
    'danger'  => [
        'title'  => 'Oh Snap!',
        'reason' => [
            'errors'            => 'Please fix the following errors:',
            'prevent_spam'      => 'In order to prevent spam, please allow at least :minutes in between submitting content.',
            'trouble'           => 'Sorry, there seems to have been a problem submitting your response.',
            'update_post'       => 'Nah ah ah... Could not update your response. Make sure you\'re not doing anything shady.',
            'destroy_post'      => 'Nah ah ah... Could not delete the response. Make sure you\'re not doing anything shady.',
            'create_discussion' => 'Whoops :( There seems to be a problem creating your '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        	'title_required'    => 'Please write a title',
        	'title_min'		    => 'The title has to have at least :min characters.',
        	'title_max'		    => 'The title has to have no more than :max characters.',
        	'content_required'  => 'Please write some content',
        	'content_min'  		=> 'The content has to have at least :min characters',
        	'category_required' => 'Please choose a category',

       
       
        ],
    ],
];
