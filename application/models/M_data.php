<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model {

        function tampil_data(){
        return $this->db->get('lab_parasit');
    }

	
	function getAll($config){  
        $hasilquery=$this->db->get('lab_parasit', $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }


    function edit_data($where,$table){      
    return $this->db->get_where($table,$where);
}

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   

    function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}    

}

/* End of file  */
/* Location: ./application/controllers/ */ 