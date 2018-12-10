<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Product_model extends CI_Model{

		public function __construct() {
			
			$this->load->database();

		}

		public function get_posts($slug = FALSE,$section) {

			if($slug === FALSE) {
				
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get_where('products', array('section' => $section));
				return $query->result_array();

			}

			$query = $this->db->get_where('products', array('slug' => $slug));

			return $query->row_array();
		}

		public function get_all_posts() {

			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('products');
			return $query->result_array();

			
		}

		public function create_post($post_image) {

			$slug = url_title($this->input->post('title'));

			$data = array(
					'title' => $this->input->post('title'),
					'slug' => $slug,
					'body' => $this->input->post('body'),
					'section' => $this->input->post('section'),
					'image' => $post_image,
					'created_by' => $this->session->userdata('name'),
					'created_at' => date('Y-m-d H:i:s')
				);

			return $this->db->insert('products', $data);

		}

		public function delete_post($id) {

			$this->db->where('id', $id);
			$this->db->delete('products');

			return true;

		}

		public function update_post($post_image) {

			$slug = url_title($this->input->post('title'));

			$data = array(
					'title' => $this->input->post('title'),
					'slug' => $slug,
					'body' => $this->input->post('body'),
					'section' => $this->input->post('section'),
					'image' => $post_image,
					'created_by' => $this->session->userdata('name'),
					'created_at' => date('Y-m-d H:i:s')
				);

			$this->db->where('id', $this->input->post('id'));

			return $this->db->update('products', $data);
		}

	}