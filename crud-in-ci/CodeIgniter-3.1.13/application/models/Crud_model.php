<?php
class Crud_model extends CI_Model{
    public function getAllproducts(){
        $query=$this->db->get('fruits');
     
        if ($query){
            return $query->result();

        }
    }

    public function insertProduct($data){
        $query=$this->db->insert('fruits',$data);

        if($query){
            return true;
        }
        else{
            return false;
        }
    }
    public function getSingleProduct($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('fruits');

        if($query){
            return $query->row();
        }
    }
    public function updateProduct($data,$id)
    {
        $this->db->where('id',$id);
       $query= $this->db->update('fruits',$data);
       if($query){
        return true;
       }
       else{
        return false;
       }
    }

    public function deleteitem($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->delete('fruits');
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
}
?>