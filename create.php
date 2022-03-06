<?php 
	
	
	require_once 'config.php';

	if(isset($_POST['post_it'])) {
		$user_name = $_POST['user_name'];
		$user_comment = $_POST['user_comment'];

		mysqli_query($connect, "INSERT INTO `comments` (`id`, `user_name`, `user_comment`) VALUES (NULL, '$user_name', '$user_comment');");

		header('Location: index.php');
	}


?>