<?php
	$Age = $_POST['Age'];
        if ($Age >= 17) {
            $Final = "You can watch PG18 Moves";
        }
        else if ($Age >= 13) {
            echo  "You are only allowed to watch PG13"; 
    }
    else if ($Age <= 12) {
        echo "You are only allowed to watch PG"; 
    }
    else {
        echo "Enter a Valid Age"; 
    }
?>
<h3>Results:</h3>
    <?php echo "$Final" ?>.