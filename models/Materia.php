<?php
class Materia{
    private $conexion;
    
    public function __construct($conexion){
        $this->conexion=$conexion;
    }

    public function getAll(){
        return $this->conexion->query(
            "SELECT m.materia_id,m.nombre,m.anio,m.cuatrimestre,e.nombre_estado 
            FROM materias m INNER JOIN estados e using(estado_id) 
            WHERE m.activo = true
            ORDER BY m.materia_id DESC"
            );
    }

    public function getById($id){
        $s=$this->conexion->prepare("SELECT * FROM materias WHERE materia_id=? AND activo=true");
        $s->bind_param("i",$id);
        $s->execute();
        return $s->get_result()->fetch_assoc();
    }

    public function create($nombre,$anio,$cuatrimestre,$estado_id){
        $s=$this->conexion->prepare("INSERT INTO materias (nombre,anio,cuatrimestre,estado_id) VALUES (?,?,?,?)");
        $s->bind_param("sisi",$nombre,$anio,$cuatrimestre,$estado_id);
        return $s->execute();
    }

    public function update($id,$nombre,$anio,$cuatrimestre,$estado_id){
        $s=$this->conexion->prepare("UPDATE materias SET nombre=?,anio=?,cuatrimestre=?,estado_id=? WHERE materia_id=?");
        $s->bind_param("sisii",$nombre,$anio,$cuatrimestre,$estado_id,$id);
        return $s->execute();
    }

    public function delete($id){
        $s=$this->conexion->prepare("UPDATE materias SET activo=false WHERE materia_id=?");
        $s->bind_param("i",$id);
        return $s->execute();
    }


}
