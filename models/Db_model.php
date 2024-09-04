<?php
class Db_model extends CI_Model {

	public function __construct()
	{
		// connect to database
		$this->load->database();			
	}
	
	// Get a collection of book records
	public function get_books()
	{
		$query = $this->db->get('books');
		return $query->result_array();
	}
	
	// Get a book with specify id
	public function get_book($id)
	{
		if ($id !== FALSE)
		{
			$query = $this->db->get_where('books', array('id' => $id));
			return $query->result_array();
		}
	}
	
	// Create a book with auto increment id
	public function create_book($data)
	{
		$newbook = array(
			'id' => NULL,
			'title' => $data['title'],
			'author' => $data['author'],
			'genre' => $data['genre'],
			'published_year' => $data['published_year'],
			'description' => $data['description']
		);
		
		$this->db->insert('books', $newbook);
	}

	// Update a book with specify id
	public function update_book($id, $data)
	{
		$updates = array(
			'title' => $data['title'],
			'author' => $data['author'],
			'genre' => $data['genre'],
			'published_year' => $data['published_year'],
			'description' => $data['description']
		);
		
		$this->db->where('id', $id);
		$result = $this->db->update('books', $updates);
		
		return $result;
	}
	
	// Delete a book with specify id
	public function delete_book($id)
	{
		$result = $this->db->delete('books', array('id' => $id));
		
		return $result;
	}
}
