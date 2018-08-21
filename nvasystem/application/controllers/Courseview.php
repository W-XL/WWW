<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courseview extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$id = $this->input->get('id',true);
//		$id_list = array(11,20,8,12,10,40);
//		if(in_array($id,$id_list)){
//            header("Location:http://".$_SERVER['HTTP_HOST']."/");
//        }
		$query = $this->db->query("SELECT * FROM course_list WHERE courseid = '".$id."'");

		$row = $query->row();

		if (isset($row))
		{
			$course_data = json_decode($row->photoa);
			$new_data = Array();
			
			$nd = 0;
			$ndd = 0;
			foreach ($course_data as $rowa)
			{
				$photos = $this->db->query("SELECT * FROM photos_url WHERE pid = '".$rowa->pid."' ORDER BY rank ASC");
				$url_data = Array();
				foreach ($photos->result() as $rowb)
				{
					$url_data[$ndd] = $rowb->url;
					$ndd = $ndd +1;
				}
				$new_data[$nd] = array(
				'name' => $rowa->name,
				'url_data' => $url_data,
				'content' => $rowa->content
				);
				$nd = $nd +1;
			}
			
			$data = array(
				'name' => $row->name,
				'coursephoto' => $row->coursephoto,
				'content' => $row->content,
				'photos_data' => $new_data,
			);
			$this->load->view('courseview',$data);
		}
		else
		{
			$this->output->set_status_header(404);
		}
		
	}
}