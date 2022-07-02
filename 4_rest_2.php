<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Rest Page</title>
	<link rel="stylesheet" href="workflowpage.css">
</head>

	<body style="font-family: Modern;padding: 100px">
    <!-- <form method="post" action=""> -->
    <form id="nextCodebtn" method="post" action="4_ratingIcon_3.php" hidden>
        <?php include 'saveRating.php';?>
				<div class="subtitle">
					<label class="highlight">Counts of failing to pass the quality control question:&ensp;</label>
					<label class="highlight" id="Counts">0</label>
				</div>
				<br>
				<label class="subtitle">Please note that you will be <label class="highlight">rejected</label> if you fail to pass the quality control question <label class="highlight">3 times</label></label>
				<br>
				<br>
				<br>
				<label class="subtitle">Click the button below when you're ready for the next rating!</label>
	      <br>
	      <br>
	      <br>
        <input class="bluebutton" type="submit" value="Click Here to Next Rating">
        <script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
        <script src="js/saveRating2Database_2.js"></script>
    </form>
    <br>
	</body>
</html>
