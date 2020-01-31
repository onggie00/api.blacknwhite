<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Version_app_datatable extends CI_Model
{
	  	var $table = "version_app";
      var $select_column = array("*");
      var $order_column = array('');
      function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
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
           return $this->db->count_all_results();
      }
	}

?>
