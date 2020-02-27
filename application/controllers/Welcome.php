<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	function login(){
	    $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $query=$this->db->query("SELECT * FROM docente WHERE usuario='$usuario' AND password='$clave' AND estado='ACTIVO'");
//        echo $query->num_rows();
//        exit;
        if ($query->num_rows()=="1"){
            $_SESSION['iddocente']=$query->row()->iddocente;
            $_SESSION['nombre']=$query->row()->nombre;
            $_SESSION['usuario']=$query->row()->usuario;
//            $_SESSION['idusuario']=$query->row()->idusuario;
//            $_SESSION['turno']=$query->row()->turno;
            header('Location: '.base_url().'Main');
        }else{
            header('Location: '.base_url());
        }

    }
    function logout(){
	    session_destroy();
	    header("Location: ".base_url());
    }
    function insert(){

            $nombre=strtoupper($_POST['nombre']);
            $usuario=$_POST['usuario'];
            $clave=$_POST['clave'];
//            $query=$this->db->query("INSERT INTO docente SET nombre='$nombre',usuario='$usuario',password='$clave'");
//            if ($query){
//                echo 1;
//            }
        if ($this->db->simple_query("INSERT INTO docente SET nombre='$nombre',usuario='$usuario',password='$clave'"))
        {
            echo "1";
        }
        else
        {
            echo "Query failed!";
        }


    }
}
