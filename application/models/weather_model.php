<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Weather_Model extends CI_Model {

    function get_current()
    {
       $this->db->where('station_name', '贵阳');
       $query = $this->db->get('gzqx_weather_stationjxh');
       // $sql = "select * from gzqx_weather_stationjxh  where station_name = '贵阳' order by hours limit 1;";
       return $query->result();
    }

}

