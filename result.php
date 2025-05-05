<?php
	$ans= "";
	$enterAge = $_POST['enterAge'];
	
    if (enterAge >= 17) {
        ans = "You can watch PG18 Moves"
    }
    else if (enterAge >= 13) {
        ans = "You are only allowed to watch PG13"; 
    }
    else if (enterAge <= 12) {
        ans = "You are only allowed to watch PG"; 
    }
    else {
        ans = "Enter a Valid Age"; 
    }
?>
<h3>Results:</h3>
Volume of a sphere is <?php echo "$ans" ?>.