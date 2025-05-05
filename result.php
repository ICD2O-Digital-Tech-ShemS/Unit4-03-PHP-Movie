<?php
	$Age = $_POST['Age'];
        if ($Age >= 17) {
            $Final = "You can watch PG18 Moves";
        }
        else if (WatchMove >= 13) {
           $Final = "You are only allowed to watch PG13"; 
    }
    else if (WatchMove <= 12) {
       $Final = "You are only allowed to watch PG"; 
    }
    else {
        $Final = "Enter a Valid Age"; 
    }
?>
<h3>Results:</h3>
    <?php echo "$Final" ?>°F.