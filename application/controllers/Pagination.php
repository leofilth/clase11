<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->layout->setLayout('template');
    }
    public function index()
    {
        /**
         * Creamos el codigo de la paginacion
        */
        if($this->uri->segment(3))
        {
            $pagina=$this->uri->segment(3);
        }
        else
        {
            $pagina=0;
        }
        $porpagina=10;
        $datos=$this->personas_model->getPersonasPagination($pagina,$porpagina,"limit");
        $cuantos=$this->personas_model->getPersonasPagination($pagina,$porpagina,"cuantos");
        $config['base_url']=base_url().'pagination/index/';
            $config['total_rows']=$cuantos;
            $config['per_page']=$porpagina;
            $config['uri_segment']='3';
            $config['num_links']='4';
            $config['first_link']='Primero';
            $config['next_link']='Siguiente';
            $config['prev_link']='Anterior';
            $config['last_link']='Ultimo';
        $this->pagination->initialize($config);
        /**
         * Cargamos la vista con los datos
         */
        $this->layout->view('pagination',compact("datos"));
    }

}