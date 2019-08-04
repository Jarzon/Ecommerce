<?php
/** @var $this Container */

use \Prim\Container;

$this
    ->setParameter('pdo', PrimPack\Service\PDO::class)
    ->setParameter('errorController', PrimPack\Controller\Error::class)
    ->register('toolbarService', \PrimPack\Service\Toolbar::class, [$this->get('view'), $this->options['db_enable'] ? $this->get('pdo') : null, $this->options]);

if ($this->options['debug']) {
    $this->get('toolbarService')->addElement('Stats', function () {
        return ': messages - ' . $this->get('router')->getRoutesCount() . ' routes ';
    });
}


//    ->register('oauthService', \Libellum\UserPack\Service\Oauth::class, [$this->options['OAUTH']])
//
//    ->register('userService', \UserPack\Service\User::class, [$this->get('view')])
//    ->register('toolbarService', \PrimPack\Service\Toolbar::class, [$this->get('view'), $this->options['db_enable'] ? $this->get('pdo') : null, $this->options])
//    ->register('adminService', \PrimPack\Service\Admin::class, [$_SESSION ?? []])