<?php

require_once 'vendor/autoload.php';

use rajeshtomjoe\googlecontacts\factories\ContactFactory;

$contacts = ContactFactory::getAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>PHP library for the Google Contacts API (v3)</title>
    <style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
  </head>
  <body>
    <?php if (count($contacts)):?>
	    <p>Test retrieved <?php echo count($contacts);?> contacts</p>

	    <a href="test_individual.php">Create</a>
	    <br><br>
	    <table>
	    	<tbody>
	    		<?php foreach($contacts as $contact):?>
	    			<tr>
	    				<td><?php 
			    				if(!empty($contact->name)){
			    					echo $contact->name;
			    				}else if(!empty($contact->email['other'])){
			    					echo $contact->email['other'];
			    				}else {
			    					echo '(No Name)';
			    				}
	    					?>
	    						
	    				</td>
	    				<td>
	    					<a href="test_individual.php?selfURL=<?php echo $contact->selfURL;?>">Edit</a>
	    				</td>
	    			</tr>
	    		<?php endforeach;?>
	    	</tbody>
	    </table>
	<?php else: ?>
	    <p>No contacts retrieved!</p>
	<?php endif;?>
  </body>
</html>



