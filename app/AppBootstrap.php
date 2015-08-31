<?php
namespace App;

use Ocarina\Bootstrap;
use Ocarina\Template\SmartyTemplateEngine;

class AppBootstrap implements Bootstrap {

    public function __construct() {
        $this->autoload();
    }

    public function autoload() {
        // get framework autoloader
        require_once('../libs/ocarina/ocarina/Autoload.php');

        require_once('../app/main/controller/IndexController.php');
        require_once('../app/main/controller/OcarinaController.php');
    }

    public static function registerModules() {
        return array(
            'main' => '/',
        );
    }

    public static function initTemplateEngine() {
        // Smarty template engine
        return new SmartyTemplateEngine();
    }

}