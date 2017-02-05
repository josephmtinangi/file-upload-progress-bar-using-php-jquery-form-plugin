<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $file = $_FILES['file']['tmp_name'];

  $name = $_FILES['file']['name'];

  $path = 'uploads/';

  move_uploaded_file($file, $path.$name);

  echo 'success';
}