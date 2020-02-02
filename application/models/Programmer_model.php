<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer_model extends CI_Model {

    public $id;
    public $nome;
    public $idade;
    public $cidade;
    public $email;
    public $anos_exp;

    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        $this->db->select('p.id, p.nome, p.idade, p.cidade, p.email, c.nome as cargo, p.anos_exp, p.criado, p.modificado');
        $this->db->from('programador p');
        $this->db->order_by('p.criado', 'DESC');
        $this->db->join('cargo c', 'c.id = p.cargo_id');
        return $this->db->get()->result();
    }

    public function by_id($id)
    {
        $this->db->select('id, nome, idade, cidade, email, cargo_id, anos_exp');
        $this->db->from('programador');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }

    public function insert($nome, $idade, $cidade, $email, $cargo, $anos_exp)
    {
        $data['nome'] = $nome;
        $data['idade'] = $idade;
        $data['cidade'] = $cidade;
        $data['email'] = $email;
        $data['cargo_id'] = $cargo;
        $data['anos_exp'] = $anos_exp;
        return $this->db->insert('programador', $data);
    }

    public function email_unique($email)
    {
        $this->db->select('email');
        $this->db->from('programador');
        $this->db->where('email', $email);
        return $this->db->get()->result();
    }

    public function update($id, $nome, $idade, $cidade, $cargo, $anos_exp)
    {
        $data['nome'] = $nome;
        $data['idade'] = $idade;
        $data['cidade'] = $cidade;
        $data['cargo_id'] = $cargo;
        $data['anos_exp'] = $anos_exp;
        $this->db->where('id', $id);
        return $this->db->update('programador', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('programador');
    }
}
