<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Poin_khusus_ajak_user_datatable extends CI_Model
{
	  	var $table = "poin_khusus";
      var $select_column = array("*");
      var $order_column = array('id_pengajak','nama_pengajak','phone_pengajak','kartu_pengajak','nama_diajak','phone_diajak','kartu_diajak','created_at');
      function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
           if(isset($_POST["search"]["value"]))
           {
                $this->db->like("nama_pengajak", $_POST["search"]["value"]);
                $this->db->or_like('nama_diajak', $_POST["search"]["value"]);
                $this->db->or_like('kartu_pengajak', $_POST["search"]["value"]);
                $this->db->or_like('kartu_diajak', $_POST["search"]["value"]);
                $this->db->or_like('phone_pengajak', $_POST["search"]["value"]);
                $this->db->or_like('phone_diajak', $_POST["search"]["value"]);
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
