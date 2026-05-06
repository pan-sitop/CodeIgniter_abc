<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    // 1. Ver la lista (Página Principal)
    public function index() {
        $query = $this->db->query("SELECT * FROM alumno");
        $data['datos'] = $query->result();
        $this->load->view('alumnos/index', $data);
    }

    // 2. Mostrar el formulario (Página Nueva)
    public function nuevo() {
        $this->load->view('alumnos/formulario');
    }

    // 3. Procesar el guardado (Sin vista, solo redirige)
    public function adicionar() {
        $data = array(
            'ci'      => $this->input->post('ci'),
            'nombre'  => $this->input->post('nombre'),
            'paterno' => $this->input->post('paterno'),
            'materno' => $this->input->post('materno')
        );
        $this->db->insert('alumno', $data);
        redirect('Alumnos/index');
    }
}