<?php

require_once __DIR__. "/../config/config.php";
require_once __DIR__. "/../models/Materia.php";

class MateriaController{
    private $materiaModel;
    
    public function __construct(){
        global $conexion;
        $this->materiaModel = new Materia($conexion);
    }

    public function index(){
        $materias = $this->materiaModel->getAll();
        require __DIR__. "/../views/lista-materias.php";
    }

    public function create(){
        require __DIR__. "/../views/crear-materia.php";
    }

    public function store(){
        $nombre = trim($_POST["nombre"]??"");
        $anio = (int)($_POST["anio"]??0);
        $cuatrimestre= trim($_POST["cuatrimestre"]??"");
        $estado = (int)($_POST["estado_id"]??0);
        if($nombre==="" ||$anio<=0 || $cuatrimestre===""|| $estado<=0){
            die("Datos invalidos");
        }
        $this->materiaModel->create($nombre,$anio,$cuatrimestre,$estado);
       header("Location:index.php?action=index");
        exit;
    }

    public function edit(){
        $id=(int)($_GET["id"]??0);
        if($id<=0){
            die("ID de materia invalido");
        }
        $materia=$this->materiaModel->getById($id);
        if(!$materia){
            die("Materia no encontrada");
        }
        require __DIR__. "/../views/editar-materia.php";
    }

    public function update(){
        $id=(int)($_POST["materia_id"]??0);
        $nombre=trim($_POST["nombre"]??"");
        $anio = (int)($_POST["anio"]??0);
        $cuatrimestre= trim($_POST["cuatrimestre"]??"");
        $estado = (int)($_POST["estado_id"]??0);
        if($id<=0 || $nombre==="" ||$anio<=0 || $cuatrimestre===""|| $estado<=0){
            die("Datos invalidos");
        }
        $this->materiaModel->update($id,$nombre,$anio,$cuatrimestre,$estado);
       header("Location:index.php?action=index");
        exit;
    }

    public function delete(){
        $id=(int)($_GET["id"]??0);
        if($id>0){
            $this->materiaModel->delete($id);
        }
        header("Location:index.php?action=index");
        exit;
    }


}