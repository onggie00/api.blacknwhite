<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Agen_datatable extends CI_Model
{
      var $table = "agen a, agen_detail ad";
      var $select_column = array("*");
      var $order_column = array("a.email","ad.fullname","ad.phone_handphone","ad.gender","a.noktp");
      function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
           $this->db->where("a.is_deleted = 0");
           if(!empty($_POST["search"]["value"]))
           {
                $this->db->group_start();
                $this->db->like("a.email", $_POST["search"]["value"]);
                $this->db->or_like("a.noktp", $_POST["search"]["value"]);
                $query = $this->db->query("SELECT COLUMN_NAME as col FROM information_schema.columns WHERE table_name='agen_detail'");
                foreach ($query->result() as $key => $value) {
                    $this->db->or_like("ad.".$value->col, $_POST["search"]["value"]);
                }
                $this->db->group_end();
           }
           if(isset($_POST["order"]))
           {
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
           }
           else
           {
                $this->db->order_by('a.created_at', 'DESC');
           }
      }
      function make_datatables(){
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
           $this->db->where("a.is_deleted = 0");
           return $this->db->count_all_results();
      }
  }

?>
