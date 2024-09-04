<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/index.php/books
	 *	- or -
	 * 		http://localhost/
	 * Since this controller is set as the default controller in
	 * config/routes.php
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
			parent::__construct();
			$this->load->model('db_model');
			$this->load->helper('url_helper');
			$this->load->helper('pretty_prt_array_helper');
			$this->load->library('Javascript');
	}
		
	public function index($id = NULL)
	{
		// Books Controller index method, which will called by default
				
		if ($id != NULL) {
			// pass onto controller function to view one book
			$this->view($id);
		} 
		else {
			// list all books in database
			$data = $this->db_model->get_books();

			// produce Json encoded data
			echo json_encode($data);
		}
	}

	public function view($id = NULL)
	{
		// Books Controller view method, to view a book by id
		
		$data = $this->db_model->get_book($id);
		
		// encode to json format to fetch to front-end.
		echo json_encode($data);
	}
	
	public function update($data = NULL)
	{
		// Books Controller update method, to update a book by id
	
		$result = $this->db_model->update_book($data['id'], $data);
		echo $result;
	}
	
	public function create($data)
	{
		// Books Controller create method, to create a book

		$result = $this->db_model->create_book($data);
		echo $result;
	}
	
	public function delete($id = NULL)
	{
		// Books Controller delete method, to delete a book

		$result = $this->db_model->delete_book($id);
		echo $result;
	}

}
