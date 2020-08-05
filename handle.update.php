<?php
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $salary = $_POST['salary'];
  $link = $_POST['link'];
  
  if (empty($title) || empty($description) || empty($salary) || empty($link)) {
    die('請檢查資料');
  }
  require_once('./conn.php');

  $sql = "UPDATE jobs SET title = '$title', description = '$description', salary = '$salary', link = '$link' WHERE id = '$id'";

  $result = $conn->query($sql);
  
  if ($result) {
    header('Location: ./admin.php');
  } else {
    echo "Failed, " . $conn->error;
  }

?>