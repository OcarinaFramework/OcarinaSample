<?php
require_once('../libs/ocarina/ocarina/Bootstrap.php');
require_once('../app/AppBootstrap.php');

$bootstrap = new App\AppBootstrap();

$core = new \Ocarina\Core($bootstrap);
$core->dispatch();
$core->render();