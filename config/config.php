<?php
session_start();

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT. "/Controllers/");
define("MODEL_PATH", ROOT. "/Models/");
define("VIEW_PATH", ROOT. "/Views/");

require "db.php";
require "content/Router.php";
require CONTROLLER_PATH. "Controller.php";
require MODEL_PATH. "Model.php";
require VIEW_PATH. "View.php";

$route = new Router();
$route->run();