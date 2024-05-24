<?php
$link = mysqli_connect("localhost", "root" , "" , "words");

?>
<?php 
include("includes/header.php");

if(isset($_POST['word']) && !empty($_POST['word']) &&
    isset($_POST['mean']) && !empty($_POST['mean']) &&
    isset($_POST['type']) && !empty($_POST['type']) 
)
{
    $word = $_POST['word'];
    $mean = $_POST['mean'];
    $type = $_POST['type'];
   
    
}else 
    exit("برخی از فیلد ها مقداردهی نشده است");


?>


<?php
$qr = "INSERT INTO `wordss`(`word`, `means`, `type`) VALUES ('$word','$mean','$type')";
if(mysqli_query($link,$qr)=== true)
    echo "لغت ثبت شد";
else 
    echo "لغت ثبت نشد";
?>
