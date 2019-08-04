<?php
use Prim\Container;

use Ecommerce\BasePack\Controller\Home;

return [
    // Glob injection
    'Ecommerce\*\Controller\*' => function(Container $dic) {
        return [];
    },

    Home::class => function(Container $dic) {
        return [
            $dic->model('BasePack\BaseModel'),
        ];
    },
];
