<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bd_model extends CI_Model{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->DATABASE();
  }

    function guardar($super){
      extract($super);
      $datos = array('nombre' => $nombre, 'descripcion' => $descripcion, 'precio' => $precio);
      $this->db->insert('productos', $datos);
    }

    function seleccionar(){
      $info = $this->db->query('SELECT * FROM productos');
      return $info->result();
    }
}
