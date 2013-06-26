<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News_Model extends CI_Model {

    function get_last_ten_entries()
    {
        $query = $this->db->get('gzqx_archives', 10);
        return $query->result();
    }

}

/* End of file news.php */
