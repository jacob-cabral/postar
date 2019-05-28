<?php
  try {
    header('Content-Type: application/json; charset=utf-8');

    if (!empty($_POST) && $_POST["action"] == 'send') {
      $fullname = $_POST["fullname"];

      if (empty($fullname)) throw(new Exception("The full name is null or empty."));

      echo json_encode($fullname);
    } else {
      header("HTTP/1.0 404 Not Found");
    }
  } catch(Exception $e) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 ' . $e->getMessage(), false, 400);
  }
?>
