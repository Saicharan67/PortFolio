<?php
  if(isset($_POST['submit'])) {
	$Name = $_POST['name'];
	
	
	$email = $_POST['email'];
	
	$subject = $_POST['subject'];
	$message = $_POST["message"];

	if (empty($Name)) || (empty($email)) || (empty($subject)) || (empty($message)){


		echo "Fill All";
	}
	else{

		mail("mahankalisaicharan@gmail.com" , $subject , $message "From: $name <$email> ");
		echo "<script type='text/javascript' charset='utf-8' >
		alert('message sent');
		window.history.log(-1);
		</script>";
	}
}
?>