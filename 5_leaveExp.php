<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Before Leaving this Website...</title>
	<link rel="stylesheet" href="workflowpage.css">
</head>
	<body style="font-family: Modern;padding: 100px">
  	<!-- <form method="post" action=""> -->
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $uid = $_POST['uid'];
          echo '<input id="uid" name="uid" value="' . $uid . '" hidden>';
          
          //get accumulated counts for quality control result
          $qualifyTestResult = $_POST['qualifyTestResult'];
          echo '<input id="qualifyTestResult" name="qualifyTestResult" value="' . $qualifyTestResult . '" hidden>';
        }

    ?>
	<h1 class="title">Thank you for the efforts of finishing this task!</h1>
	<label class="subtitle">To confirm that you finished the task, please <span class="highlight">copy the survey code below to the entry page from Amazon Mechanical Turk</span> and <span class="highlight">click submit button</span> on that page.</label>
    <br>
    <br>
    <br>
		<label class="highlight" id="Counts" hidden>0</label>
    <label class="subtitle">Code: </label>
    <label id="nextCodebtn" name="code" class="subtitle" id="code"> </label>
    <script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
    <!-- <script src="js/saveRating2Database.js"></script> -->
    <script src="js/5_leaveExp.js"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
	</body>
</html>
