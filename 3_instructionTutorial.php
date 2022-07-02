<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
	<title>Task Instructions</title>
	<link rel="stylesheet" href="workflowpage.css">
</head>
<body style="font-family: Modern;padding: 100px" >

	<h1 class="title">Instructions of Task</h1>
	<form method="post" action="4_ratingIcon_1.php">
	<?php
      //Save 2_demo data
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

          //get uid and post the key value to next
          //$_POST['get by element's name'];
          $uid = $_POST['uid'];
          echo '<input id="uid" name="uid" value="' . $uid . '" hidden>';


          //get previous data
          $gender = $_POST['gender'];
          $age = $_POST['age'];

		  //$education = $_POST['education'];
          $occupation = $_POST['occupation'];
          //$mobileSystem = $_POST['mobileSystem'];

          //send to js
          echo '<label id="gender" hidden>' . $gender . '</label>';
          echo '<label id="age" hidden>' . $age . '</label>';
		  //echo '<label id="education" hidden>' . $education . '</label>';
          echo '<label id="occupation" hidden>' . $occupation . '</label>';
          //echo '<label id="mobileSystem" hidden>' . $mobileSystem . '</label>';
      	}

    ?>

		<script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
  		<script src="js/3_instru.js"></script>

		<div>
			<span class="subtitle">1. Rate Familiarity of Function.</span><br>
			<span style ="font-size:110%;">
			- You will first rate the familiarity of it on a scale from very unfamiliar to very familiar. <br>
      <br>
			<br>
			<span class="subtitle">2. Rate Semantic Distance of Icon.</span><br>
			- You will rate the semantic closeness of the icon to the function on a scale from not related to very strongly related.<br>
			- The figure below shows examples of icons which are semantically close or far to the function.<br>
			<img src="Seman.png" alt="image" align="center" width=60% border="0" style="display:block; margin:auto;padding-top:25px">
			<br>
			<br>
			<span class="subtitle">3. Rate Familiarity of Icon.</span><br>
			- You will rate the familiarity of the icon on a scale from very unfamiliar to very familiar. <br>
			- The figure below shows examples of alarm icons which have different levels of familiarity.<br>
			<img src="Fam.png" alt="image" align="center" width=90% border="0" style="display:block; margin:auto;padding-top:25px">
		</div>
		<br>
		<br>
			<p class="subtitle">We will <label class="highlight">reject</label> the workers:<br>
			<span style="font-weight: normal">
			- Give the same rating score for over 90% of all icons<br>
			- Answer with consistent patterns <br>
			- Fail to pass quality control questions for 3 times or more than 3 times<br>
			- Completion time of each rating is less than 1 minute<br>
			</span>
			<br>
			<br>
			<br>
	 <input class="bluebutton" type="submit" value="Click here to start the task">
	</form>

</body>

</html>
