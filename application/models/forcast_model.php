<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Forcast_Model extends CI_Model {

    function get_three_days($city)
    {
        $this->db->where('city', $city);
        $query = $this->db->get('gzqx_city_forcast');
        return $query->result();
    }

    function get_six_hours()
    {
        $query = $this->db->query('SELECT * FROM (
          SELECT `a`.`value_621`,`b`.`phenomena`,`a`.`value_622`,`a`.`value_623`,`a`.`value_624`,`c`.`wind_direction`,
          `a`.`value_625`,`d`.`wind_power`,`a`.`value_626` ,`a`.`period`,`a`.`file_name`,`a`.`publish_time` ,`a`.`time`
          FROM `gzqx_six_forcast` `a`
          LEFT JOIN `gzqx_six_forcast_rank_code` `b` ON `b`.`phenomena_id` = `a`.`value_621`
          LEFT JOIN `gzqx_six_forcast_rank_code` `c` ON `c`.`wind_direction_id` = `a`.`value_624`
          LEFT JOIN `gzqx_six_forcast_rank_code` `d` ON `d`.`wind_power_id` = `a`.`value_625`
          ORDER BY  `a`.`id` DESC LIMIT 4) `b` ORDER BY `b`.`period` ASC ;');
        return $query->result();
    }

    function get_trend($title)
    {
      $this->db->where('title',$title);
      $this->db->order_by("pubdate", "desc"); 
      $this->db->limit(1);
      $query = $this->db->get('gzqx_week_trend_forcast');
      // echo $this->db->last_query();
      return $query->result();
    }

    function get_living($citycode)
    {
      $sql = "SELECT `b`.`index_description`,`b`.`description`,`b`.`live_name` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b`  ON `a`.`ultraviolet_rays` =`b`.`value` WHERE `a`.`nations` = '".$citycode."'  ORDER BY `a`.`pubdate` DESC limit 1;";
      $query = $this->db->query($sql);
      return $query->result();
    }
}

