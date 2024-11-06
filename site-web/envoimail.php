Welcome <?php echo $_GET["prenom"]; ?><br>
Your email address is: <?php echo $_GET["MAIL"]; ?><br>
<?php

$name = $_GET['checkbox'];

// optional
// echo "You chose the following color(s): <br>";

foreach ($name as $checkbox){
	echo $checkbox."<br />";
}

?>
com: <?php echo $_GET["text"]; ?><br>
