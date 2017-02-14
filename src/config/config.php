<?php

return [

    'cache' => [
        'enabled' => true,

        'service' => PragmaRX\Countries\Support\Cache::class,

        'duration' => 180,
    ],

    'hydrate' => [
        'before' => false,

        'after' => true,

        'elements' => [
            'flag' => true,
            'currency' => true,
            'states' => true,
            'collection' => true,

            'borders' => false,
            'topology' => false,
            'geometry' => false,
        ],
    ],

];
