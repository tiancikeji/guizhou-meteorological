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

    function get_city_name($citycode)
    {
      $query = $this->db->query("select stationname from gzqx_weather_stations where stationcode= ".$citycode);
      return $query->result();
    }

    function windDirect($wind)
    {
        $direct = '';
        switch($wind){
            case 0 : $direct='北风'; break;
            case (0<$wind && $wind<90) : $direct = '东北风'; break;
            case 90 : $direct = '东风'; break;
            case (90<$wind && $wind<180) : $direct = '东南风'; break;
            case 180 : $direct = '北风'; break;
            case (180<$wind && $wind<270) : $direct = '西南风'; break;
            case 270: $direct = '西风'; break;
            case (270<$wind && $wind<360) : $direct = '西北风'; break;
            case 360 : $direct = '北风'; break;
            default : '';
        }
        return $direct;
    }

}

