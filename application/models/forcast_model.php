<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Forcast_Model extends CI_Model {

    function get_three_days($city)
    {
        $this->db->where('county', $city);
        $query = $this->db->get('gzqx_county_forcast');
        return $query->result();
    }

    function get_all_stations(){
      $query = $this->db->get('gzqx_weather_stations');
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

    function get_living($cityid)
    {
      $txt = array();

      //紫外线强度
      $sql = "SELECT 'zwxqd',`b`.`live_name`, `b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`ultraviolet_rays` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '紫外线' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['zwxqd'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //晾晒指数
      $sql = "SELECT 'lszs',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`dry` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '晾晒' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['lszs'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //舒适度
      $sql = "SELECT 'ssd',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`comfort_08` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '舒适度' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['ssd'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //旅游指数
      $sql = "SELECT 'lyzs',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`travel` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '旅游' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['lyzs'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //着装指数
      $sql = "SELECT 'zzzs',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`dressing` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '着装' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['zzzs'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //城市火险
      $sql = "SELECT 'cshx',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`city_fire` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '城市火险' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['cshx'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //晨练指数
      $sql = "SELECT 'clzs',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`morning_exercise` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '晨练' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['clzs'],$row['index_description'],$row['description'])?array($row['clzs'],$row['index_description'],$row['description']):array($row['clzs'],"无预报","无预报");
      $txt[]= $row;

      //空气质量
      $sql = "SELECT 'kqzl',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`air_quality` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '空气质量' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[] = array($row['kqzl'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //感冒指数
      $sql = "SELECT 'gmzs',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`catch_cold` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '感冒' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['gmzs'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //高血压指数
      $sql = "SELECT 'gxyzs',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`hypertension` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '高血压' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['gxyzs'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //呼吸道炎症指数
      $sql = "SELECT 'hxdyz',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`respiratory_tract` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '呼吸道炎症' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['hxdyz'],$row['index_description'],$row['description']);
      $txt[]= $row;

      //支气管哮喘指数
      $sql = "SELECT 'zqgxc',`b`.`live_name`,`b`.`index_description`,`b`.`description` FROM `gzqx_index_live` `a` LEFT JOIN `gzqx_index_live_description` `b` ON `a`.`bronchial_asthma` =`b`.`value` WHERE `a`.`nations` = '".$cityid."' AND `b`.`live_name` = '支气管哮喘' ORDER BY `a`.`pubdate` DESC limit 1";
      $query = $this->db->query($sql);
      $row =  $query->result();
      // $txt[]= array($row['zqgxc'],$row['index_description'],$row['description']);
      $txt[]= $row;

      return $txt;
  }
}

