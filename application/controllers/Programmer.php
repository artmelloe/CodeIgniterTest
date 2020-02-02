<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('programmer_model');
		$this->load->model('role_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = PROGRAMMER_ALL_TITLE;

		$data['programmers'] = $this->programmer_model->all();

		$this->load->view('template/top', $data);
		$this->load->view('programmer', $data);
		$this->load->view('template/bottom');
	}

	public function new($nome = null, $idade = null, $cidade = null, $email = null, $anos_exp = null)
	{	

		if($this->input->post()){

			$this->form_validation->set_rules('programmer-name', 'nome', 'required|min_length[6]|max_length[100]');
			$this->form_validation->set_rules('programmer-age', 'idade', 'required|numeric|greater_than_equal_to[0]');
			$this->form_validation->set_rules('programmer-city', 'cidade', 'required|min_length[6]|max_length[100]');
			$this->form_validation->set_rules('programmer-email', 'email', 'required|valid_email|trim');
			$this->form_validation->set_rules('programmer-role', 'cargo', 'required');
			$this->form_validation->set_rules('programmer-years-exp', 'anos de experiência', 'required|numeric|greater_than_equal_to[0]');

			if($this->form_validation->run() == true){

				$nome = $this->input->post('programmer-name');
				$idade = $this->input->post('programmer-age');
				$cidade = $this->input->post('programmer-city');
				$email = $this->input->post('programmer-email');
				$cargo = $this->input->post('programmer-role');
				$anos_exp = $this->input->post('programmer-years-exp');

				if(empty($this->programmer_model->email_unique($email))){
					if($this->programmer_model->insert($nome, $idade, $cidade, $email, $cargo, $anos_exp)){

						$data['success'] = PROGRAMMER_NEW_SUCCESS;
					}else{
	
						$data['error'] = PROGRAMMER_NEW_ERROR;
					}
				}else{
					$data['error'] = PROGRAMMER_EMAIL_UNIQUE_ERROR;
				}
			}
		}

		$data['title'] = PROGRAMMER_NEW_TITLE;

		$data['roles'] = $this->role_model->all();

		$this->load->view('template/top', $data);
		$this->load->view('new_programmer', $data);
		$this->load->view('template/bottom');
	}

	public function update($id = null)
	{	

		if(isset($id)){

			if(!empty($this->programmer_model->by_id($id))){

				if($this->input->post()){

					$this->form_validation->set_rules('programmer-name', 'nome', 'required|min_length[6]|max_length[100]');
					$this->form_validation->set_rules('programmer-age', 'idade', 'required|numeric|greater_than_equal_to[0]');
					$this->form_validation->set_rules('programmer-city', 'cidade', 'required|min_length[6]|max_length[100]');
					$this->form_validation->set_rules('programmer-years-exp', 'anos de experiência', 'required|numeric|greater_than_equal_to[0]');

					if($this->form_validation->run() == true){

						$nome = $this->input->post('programmer-name');
						$idade = $this->input->post('programmer-age');
						$cidade = $this->input->post('programmer-city');
						$cargo = $this->input->post('programmer-role');
						$anos_exp = $this->input->post('programmer-years-exp');

						if($this->programmer_model->update($id, $nome, $idade, $cidade, $cargo, $anos_exp)){
							
							$data['success'] = PROGRAMMER_UPDATE_SUCCESS;
						}else{

							$data['error'] = PROGRAMMER_UPDATE_ERROR;
						}
					}
				}
			}else{
				redirect(BASE_URL('programmer'));
			}
		}else{
			redirect(BASE_URL('programmer'));
		}

		$data['title'] = PROGRAMMER_UPDATE_TITLE;

		$data['programmer'] = $this->programmer_model->by_id($id);

		$data['roles'] = $this->role_model->all();

		$this->load->view('template/top', $data);
		$this->load->view('update_programmer', $data);
		$this->load->view('template/bottom');
	}

	public function delete($id = null)
	{	

		if(isset($id)){

			if(!empty($this->programmer_model->by_id($id))){

				if($this->programmer_model->delete($id)){

					$this->session->set_flashdata('success', PROGRAMMER_DELETED_SUCCESS);
	            }else{

	            	$this->session->set_flashdata('error', PROGRAMMER_DELETED_ERROR);
				}
			}
		}

		redirect(BASE_URL('programmer'));
	}
}
