<?php
require_once 'App/inti.php'; 


// sql to create table
$td = "CREATE TABLE category(
	cate_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  cate_name VARCHAR(150)  ,
	cate_link VARCHAR(150)  ,
	
)";
if (mysqli_query($this->conn, $td)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
/*
$sel="SELECT* FROM registrars ORDER BY user_id ASC";
if (mysqli_query($conn,$sel)) {
    echo "Table created successfully"."<br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn)."<br/>";}


 $insert = "INSERT INTO users
  (firstname,
  email
  )
  VALUES
  ( 'Ahmad',
  'ahmaddd@gmail.com')";

 

if (mysqli_query($conn, $insert)) {
    echo "Table formuser successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
 

/*$title=$_POST['title'];
                $slide=$_POST['slide'];
                $slide_value=$_POST['slide_value'];
                $chaptera=$_POST['chaptera'];
                $chaptera_value=$_POST['chaptera_value'];
                $chapterb=$_POST['chapterb'];
                $chapterb_value=$_POST['chapterb_value'];
                $taba=$_POST['taba'];
                $taba_value=$_POST['taba_value'];
                $tabb=$_POST['tabb'];
                $tabb_value=$_POST['tabb_value'];
                $tabc=$_POST['tabc'];
                $tabc_value=$_POST['tabc_value'];
                $facebook=$_POST['facebook'];
                $google=$_POST['google'];      
                $twitter=$_POST['twitter'];
                $instagram=$_POST['instagram'];

           $insert="INSERT INTO setting (
                      title,
                      logo,
                      slide,
                      slide_value,
                      chaptera,
                      chaptera_value,
                      chapterb,
                      chapterb_value,
                      taba,
                      taba_value,
                      tabb,
                      tabb_value,
                      tabc,
                      tabc_value,
                      facebook,
                      google,
                      twitter,
                      instagram)
                      VALUES(
                      'title',
                      'image_db',
                      'slide',
                      'slide_value',
                      'chaptera',
                      'chaptera_value',
                      '$chapterb',
                      '$chapterb_value',
                      '$taba',
                      '$taba_value',
                      '$tabb',
                      '$tabb_value',
                      '$tabc',
                      '$tabc_value',
                      '$facebook',
                      '$google',
                      '$twitter',
                      '$instagram'
                    )";   
                    if(isset($insert)){
                        echo '<div class="alert alert-success" role="alert"> <i class="fa fa-check" aria-hidden="true"></i> Settings successfully updated.</div>';
                         // echo '<meta http-equiv="refresh" content="1 ; posts.php" />';
                     } 

                    $copy="BACKUP DATABASE '$dbn' TO DISK ='D:\mydatabase\'";

                     if (mysqli_query($conn,$copy)) {
    echo "successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}*/

?>