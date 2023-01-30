< !DOCTYPE HTML >  
< html >
< kepala >
< gaya >
.error { warna : #FF0000 ; }
< /style >
< /head >
< body >  

<?php
// tentukan variabel dan atur ke nilai kosong
$nameErr = $emailErr = $genderErr = $websiteErr = "" ;
$nama = $email = $jenis kelamin = $komentar = $situs web = "" ;

jika ( $_SERVER [ "REQUEST_METHOD"
  if ( kosong ( $_POST [ "nama" ])) {
    $nameErr = "Nama harus diisi" ;
  } else {
    $nama = test_input( $_POST [ "nama" ]);
    // periksa apakah name hanya berisi huruf dan spasi kosong
    if (!preg_match( "/^[a-zA-Z-' ]*$/" ,$name)) {
      $nameErr = "Hanya huruf dan spasi putih yang diperbolehkan" ;
    }
  }
  
  if ( kosong ( $_POST [ "email" ])) {
    $emailErr = "
  } else {
    $email = test_input( $_POST [ "email" ]);
    // periksa apakah alamat email sudah benar
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format email tidak valid" ;
    }
  }
    
  if ( kosong ( $_POST [ "situs web" ])) {
    $situs web = "" ;
  } else {
    $situs web = test_input( $_POST [ "situs web" ]);
    // periksa apakah sintaks alamat URL valid
    jika (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;] *[-a-z0-9+&@#\/%=~_|]/i" ,$situs web)) {
      $websiteErr = "URL Tidak Valid" ;
    }    
  }

  if ( kosong ( $_POST [ "komentar" ])) {
    $komentar = "" ;
  } else {
    $komentar = test_input( $_POST [ "komentar" ]);
  }

  if ( kosong ( $_POST [ "gender" ])) {
    $genderErr = "Gender wajib diisi" ;

    $jenis kelamin = test_input( $_POST [ "jenis kelamin" ]);
  }
}

fungsi test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  kembalikan $data;
}
?>

< h2 > Contoh Validasi Formulir PHP < /h2 >
< p > < span class ="error" > * field yang diperlukan < /span > < /p >
< form method ="post"=" <?php echo htmlspecialchars( $_SERVER [ "PHP_SELF" ]); ?> " >  
  Nama: < tipe masukan ="teks" nama ="nama" >
  < rentang kelas ="kesalahan" > * <?php echo $ namaErr; ?> < /span >
  < br > < br >
  Email: < input type ="text" name ="email" >
  ="kesalahan" > * <?php echo $emailErr; ?> < /span >
  < br > < br >
  Website: < input type ="text" name ="website" >
  < span class ="error" > <?php echo $websiteErr; ?> < /span >
  < br > < br >
  Komentar: < nama textarea ="komentar"="40" > < /textarea >
  < br > < br >
  Jenis Kelamin:
   < input type ="radio" name ="gender" value ="female" > Perempuan
   < input type ="radio" name ="gender" value = "laki-laki" > Laki
   -laki < jenis masukan ="radio" nama ="jenis kelamin" nilai ="lainnya" > Lainnya
   <rentang kelas = "kesalahan" > * <?php echo $genderErr; ?> < /span >
  < br > < br >
  < input type ="kirim" name ="kirim" value ="Kirim" >  
< /form >

<?php
echo "<h2>Masukan Anda:</h2>" ;
gema $nama;
gema "<br>" ;
gema $email;
gema "<br>" ;
gema $situs web;
gema "<br>" ;
gema $komentar;
gema "<br>" ;
gema$jenis kelamin;
?>

< /body >
< /html >