<?php

/*
 * For more details about the configuration, see:
 * https://sweetalert2.github.io/#configuration
 */
return [
    'alert' => [
        'position' => 'top',
        'timer' => 3000,
        'timerProgressBar' => true,
        'toast' => true,
        'text' => null,
        'showConfirmButton' => false,
        'showCloseButton' => false,
    ],
    'confirm' => [
        'icon' => 'warning',
        'position' => 'top-end',
        'toast' => false,
        'timer' => null,
        'showConfirmButton' => true,
        'showCancelButton' => true,
        'showCloseButton' => false,
        'cancelButtonText' => 'No',
        'confirmButtonColor' => '#20c997',
        'cancelButtonColor' => '#d33'
    ]
];
