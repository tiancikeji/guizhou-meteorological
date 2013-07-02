<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_Model extends CI_Model {

    function get_last_ten_entries()
    {
        $query = $this->db->query("SELECT arc.id,arc.title,arc.pubdate,arc.litpic,addon.body FROM gzqx_archives arc LEFT JOIN gzqx_addonarticle addon ON arc.id = addon.aid WHERE arc.typeid = '13' AND arc.litpic <>'' ORDER BY arc.pubdate DESC LIMIT 10");
        return $query->result();
    }

    function find_by_id($id)
    {
        $query = $this->db->query("SELECT arc.id,arc.title,arc.pubdate,arc.litpic,addon.body FROM gzqx_archives arc LEFT JOIN gzqx_addonarticle addon ON arc.id = addon.aid WHERE arc.id = '".$id."' LIMIT 1");
        return $query->result();
    }

}

/* End of file news.php */
