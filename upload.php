<?php
  //print_r($_POST);
  //print_r($_GET);
  //print_r($_FILES);
  #$allowedExts  = array("gif", "jpeg", "jpg", "png");
  #$temp         = explode(".", $_FILES["my_file"]["name"]);
  #$extension = end($temp);
  #if ((($_FILES["my_file"]["type"] == "image/gif")
  #|| ($_FILES["my_file"]["type"] == "image/jpeg")
  #|| ($_FILES["my_file"]["type"] == "image/jpg")
  #|| ($_FILES["my_file"]["type"] == "image/pjpeg")
  #|| ($_FILES["my_file"]["type"] == "image/x-png")
  #|| ($_FILES["my_file"]["type"] == "image/png"))
  #&& ($_FILES["my_file"]["size"] < 20000)
  #&& in_array($extension, $allowedExts))
  #  {
    #if ($_FILES["my_file"]["error"] > 0)
    #{
    #  echo "Return Code: " . $_FILES["my_file"]["error"] . "<br>";
    #} else {
      // echo "Upload: " .     $_FILES["my_file"]["name"] . "<br>";
      // echo "Type: " .       $_FILES["my_file"]["type"] . "<br>";
      // echo "Size: " .       ($_FILES["my_file"]["size"] / 1024) . " kB<br>";
      // echo "Temp file: " .  $_FILES["my_file"]["tmp_name"] . "<br>";

      //if (file_exists("uploads/" . $_FILES["my_file"]["name"]))
      //{
      //  echo $_FILES["my_file"]["name"] . " already exists. ";
      //} else{
        move_uploaded_file($_FILES["my_file"]["tmp_name"],
        "uploads/" . $_FILES["my_file"]["name"]);
        //echo "Stored in: " . "upload/" . $_FILES["my_file"]["name"];
        echo json_encode(array("success" => "ciao"));
      //}
    #}
    #}
  #else
  #  {
  #  echo "Invalid file";
  #  }
?>