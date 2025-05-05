<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Watch a move</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>Watch a move</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="result">
          <label for="enterAge">Enter Age</label>
        <input type="text" id="enterAge" placeholder="EnterAge" name="enterAge">
        <br><br>
        <input type="submit" value="Enter Age">
		</form>

			<iframe id="result" name="result">
          <div id="ans"></div>
	    </iframe>
	</body>
	</body>
</html>
