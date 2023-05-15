<?php

/*----------------------- Mostrar Errores -----------------------*/
ini_set('display_errors', 1);
ini_set('lo_errors', 1);
ini_set('error_log', 'C:/software/xampp/htdocs/ProyectoEncuesta/php_error_log');

/*----------------------- Requerimientos -----------------------*/
require_once "controllers/template.controller.php";
$index = new TemplateController();
$index -> index();

?>