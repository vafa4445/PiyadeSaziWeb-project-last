<?php
$link = mysqli_connect('localhost','root','','words');
if (mysqli_connect_errno())
    exit("خطایی با شرح زیر رخ داده است: " . mysqli_connect_error());

$query = "SELECT * FROM wordss WHERE word = '$worddd'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);
if ($row)
{
    echo("لغت : " . $row['word']);
    echo("معنی : " . $row['mean']);
    echo("لغت : " . $row['type']);
}
else
    exit("لغت پیدا نشد");
?>