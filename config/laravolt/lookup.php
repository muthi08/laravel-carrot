<?php

return [
    'route' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
        'prefix' => '',
    ],
    'view' => [
        'layout' => 'laravolt::layouts.app',
    ],
    'menu' => [
        'enabled' => true,
    ],
    'permission' => [],
    'collections' => [
        // Sample lookup collections
        'pekerjaan' => [
            'label' => 'Pekerjaan',
        ],
        'status_verifikasi_berkas' => [
            'label' => 'Status Verifikasi Berkas',
        ],
        'posisi' => [
            'label' => 'Posisi',
        ],
        'status_verifikasi_teknis' => [
            'label' => 'Status Verifikasi Teknis',
        ],
    ],
];
