<?php
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "MP4", "mov");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "video/MP4")
|| ($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "video/mov")
|| ($_FILES["file"]["type"] == "audio/wma")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/jpeg"))

&& ($_FILES["file"]["size"] < 2000000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
  // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  //  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("../media/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../media/" . $_FILES["file"]["name"]);
    //  echo "Stored in: " . "../media/" . $_FILES["file"]["name"];
      header("Location:../upload-done.php");
      }
    }
  }
else
  {
  echo "Return Code: " . $_FILES["file"]["name"] . "<br />";
  echo "Invalid file";
  print_r($_FILES);
  }
?>