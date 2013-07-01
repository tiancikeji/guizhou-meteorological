<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forecast extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->model("Forcast_Model");
    $city = "贵阳";
    $data['three_days'] = $this->Forcast_Model->get_three_days($city);
		$this->load->view('forecast',$data);
	}


	public function details()
	{
    $title = $this->input->get("title");// "上下班及晚间预报";
    $this->load->model("Forcast_Model");
    $data['trend'] = $this->Forcast_Model->get_trend($title);
		$this->load->view('forecast-details',$data);
	}


	public function living()
	{
		$this->load->view('forecast-living');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
