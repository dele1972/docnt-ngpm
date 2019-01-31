<!DOCTYPE html>
<?php
   $value = "World";

   $db = new PDO('mysql:host=mysql:3306;dbname=mysqldb;charset=utf8mb4', 'myuser', 'secret');

   $databaseTest = ($db->query('SELECT * FROM tblDockerSample'))->fetchAll(PDO::FETCH_OBJ);
?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hello Docker</title>
    <meta name="description" content="Testpage for nginx/php/mariaDB environment with Docker">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <h1>Hello, <?= $value ?>!</h1>
    <p>We will greet:</p>
    <ul>
    	<?php foreach($databaseTest as $row): ?>
    		<li><?= $row->firstname ?></li>
    	<?php endforeach; ?>
    </ul>
    <p>With this greetings we will see that nginx/php/mariaDB will working properly in a Docker environment 🤗</p>
    <!-- Test url parameters are sent to php too -->
    <h2>URL Parameters</h2>
    <p><? print_r ($_GET); ?></p>
  </body>
</html>
