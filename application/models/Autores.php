<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autores extends CI_Model {
    function getAll(){
        return $this->db->get('autores')->result();
    }
}