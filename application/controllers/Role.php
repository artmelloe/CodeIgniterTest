<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('role_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = ROLE_ALL_TITLE;
		$data['roles'] = $this->role_model->all();
		$this->load->view('template/top', $data);
		$this->load->view('role', $data);
		$this->load->view('template/bottom');
	}

	public function new($nome = null)
	{	

		if($this->input->post()){

			$this->form_validation->set_rules('role-name', 'nome', 'required|min_length[6]|max_length[100]');

			if($this->form_validation->run() == true){

				$nome = $this->input->post('role-name');

		        if($this->role_model->insert($nome)){

					$data['success'] = ROLE_NEW_SUCCESS;
		        }else{

					$data['error'] = ROLE_NEW_ERROR;
				}
			}
		}

		$data['title'] = ROLE_NEW_TITLE;

		$data['roles'] = $this->role_model->all();

		$this->load->view('template/top', $data);
		$this->load->view('new_role', $data);
		$this->load->view('template/bottom');
	}

	public function update($id = null)
	{	

		if(isset($id)){

			if(!empty($this->role_model->by_id($id))){

				if($this->input->post()){

					$this->form_validation->set_rules('role-name', 'nome', 'required|min_length[6]|max_length[100]');

					if($this->form_validation->run() == true){

						$nome = $this->input->post('role-name');

						if($this->role_model->update($id, $nome)){
							
							$data['success'] = ROLE_UPDATE_SUCCESS;
						}else{

							$data['error'] = ROLE_UPDATE_ERROR;
						}
					}
				}
			}else{
				redirect(BASE_URL('role'));
			}
		}else{
			redirect(BASE_URL('role'));
		}

		$data['title'] = ROLE_UPDATE_TITLE;

		$data['role'] = $this->role_model->by_id($id);

		$this->load->view('template/top', $data);
		$this->load->view('update_role', $data);
		$this->load->view('template/bottom');
	}

	public function delete($id = null)
	{	

		if(isset($id)){

			if(!empty($this->role_model->by_id($id))){

				if(empty($this->role_model->programmer_exist($id))){

					if($this->role_model->delete($id)){

						$this->session->set_flashdata('success', ROLE_DELETED_SUCCESS);
					}else{

						$this->session->set_flashdata('error', ROLE_DELETED_ERROR);
					}
				}else{
					$this->session->set_flashdata('error', ROLE_PROGRAMMER_EXIST_ERROR);
				}
			}
		}

		redirect(BASE_URL('role'));
	}
}
