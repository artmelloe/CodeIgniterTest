<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {

    public $id;
    public $nome;

    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        $this->db->select('id, nome, criado, modificado');
        $this->db->from('cargo');
        $this->db->order_by('criado', 'DESC');
        return $this->db->get()->result();
    }

    public function by_id($id)
    {
        $this->db->select('id, nome');
        $this->db->from('cargo');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }

    public function programmer_exist($id)
    {
        $this->db->select('c.id');
        $this->db->from('cargo c');
        $this->db->where('p.cargo_id', $id);
        $this->db->join('programador p', 'c.id = p.cargo_id');
        return $this->db->get()->result();
    }

    public function insert($nome)
    {
        $data['nome'] = $nome;
        return $this->db->insert('cargo', $data);
    }

    public function update($id, $nome)
    {
        $data['nome'] = $nome;
        $this->db->where('id', $id);
        return $this->db->update('cargo', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('cargo');
    }

}
