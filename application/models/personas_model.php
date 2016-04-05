<?php
class personas_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function getPersonasPagination($pagina,$porpagina,$quehago)
    {
        switch($quehago)
        {
            case 'limit':
                $query=$this->db
                    ->select("id,nombre,correo,telefono,fecha")
                    ->from("personas")
                    ->order_by("id","desc")
                    ->limit($porpagina,$pagina)
                    ->get();
                return $query->result();
                break;
            case 'cuantos':
                $query=$this->db
                    ->select("id,nombre,correo,telefono,fecha")
                    ->from("personas")
                    ->order_by("id","desc")
                    ->count_all_results();
                return $query;
                break;
        }
    }
}