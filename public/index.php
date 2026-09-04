<?php
require_once __DIR__. "/../controllers/MateriaController.php";
$controller = new MateriaController();
$action =$_GET["action"]??"";
switch($action){
    case "index": $controller->index();
    break;
    case "create": $controller->create();
    break;
    case "store": 
        if($_SERVER["REQUEST_METHOD"]!=="POST")
            die("metodo no permitido");
        $controller->store();
        break;
    case "edit":
        $controller->edit();
        break;
    case "update": 
        if($_SERVER["REQUEST_METHOD"]!=="POST")
            die("metodo no permitido");
        $controller->update(); 
        break;
    case "delete":
        $controller->delete();
        break;
    default:
        die("Accion invalida");        
}