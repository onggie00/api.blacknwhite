<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Barcode_datatable extends CI_Model
{
	  	var $table = "barcode";
      var $select_column = array("*");
      var $order_column = array( "code",'created_at','nomer_kode');
     
      function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
           //$this->mymodel->withquery("select * from barcode limit 10",'result');
           if(isset($_POST["search"]["value"]))
           {
                $this->db->like("nomer_kode", $_POST["search"]["value"]);
                $this->db->or_like('code',$_POST["search"]["value"]);
           }
           if(isset($_POST["order"]))
           {
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

           }
           else
           {
                $this->db->order_by('nomer_kode', 'ASC');
           }
      }
      
      function make_datatables(){
        
        /*if(isset($_POST["search"]["value"]))
           {
                //$this->db->like("code", $_POST["search"]["value"]);
                //$this->db->or_like('nomer_kode', $_POST["search"]["value"]);
                //$this->db->or_like('nama_depan', $_POST["search"]["value"]);
          $this->mymodel->withquery("
          select b.* from barcode b,user u
          where b.code like '%".$_POST["search"]["value"]."%'
          or b.nomer_kode like '%".$_POST["search"]["value"]."%'
          or u.nama_depan like '%".$_POST["search"]["value"]."%'
          or u.nama_belakang like '%".$_POST["search"]["value"]."%'
          order by created_at limit 10",'result');
           }
           else{
           $this->make_query();
           }*/

           $this->make_query();
           if($_POST["length"] != -1)
           {
                $this->db->limit($_POST['length'], $_POST['start']);
           }
           $query = $this->db->get();
           return $query->result();
      }
      function get_filtered_data(){
           $this->make_query();
           $query = $this->db->get();
           return $query->num_rows();
      }
      function get_all_data()
      {
           $this->db->select("*");
           $this->db->from($this->table);
           return $this->db->count_all_results();
      }

      /*
      function make_query($term=''){ //term is value of $_REQUEST['search']['value']
          $column = array('b.*','u.nama_depan','u.nama_belakang','u.phone');
          $this->db->select('b.*','u.nama_depan','u.nama_belakang','u.phone');
          $this->db->from('barcode as b');
          $this->db->join('user as u', 'u.barcode = b.code','left');
          $this->db->like('b.code', $term);
          $this->db->or_like('u.nama_depan', $term);
          $this->db->or_like('u.nama_belakang', $term);
          $this->db->or_like('u.phone', $term);
          if(isset($_REQUEST['order'])) // here order processing
          {
             $this->db->order_by($column[$_REQUEST['order']['0']['column']], $_REQUEST['order']['0']['dir']);
          } 
          else if(isset($this->order))
          {
             $order = $this->order;
             $this->db->order_by(key($order), $order[key($order)]);
          }
      }
      function make_datatables(){
        $term = $_REQUEST['search']['value'];   
        $this->make_query($term);
        if($_REQUEST['length'] != -1)
        $this->db->limit($_REQUEST['length'], $_REQUEST['start']);
        $query = $this->db->get();
        return $query->result();
      }
      function get_filtered_data(){
        $term = $_REQUEST['search']['value']; 
        $this->make_query($term);
        $query = $this->db->get();
        return $query->num_rows(); 
      }
      function get_all_data()
      {
        $this->db->from($this->table);
        return $this->db->count_all_results();
      }
      */
	}

?>
