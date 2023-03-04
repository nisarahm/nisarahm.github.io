<?php 
$name = 'Nisar';
$display = '';

if ($name === 'Nisar')  {
	$display = 'First Name';
}
else {
	$display = 'Wrong Name';
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>PHP Example # 1 </title>
 </head>
 <body>

 	<p>Hello !!! </p>
 	<p>My name is : <?=	$display ?></p>
 
 </body>
 </html>
