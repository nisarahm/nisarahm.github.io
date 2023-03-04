<?php 
$name = 'Nisar';
$name_type = '';

if ($name === 'Nisar')  {
	$name_type = 'First Name';
}
elseif ($name === 'Ahmed') {
	$name_type = 'Last Name';
}
else {
	$name_type =  'Wrong Name';
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="css/styles.css">

 	<title>PHP Example # 1 </title>
 </head>
 <body>

 	<p>Hello !!! </p>
 	<p>My name is <span class="name"><?= $name ?></span>,  which is my <?= $name_type ?></p>
 	<?php
 	$price = 1.99;
      for ($i = 1; $i <= 10; $i++) {
          echo $i;
          echo ' packs cost $';
          echo $price * $i;
          echo '<br>';
      }
      ?>
 
 </body>
 </html>
