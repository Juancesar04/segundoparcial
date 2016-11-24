<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class corazon extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('url');
    $this->load->model('bd_model');
  }

  function index(){
    $datos['itla'] = $this->bd_model->seleccionar();
    $this->load->view('home.php', $datos);
  }
  function guardar(){
    echo "Los Datos se han guardado satisfactoriamente <a href='http://localhost/segundoparcial/'>Volver a Inicio</a>";
    if(!empty($_POST)){
      $this->bd_model->guardar($_POST);
    }
  }

}
