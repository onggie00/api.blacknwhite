<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Event_pemateri_datatable extends CI_Model
{
	  	var $table = "event_pemateri";
      var $select_column = array("*");
      var $order_column = array('nama_pemateri', "jabatan");
      function make_query($id)
      {
           $this->db->distinct()->select($this->select_column);
	 				 $this->db->from('event_pemateri');
           if(isset($_POST["search"]["value"]))
           {

						 $this->db->where('id_event',$id);
                $this->db->like("nama_pemateri", $_POST["search"]["value"]);
                $this->db->or_like("jabatan", $_POST["search"]["value"]);
           }
           if(isset($_POST["order"]))
           {

						 $this->db->where('id_event',$id);
             $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
           }
           else
           {

						 $this->db->where('id_event',$id);

                $this->db->order_by('nama_pemateri', 'ASC');
           }
      }
      function make_datatables($id){

           $this->make_query($id);
           if($_POST["length"] != -1)
           {
                $this->db->limit($_POST['length'], $_POST['start']);
           }
           $query = $this->db->get();
           return $query->result();
      }
      function get_filtered_data($id){
					$this->make_query($id);
           $query = $this->db->get();
           return $query->num_rows();
      }
      function get_all_data($id)
      {
           $this->db->select("*");
           $this->db->from($this->table);
					 $this->db->where('id_event',$id);
           return $this->db->count_all_results();
      }
	}

?>
