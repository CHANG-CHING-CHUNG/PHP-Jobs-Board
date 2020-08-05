<?php
  $title = $_POST['title'];
  $description = $_POST['description'];
  $salary = $_POST['salary'];
  $link = $_POST['link'];
  
  if (empty($title) || empty($description) || empty($salary) || empty($link)) {
    die('請檢查資料');
  }
  require_once('./conn.php');

  $sql = "INSERT INTO jobs(title, description, salary, link) VALUES('$title', '$description', '$salary', '$link')";

  $result = $conn->query($sql);
  
  if ($result) {
    header('Location: ./admin.php');
  } else {
    echo "Failed, " . $conn->error;
  }

?>