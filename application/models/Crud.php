<?php
 
 
class Crud extends CI_Model{
 
    // public function __construct()
    // {
    //     $this->load->database();
    //     $this->load->helper('url');
    // }
 
    /*
        Get all the records from the database
    */
    public function get_all($table)
    {
        $all_records = $this->db->get($table)->result();
        return $all_records;
    }
 
    /*
        Store the record in the database
    */
    public function store($table,$arr)
    {    
        // $arr = [
        //     'name'        => $this->input->post('name'),
        //     'description' => $this->input->post('description')
        // ];
 
        $result = $this->db->insert($table, $arr);
        return $result;
    }
 
    /*
        Get an specific record from the database
    */
    public function get($table,$id)
    {
        $the_record = $this->db->get_where($table, ['ID' => $id ])->row();
        return $the_record;
    }
 
 
    /*
        Get an specific record from the database by Params
    */
    public function get_para($table,$arr)
    {
        $the_record = $this->db->get_where($table, $arr)->row();
        return $the_record;
    }
 
 
    /*
        Update or Modify a record in the database
    */
    public function update($table, $id, $arr) 
    {
        // $data = [
        //     'name'        => $this->input->post('name'),
        //     'description' => $this->input->post('description')
        // ];
 
        $result = $this->db->where('ID',$id)->update($table,$arr);
        return $result;
                 
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($table, $id)
    {
        $result = $this->db->delete($table, array('ID' => $id));
        return $result;
    }
    public function log_in_correctly($user,$pass) {  
        $this->db->where('email', $user);  
        $this->db->where('password', $pass); 
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else { 
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        $query2 = $this->db->get('users'); 
         if ($query2->num_rows() == 1) {
             return true;
         }else{ 
            return false;  }
        }  
           
       }  
     
}
?>