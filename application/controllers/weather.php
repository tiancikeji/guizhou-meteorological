<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Weather extends CI_Controller {

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
    $this->load->model('Weather_Model');
    $this->load->model("Forcast_Model");
    $citycode = $this->input->get('citycode');// "57816";
    $data['citycode'] = $citycode ;
    $data['cityname'] = $this->Weather_Model->get_city_name($citycode);
    $data['weather'] = $this->Weather_Model->get_current($citycode);
    $data['stations'] = $this->Forcast_Model->get_all_stations();
    $data['windDirect'] = $this->Weather_Model->windDirect($data['weather'][0]->windv);
		$this->load->view('weather.php',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
