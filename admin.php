<?php
  require_once('./conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Job board 職缺報報</title>
</head>
<body>
  <div class="container">
    <h1>Job board 職缺報報管理後台</h1>
    <a href="./add.php">新增職缺</a>
    <div class="jobs">
    <?php
        $sql = 'SELECT * from jobs ORDER BY create_at DESC';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='job'>";
            echo  "<h2 class='job__title'>" . $row['title'] ."</h2>";
            echo  "<p class='job__desc'>" . $row['description'] . "</p>";
            echo  "<p class='job__salary'>薪水範圍: " . $row['salary'] . "</p>";
            echo  "<a class='job__link' href='./update.php?id=". $row['id'] ."'>編輯職缺 </a>";
            echo  "<a class='job__link' href='./delete.php?id=". $row['id'] ."'>刪除職缺</a>";
            echo "</div>";
          }
        }
      ?>
    </div>
  </div>
</body>
</html>