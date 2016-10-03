<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
		if(mail("hardikgiri.goswami@gmail.com", $_POST["subject"], $_POST["body"], $headers))
                     echo "Mail successful!";
                else
                     echo "Mail unsuccessful";
	}
?>