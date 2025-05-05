<?php
	$ans= "";
	$enterAge = $_POST['enterAge'];
	
    if (enterAge >= 17) {
        ans = "You can watch PG18 Moves"
    }
    else {
        ans = "Enter a Valid Age"; 
    }
?>
<h3>Results:</h3> <?php echo "$ans" ?>.