<!DOCTYPE html>
<?
  $value = "World";
  
  $db = new PDO('mysql:host=mysql:3306;dbname=mysqldb;charset=utf8mb4', 'myuser', 'secret');

  $databaseTest = ($db->query('SELECT * FROM tblDockerSample'))->fetchAll(PDO::FETCH_OBJ);
?>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Testpage for nginx/php/mariaDB environment with Docker">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>xDebug Testpage</title>
  </head>
  <body>
    <h1>Hello, <?= $value ?>!</h1>
    <p>We will greet:</p>
    <ul>
    	<? foreach($databaseTest as $row): ?>
    		<li><?= $row->firstname ?></li>
    	<? endforeach; ?>
    </ul>
    <p>With this greetings we will see that nginx/php/mariaDB will working properly in a Docker environment 🤗</p>

    <!-- Test url parameters are sent to php too -->
    <h2>URL Parameters</h2>
    <p><? print_r ($_GET); ?></p>

    <h2>vardump</h2>
    <p>If additional Infos (like the corresponding php file with line number) are given, then xDebug will work:</p>
    <p><? print_r (var_dump($_GET, $value)); ?></p>

    <h2>xdebug_get_code_coverage</h2>
    <p>If an empty Array is given, then xDebug will work:</p>
    <p><?
      try {
        print_r (xdebug_get_code_coverage()); 
      }
      catch (Throwable $e){
        echo "xdebug_get_code_coverage() isn't available!<br/>";
        echo $e->getMessage();
      }
    ?></p>

    <h2>PHP Info</h2>
    <p>Is a xDebug Section is given in phpInfo, then xDebug will work:</p>
    <p>xDebug Module: <? echo (extension_loaded('xdebug') ? '' : 'non '), 'exists';?></p>
    <p>Copy the whole output page, paste it in this <a href="https://xdebug.org/wizard.php" target="_blank">link</a>. Then analyze. It will show if Xdebug is installed or not. And it will give instructions to complete the installation.</p>
    <p><? echo phpinfo(); ?></p>
  </body>
</html>
