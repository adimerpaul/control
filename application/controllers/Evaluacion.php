<?php

header("Content-Type: text/html;charset=utf-8");
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Evaluacion extends CI_Controller{
    function index(){
        if ($_SESSION['iddocente']==""){
            header("Location: ".base_url());
        }
        $this->load->view('templates/header');
        $this->load->view('evaluacion');
        $this->load->view('templates/footer');
//        echo $_SESSION['tipo'];
    }
    function agregartemporaltema(){
        $nombre=$_POST['nombre'];
        $estado=$_POST['estado'];
        $query=$this->db->simple_query("INSERT INTO temporaltema SET
        nombre='$nombre',
        estado='$estado',
        idusuario='".$_SESSION['iddocente']."' ");
        if ($query){
            echo 1;
        }
    }
    function modificartemporaltema(){
        $nombre=$_POST['nombre'];
        $estado=$_POST['estado'];
        $id=$_POST['id'];
        $query=$this->db->simple_query("UPDATE temporaltema SET
        nombre='$nombre',
        estado='$estado'
        WHERE idtemporaltema='$id'");
        if ($query){
            echo 1;
        }
    }
    function eliminartemporaltema(){
        $id=$_POST['id'];
        $query=$this->db->simple_query("DELETE FROM temporaltema 
        WHERE idtemporaltema='$id'");
        if ($query){
            echo 1;
        }
    }
    function datos(){
        $query=$this->db->query("SELECT * FROM temporaltema WHERE idusuario='".$_SESSION['iddocente']."'");
        echo json_encode($query->result_array()) ;
    }
    function insert(){
//        echo var_dump($_POST);
        $facultad=$_POST['facultad'];
        $carrera=$_POST['carrera'];
        $asignatura=$_POST['asignatura'];
        $gestion=$_POST['gestion'];
        $sigla=$_POST['sigla'];
        $nombredocente=$_POST['nombredocente'];
        $fechapresentacion=date('Y-m-d');
        $fechainicio=$_POST['fechainicio'];
        $fechaconclusion=$_POST['fechaconclusion'];
        $paralelo=$_POST['paralelo'];
        $cumplimiento=$_POST['cumplimiento'];
        $comentario=$_POST['comentario'];
        $justificacion=$_POST['justificacion'];

        $this->db->query("INSERT INTO evaluacion SET
facultad='$facultad',
carrera='$carrera',
asignatura='$asignatura',
gestion='$gestion',
sigla='$sigla',
nombredocente='$nombredocente',
fechapresentacion='$fechapresentacion',
fechainicio='$fechainicio',
fechaconclusion='$fechaconclusion',
justificacion='$justificacion',
iddocente='".$_SESSION['iddocente']."',
paralelo='$paralelo',
cumplimiento='$cumplimiento',
comentario='$comentario'
");
        $idevaluacion=$this->db->insert_id();
        $query=$this->db->query("SELECT * FROM temporaltema WHERE idusuario='".$_SESSION['iddocente']."'");
        foreach ($query->result() as $row){
            $this->db->query("INSERT INTO tema SET nombre='$row->nombre',estado='$row->estado',idevaluacion='$idevaluacion'");
        }
        $this->db->query("DELETE FROM temporaltema WHERE idusuario='".$_SESSION['iddocente']."'");
        for ($i=1;$i<=20;$i++){
            if (isset($_POST['nombreexamen'.$i])){
                $this->db->query("INSERT INTO examen SET examen='".$_POST['nombreexamen'.$i]."',fecha='".$_POST['fechaexamen'.$i]."',idevaluacion='$idevaluacion'");
            }
        }

        for ($i=1;$i<=20;$i++){
            if (isset($_POST['nombrepractica'.$i])){
                $this->db->query("INSERT INTO practica SET practica='".$_POST['nombrepractica'.$i]."',fecha='".$_POST['fechapractica'.$i]."',idevaluacion='$idevaluacion'");
            }
        }

        for ($i=1;$i<=20;$i++){
            if (isset($_POST['nombreproyecto'.$i])){
                $this->db->query("INSERT INTO proyecto SET proyecto='".$_POST['nombreproyecto'.$i]."',fecha='".$_POST['fechaproyecto'.$i]."',idevaluacion='$idevaluacion'");
            }
        }
        header("Location: ".base_url().'Evaluacion');
    }
    function exportexcel(){
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('Evaluación_docente_1110_I-2019.xls');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->getCell('A1')->setValue('John');
        $worksheet->getCell('A2')->setValue('Smith');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $writer->save('write.xls');
        header("Content-disposition: attachment; filename=write.xls");
        header("Content-type: application/xls");
        readfile("write.xls");
    }
}
