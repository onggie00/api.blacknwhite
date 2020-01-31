<?php
date_default_timezone_set('Asia/Jakarta');

/**
 * Returns an encrypted & utf8-encoded
 */
 function humanTiming($date)
  {
    // Validate
    if( !isset($date) && !strtotime($date) ) {
        return "Improper Parameter.";
    } else {}

    // Variables
    $now = time();
    $date = strtotime($date);

    $periods = array(
        array("detik", 1),
        array("menit", 60),
        array("jam", 60),
        array("hari", 24),
        array("minggu", 7),
        array("bulan", 4.35),
        array("tahun", 12)
    );

    // Future or Past
    if( $now > $date ) {
        $difference = $now - $date;
        $tense = "yang lalu";
    } else {
        $difference = $date - $now;
        $tense = "baru saja";
    }

    // Present
    //if( $difference < 900 ) { return "baru saja"; }

    // Debug / Testing
    //echo "Difference: ".$difference." ".$periods[0][0]."s<br/>";

    // Safe Variable to Calculate
    $figure = $difference;

    // Calculate
    for( $index = 1; ($figure >= 1 && ($figure / $periods[$index][1]) >= 1) && $index < count($periods); $index++ ) {
        // Debug / Testing
        //echo "Figuring ".$figure." / ".$periods[$index][1];

        // Figure
        $figure /= $periods[$index][1];

        // Plurality Check
        if( $figure != 1) {//$periods[$index][0].="s";
        }

        // Debug / Testing
        // echo " = ".round($figure)." ".$periods[$index][0]."<br/>";
    }

    // Result
    return round($figure)." ".$periods[$index-1][0]." ".$tense;
  }
 function cleanSpaces($subject) {
   $regex = "/\s*(\.*)\s*/s";
  if (preg_match ($regex, $subject, $matches)) {
      $subject = $matches[1];
  }
    return $subject;
}
 function bacaHTML($url){
   $data = curl_init();
   curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($data, CURLOPT_URL, $url);
   $hasil = curl_exec($data);
           curl_close($data);
           return $hasil;
 }
function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

/**
 * Returns decrypted original string
 */
function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}
function convert_bulan($tgl)
{
  $tgl = str_replace("January","JAN",$tgl);
  $tgl = str_replace("February","FEB",$tgl);
  $tgl = str_replace("March","MAR",$tgl);
  $tgl = str_replace("April","APR",$tgl);
  $tgl = str_replace("May","MEI",$tgl);
  $tgl = str_replace("June","JUN",$tgl);
  $tgl = str_replace("July","JUL",$tgl);
  $tgl = str_replace("August","AGS",$tgl);
  $tgl = str_replace("September","SEP",$tgl);
  $tgl = str_replace("October","OKT",$tgl);
  $tgl = str_replace("November","NOV",$tgl);
  $tgl = str_replace("December","DES",$tgl);
  return $tgl;
}
function convert_bulan_angka($tgl)
{
  $tgl = str_replace("Jan","01",$tgl);
  $tgl = str_replace("Feb","02",$tgl);
  $tgl = str_replace("Mar","03",$tgl);
  $tgl = str_replace("Apr","04",$tgl);
  $tgl = str_replace("Mei","05",$tgl);
  $tgl = str_replace("Jun","06",$tgl);
  $tgl = str_replace("Jul","07",$tgl);
  $tgl = str_replace("Agu","08",$tgl);
  $tgl = str_replace("Sep","09",$tgl);
  $tgl = str_replace("Okt","10",$tgl);
  $tgl = str_replace("Nov","11",$tgl);
  $tgl = str_replace("Des","12",$tgl);
  return $tgl;
}
function converttgl($tgl)
{
  $tgl = str_replace("Sunday","Minggu",$tgl);
  $tgl = str_replace("Monday","Senin",$tgl);
  $tgl = str_replace("Tuesday","Selasa",$tgl);
  $tgl = str_replace("Wednesday","Rabu",$tgl);
  $tgl = str_replace("Thursday","Kamis",$tgl);
  $tgl = str_replace("Friday","Jum'at",$tgl);
  $tgl = str_replace("Saturday","Sabtu",$tgl);

  $tgl = str_replace("January","Januari",$tgl);
  $tgl = str_replace("February","Februari",$tgl);
  $tgl = str_replace("March","Maret",$tgl);
  $tgl = str_replace("April","April",$tgl);
  $tgl = str_replace("May","Mei",$tgl);
  $tgl = str_replace("June","Juni",$tgl);
  $tgl = str_replace("July","Juli",$tgl);
  $tgl = str_replace("August","Agustus",$tgl);
  $tgl = str_replace("September","September",$tgl);
  $tgl = str_replace("October","Oktober",$tgl);
  $tgl = str_replace("November","November",$tgl);
  $tgl = str_replace("December","Desember",$tgl);
  return $tgl;
}
function converthari($tgl)
{
  $tgl = str_replace("1","Senin",$tgl);
  $tgl = str_replace("2","Selasa",$tgl);
  $tgl = str_replace("3","Rabu",$tgl);
  $tgl = str_replace("4","Kamis",$tgl);
  $tgl = str_replace("5","Jum'at",$tgl);
  $tgl = str_replace("6","Sabtu",$tgl);
  $tgl = str_replace("7","Minggu",$tgl);
  return $tgl;
}

function backbulan($tgl)
{
  $tgl = str_replace("Januari","January",$tgl);
  $tgl = str_replace("Februari","February",$tgl);
  $tgl = str_replace("Maret","March",$tgl);
  $tgl = str_replace("April","April",$tgl);
  $tgl = str_replace("Mei","May",$tgl);
  $tgl = str_replace("Juni","June",$tgl);
  $tgl = str_replace("Juli","July",$tgl);
  $tgl = str_replace("Agustus","August",$tgl);
  $tgl = str_replace("September","September",$tgl);
  $tgl = str_replace("Oktober","October",$tgl);
  $tgl = str_replace("November","November",$tgl);
  $tgl = str_replace("Desember","December",$tgl);
  return $tgl;
}
function buatkode($nomor_terakhir, $kunci, $jumlah_karakter = 0)
{
    /* mencari nomor baru dengan memecah nomor terakhir dan menambahkan 1
    string nomor baru dibawah ini harus dengan format XXX000000
    untuk penggunaan dalam format lain anda harus menyesuaikan sendiri */
    $nomor_baru = intval(substr($nomor_terakhir, strlen($kunci))) + 1;
//    menambahkan nol didepan nomor baru sesuai panjang jumlah karakter
    $nomor_baru_plus_nol = str_pad($nomor_baru, $jumlah_karakter, "0", STR_PAD_LEFT);
//    menyusun kunci dan nomor baru
    $kode = $kunci . $nomor_baru_plus_nol;
    return $kode;
}

 ?>
