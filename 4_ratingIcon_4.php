<!DOCTYPE html>
<html>
	<head>
		<title>Icon Rating</title>
		<link rel="stylesheet" href="workflowpage.css">
	</head>
	<body style="font-family: Modern;padding: 100px">
		<form method="post" action="4_rest_4.php">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$uid = $_POST['uid'];
					echo '<input id="uid" name="uid" value="' . $uid . '" hidden>';

					$qualifyTestResult = $_POST['qualifyTestResult'];
					echo '<input id="qualifyTestResult" name="qualifyTestResult" value="' . $qualifyTestResult . '" hidden>';
					
					//get function ID from rest page and increase by 1
    				$functionID = $_POST['functionID'] + 1;
    				echo '<input hidden id="functionID" name="functionID" value="' . $functionID . '">';

    				//get batchID
    				$batchID = $_POST['batchID'];
    				echo '<input hidden id="batchID" name="batchID" value="'. $batchID .'">';
			}
			?>
			<h2 class="title">4/5</h2>

      <!-- info to save -->
      <input hidden id="icon1_FName" name="icon1_FName" value="">
      <input hidden id="icon2_FName" name="icon2_FName" value="">
      <input hidden id="icon3_FName" name="icon3_FName" value="">
      <input hidden id="icon4_FName" name="icon4_FName" value="">
      <input hidden id="icon5_FName" name="icon5_FName" value="">
			<input hidden id="qualifyIconID" name="qualifyIconID" value="">


			<!--  Function  -->
      <h1 class="title" id="functionName"></h1>
			<h2 class="function" id="functionMeaning"></h2>
			<br>
			<!-- Rate Function Familiarity -->
			<div id="funcFam">
					<label class="question">How familiar is this function to you?</label><br>
					<ul class="likert">
						<li class="likert">
								<input id="radGuiltyStart" type="radio" name="familiarFunc" value="1" required>
								<label>Very unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiarFunc" value="2">
								<label>Unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiarFunc" value="3">
								<label>Neutral</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiarFunc" value="4">
								<label>Familiar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiarFunc" value="5">
								<label>Very familiar</label>
							</li>
					</ul>
			</div>
			<br>
			<br>
			<br>
			<br>
			<!-- Rate icon 1 -->
			<div id="icon1">
				<img id="img1" src="" alt="image1" align="left" height="110" width="110">
				<div id="semantic">
					<label class="question">How semantically related is this icon to the function?</label><br>
					<ul class="likert" id="semantic">
						<li class="likert">
							<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="1" required>
							<label>Not related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="2">
							<label>Not closely related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="3">
							<label>Neutral</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="4">
							<label>Related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="5">
							<label>Very strongly related</label>
						</li>
					</ul>
				</div>
				<br>
				<br>
				<div id="fam">
					<label class="question">How familiar is this icon to you?</label><br>
					<ul class="likert" id="fam">
						<li class="likert">
								<input id="radGuiltyStart" type="radio" name="familiar_1" value="1" required>
								<label>Very unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_1" value="2">
								<label>Unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_1" value="3">
								<label>Neutral</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_1" value="4">
								<label>Familiar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_1" value="5">
								<label>Very familiar</label>
							</li>
					</ul>
				</div>
			</div>
			<br>
			<br>
			<hr />
			<!-- Rate icon 2 -->
			<div id="icon2">
				<img id="img2" src="" alt="image2" align="left" height="110" width="110">
				<div id="semantic">
					<label class="question">How semantically related is this icon to the function?</label><br>
					<ul class="likert" id="semantic">
						<li class="likert">
							<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="1" required>
							<label>Not related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="2">
							<label>Not closely related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="3">
							<label>Neutral</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="4">
							<label>Related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="5">
							<label>Very strongly related</label>
						</li>
					</ul>
				</div>
				<br>
				<br>
				<div id="fam">
					<label class="question">How familiar is this icon to you?</label><br>
					<ul class="likert" id="fam">
						<li class="likert">
								<input id="radGuiltyStart" type="radio" name="familiar_2" value="1" required>
								<label>Very unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_2" value="2">
								<label>Unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_2" value="3">
								<label>Neutral</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_2" value="4">
								<label>Familiar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_2" value="5">
								<label>Very familiar</label>
							</li>
					</ul>
				</div>
			</div>
			<br>
			<br>
			<hr />
			<!-- Rate icon 3 -->
			<div id="icon3">
				<img id="img3" src="" alt="image3" align="left" height="110" width="110">
				<div id="semantic">
					<label class="question">How semantically related is this icon to the function?</label><br>
					<ul class="likert" id="semantic">
						<li class="likert">
							<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="1" required>
							<label>Not related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="2">
							<label>Not closely related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="3">
							<label>Neutral</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="4">
							<label>Related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="5">
							<label>Very strongly related</label>
						</li>
					</ul>
				</div>
				<br>
				<br>
				<div id="fam">
					<label class="question">How familiar is this icon to you?</label><br>
					<ul class="likert" id="fam">
						<li class="likert">
								<input id="radGuiltyStart" type="radio" name="familiar_3" value="1" required>
								<label>Very unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_3" value="2">
								<label>Unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_3" value="3">
								<label>Neutral</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_3" value="4">
								<label>Familiar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_3" value="5">
								<label>Very familiar</label>
							</li>
					</ul>
				</div>
			</div>
			<br>
			<br>
			<hr />
			<!-- Rate icon 4 -->
			<div id="icon4">
				<img id="img4" src="" alt="image4" align="left" height="110" width="110">
				<div id="semantic">
					<label class="question">How semantically related is this icon to the function?</label><br>
					<ul class="likert" id="semantic">
						<li class="likert">
							<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="1" required>
							<label>Not related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="2">
							<label>Not closely related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="3">
							<label>Neutral</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="4">
							<label>Related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="5">
							<label>Very strongly related</label>
						</li>
					</ul>
				</div>
				<br>
				<br>
				<div id="fam">
					<label class="question">How familiar is this icon to you?</label><br>
					<ul class="likert" id="fam">
						<li class="likert">
								<input id="radGuiltyStart" type="radio" name="familiar_4" value="1" required>
								<label>Very unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_4" value="2">
								<label>Unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_4" value="3">
								<label>Neutral</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_4" value="4">
								<label>Familiar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_4" value="5">
								<label>Very familiar</label>
							</li>
					</ul>
				</div>
			</div>
			<br>
			<br>
			<hr />
			<!-- Rate icon 5-->
			<div id="icon5">
				<img id="img5" src="" alt="image5" align="left" height="110" width="110">
				<div id="semantic">
					<label class="question">How semantically related is this icon to the function?</label><br>
					<ul class="likert" id="semantic">
						<li class="likert">
							<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="1" required>
							<label>Not related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="2">
							<label>Not closely related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="3">
							<label>Neutral</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="4">
							<label>Related</label>
						</li>
						<li class="likert">&ensp;
							<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="5">
							<label>Very strongly related</label>
						</li>
					</ul>
				</div>
				<br>
				<br>
				<div id="fam">
					<label class="question">How familiar is this icon to you?</label><br>
					<ul class="likert" id="fam">
						<li class="likert">
								<input id="radGuiltyStart" type="radio" name="familiar_5" value="1" required>
								<label>Very unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_5" value="2">
								<label>Unfamiliar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_5" value="3">
								<label>Neutral</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_5" value="4">
								<label>Familiar</label>
							</li>
							<li class="likert">&ensp;
								<input id="radGuiltyStart" type="radio" name="familiar_5" value="5">
								<label>Very familiar</label>
							</li>
					</ul>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
		<input class="bluebutton" type="submit" value="Submit" />
		</form>
		<script src="js/ChangeFunctionIcon_2.js"></script>
	</body>
</html>
