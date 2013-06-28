<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Forcast_Model extends CI_Model {

    function get_three_days($city)
    {
        $this->db->where('city', $city);
        $query = $this->db->get('gzqx_city_forcast');
        return $query->result();
    }

    function get_six_hours($city)
    {
        $this->db->where('city', $city);
        $query = $this->db->get('gzqx_six_forcast');
        return $query->result();
    }

}

