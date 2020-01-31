<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Poin_khusus_hadir_event_datatable extends CI_Model
{
	  	var $table = "poin_event";
      var $select_column = array("*");
      var $order_column = array('nama_peserta','phone_peserta','nomer_kartu','nama_event','created_at');
      function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
           if(isset($_POST["search"]["value"]))
           {
                $this->db->like("nama_peserta", $_POST["search"]["value"]);
                $this->db->or_like('phone_peserta', $_POST["search"]["value"]);
                $this->db->or_like('nomer_kartu', $_POST["search"]["value"]);
                $this->db->or_like('nama_event', $_POST["search"]["value"]);
           }
           if(isset($_POST["order"]))
           {
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
           }
           else
           {
                $this->db->order_by('created_at', 'DESC');
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
           return $this->db->count_all_results();
      }
	}

?>
