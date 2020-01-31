<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class User_datatable extends CI_Model
{
	  var $table = "user";
      var $select_column = array("*");
      var $order_column = array("nama_depan","nama_belakang","phone","email");

  //query insert data
  function insert_all($table,$data) {
    $this->db->insert($table,$data);
  }

    function update_all($where,$data,$table) {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  // chech or ambil all data
	function check_all($table,$where,$limit) {
  $query = $this->db->get_where($table,$where,$limit);
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else {
			return false;
		}
	}
  /*
      function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
           $this->db->where('u.barcode=b.code');
           if(isset($_POST["search"]["value"]))
           {
                $this->db->group_start();
                $this->db->like("u.nama_depan", $_POST["search"]["value"]);
                $this->db->or_like("u.nama_belakang", $_POST["search"]["value"]);
                $this->db->or_like("b.nomer_kode", $_POST["search"]["value"]);
                //$this->db->or_like("p.nama_paket", $_POST["search"]["value"]);
                $this->db->or_like("u.phone", $_POST["search"]["value"]);
                $this->db->or_like("u.email", $_POST["search"]["value"]);
                //$this->db->or_like("k.nama", $_POST["search"]["value"]);
                $query = $this->db->query("SELECT COLUMN_NAME as col FROM information_schema.columns WHERE table_name='barcode'");
                foreach ($query->result() as $key => $value) {
                    $this->db->or_like("b.".$value->col, $_POST["search"]["value"]);
                }
                $this->db->group_end();
           }
           if(isset($_POST["order"]))
           {
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
           }
           else
           {
                $this->db->order_by('u.created_at', 'DESC');
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
           $this->db->where('u.barcode=b.code');
           return $this->db->count_all_results();
      }

          function delete_data($nim)
      {
           $this->db->where("nim", $nim);
           $this->db->delete($this->table);
           //DELETE FROM users WHERE id = '$user_id'
      }
*/

function make_query()
      {
           $this->db->select($this->select_column);
           $this->db->from($this->table);
           if(isset($_POST["search"]["value"]))
           {
                $this->db->like("nama_depan", $_POST["search"]["value"]);
                $this->db->or_like("nama_belakang", $_POST["search"]["value"]);
                $this->db->or_like("email", $_POST["search"]["value"]);
                $this->db->or_like("phone", $_POST["search"]["value"]);
                $this->db->or_like('barcode', $_POST["search"]["value"]);
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

          function delete_data($nim)
      {
           $this->db->where("nim", $nim);
           $this->db->delete($this->table);
           //DELETE FROM users WHERE id = '$user_id'
      }

	}

?>
