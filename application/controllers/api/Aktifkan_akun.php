  <?php
  date_default_timezone_set('Asia/Jakarta');
  require APPPATH . '/libraries/REST_Controller.php';

  class Aktifkan_akun extends REST_Controller {

      function __construct($config = 'rest') {
          parent::__construct($config);
      }
      // insert new data to account
      function index_post() {
        $token = "";
        $headers=array();
        foreach (getallheaders() as $name => $value) {
            $headers[$name] = $value;
        }
        if(isset($headers['token']))
          $token =  $headers['token'];

        if ($token != '') {
            $mem = $this->mymodel->getbywhere('user','token',$token,'row');
            if (isset($mem)) {
                $kd = $this->mymodel->getbywhere('kode_verifikasi','id_user='.$mem->id_user,'','row');
                $kode=$this->post('kode_verifikasi');
                if ($mem->status_aktif==1) {
                  $msg = array('status'=>1,'message'=>'Akun Anda Sudah Aktif');
                }else {
                  if ($kode==$kd->kode) {
                      $data = array('status_aktif' =>1);
                      $this->mymodel->update('user',$data,'id_user',$mem->id_user);
                      $msg = array('status'=>1,'message'=>'Akun Anda Telah Aktif');
                  }
                  else {
                    $msg = array('status'=>0,'message'=>'Kode Verifikasi Salah');
                  }

                }

            }
            $this->response($msg);
        }else {
          $data = array();
          $msg = array('status' => 0, 'message'=>'Token anda kosong');
          $this->response($msg);
        }

      }


  }
  ?>
