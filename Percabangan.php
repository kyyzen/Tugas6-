<?php
  $total_belanja= 150000;
  
  if($total_belanja > 100000){
    echo "Anda dapat hadiah!". "<br>";
  }
   echo "==========<br>";
 
  $umur = 20;
  if($umur < 18){
    echo "Kamu tidak boleh membuka situs ini". "<br>";
  }else {
    echo "Selamat datang di website kami ". "<br>";
  }
  echo "==========<br>";
  
  $nilai=85;
  if($nilai > 90){
    $grade = "A";
  }else if($nilai > 80){
    $grade = "B";
  }else if($nilai > 60){
    $grade = "C";
  }else if($nilai > 40){
    $grade = "D";
  }else if($nilai > 30){
    $grade = "E";
  }else{
    $grade = "F";
  }
  echo "Nilai Anda: $nilai<br>";
  echo "Grade: $grade<br>";
  echo "==========<br>";
 
  $level = 3;
  switch($level){
    case 1:
      echo "Pelajari HTML<br>";
      break;
    case 2:
      echo "Pelajari CSS<br>";
      break;
    case 3:
      echo "Pelajari PHP<br>";
      break;
      default:
        echo "Kamu bukan programmer!<br>";
  } echo "==========<br>";
  
  $menu = 2;
  switch($menu){
    case 1:
      echo "Bakso ayam";
      break;
    case 2:
      echo "Mie ayam";
      break;
    case 3: 
      echo "Soto ayam";
      break;
    default;
    echo "Pilihan tidak ada";
  }
?>