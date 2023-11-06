<?php
include('dbconfig.php');

$useremail = $_SESSION['user_email'] ;

//=======upload picture


if(isset($_FILES['file'])){

$file= $_FILES['file'];

$upload_directory='../uploads/';

//$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
$ext_str = "jpg,jpeg";

$allowed_extensions=explode(',',$ext_str);

$max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */

$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character

if (!in_array($ext, $allowed_extensions) ) {

echo "only".$ext_str." files allowed to upload"; // exit the script by warning

} /* check file size of the file if it exceeds the specified size warn user */

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

$picname = substr($user_email, 0, 5);
//$path= $applicationno .'.'.$ext;
$path= $picname . rand(1000,100000) .'.pdf';
$docnamekeep= $useremail .'.'.$ext;

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
//include "dbconfig.php";
//========insert into db
$sql= "UPDATE training SET pic_dir='".$path."' WHERE user_email='".$useremail."'";
//$result = mysqli_query($conn, $sql );
$result=mysqli_query($conn,$sql);
//================

if (!mysqli_query($conn,$sql))
{
die('error:' . mysqli_error($conn));
}

//=======================
  echo "<script>
alert('Upload successful.');
window.location.href='profile';
</script>";

 }

else{

echo "<script>
alert('Error while uploading logo.');
window.location.href='profile';
</script>";
}

}
?>