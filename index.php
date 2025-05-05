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
    <form action="./result.php" method="post" target="results">
         <h3>Enter Age</h3>
          <div class="mdl-textfield mdl-js-textfield">
            <input type="number" step="any" id="enterAge" placeholder="enterAge">
          </div>
        <br><br>
        <input type="submit" value="Enter Age">
		</form>

			<iframe id="results" name="results">			
        <div id="answers">
          <div id="ans"></div>
        </div>
	    </iframe>
	</body>
	</body>
</html>
