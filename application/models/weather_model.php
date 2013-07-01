<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Weather_Model extends CI_Model {

    function get_current($citycode)
    {
       $this->db->where('STATIONCODE', $citycode);
       $this->db->order_by("observtimes", "desc"); 
       $this->db->limit(1);
       $query = $this->db->get('gzqx_weahter_realstationdata');
       return $query->result();
    }

}

