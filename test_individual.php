<?php

require_once 'vendor/autoload.php';

use rajeshtomjoe\googlecontacts\factories\ContactFactory;

if (isset($_GET['selfURL'])) {
    $contact = ContactFactory::getBySelfURL($_GET['selfURL']);

	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phoneNumber']))
	{
		$contact->name = $_POST['name'];
		$contact->phoneNumber = $_POST['phoneNumber'];
		$contact->email = $_POST['email'];

		$contact = ContactFactory::submitUpdates($contact);
		header('Location: test.php');
		exit();
	}else {
		echo 'All fields required';
	}
}else {
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phoneNumber']))
	{
		ContactFactory::create($_POST['name'],$_POST['phoneNumber'],$_POST['email']);
		header('Location: test.php');
		exit();
	}else {
		echo 'All fields required';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>PHP library for the Google Contacts API (v3)</title>

  </head>
  <body>
    <form method="POST">
    	<label>Name:</label><br>
    	<input type="text" name="name" value="<?php echo !empty($contact->name)?$contact->name:'';?>"><br><br>
    	<label>Phone Number:</label><br>
    	<input type="text" name="phoneNumber" value="<?php echo !empty($contact->phoneNumber)?$contact->phoneNumber:'';?>"><br><br>
    	<label>Email:</label><br>
    	<input type="email" name="email" value="<?php echo !empty($contact->email)?$contact->email:'';?>"><br><br>
      <button>Save</button>
    </form>
  </body>
</html>