<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{
     function productcount($searchText = '')
    {
        $this->db->select('BaseTbl.id, BaseTbl.name, BaseTbl.desc, BaseTbl.img, BaseTbl.catagory');
        $this->db->from('tbl_product as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%'
                            OR BaseTbl.catagory  LIKE '%".$searchText."%'
                            OR BaseTbl.id  LIKE '%".$searchText."%'
                            OR  BaseTbl.desc  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function productlisting($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.id, BaseTbl.name, BaseTbl.desc, BaseTbl.img, BaseTbl.catagory');
        $this->db->from('tbl_product as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.name  LIKE '%".$searchText."%'
                            OR BaseTbl.catagory  LIKE '%".$searchText."%'
                            OR BaseTbl.id  LIKE '%".$searchText."%'
                            OR  BaseTbl.desc  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function deleteProduct($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_product');
    }

    function add($save)
    {

    $this->db->trans_start();
    $this->db->insert('tbl_product', $save);

    $insert_id = $this->db->insert_id();

    $this->db->trans_complete();

    return $save;
    }

}

  