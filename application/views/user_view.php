<!DOCTYPE html>
<html>
<head>
	<title>User View</title>
</head>
<body>
<!-- <h1><?php echo $welcome; ?></h1> -->

<?php 

foreach ($results as $object) {
	echo $object->username . "<br \>";
	echo $object->password . "<br \>";
}

// echo $results;
?>

</body>
</html>