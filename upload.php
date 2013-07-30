<?php
  move_uploaded_file($_FILES["my_file"]["tmp_name"],"uploads/" . $_FILES["my_file"]["name"]);
  echo json_encode(array("success" => true, 'filename' => $_FILES["my_file"]["name"]));
?>