<!DOCTYPE html> 
<html>
	<head>
		<title>Icon Rating</title>
		<link rel="stylesheet" href="workflowpage.css">
	</head>
	<body style="font-family: Modern;padding: 100px">
		<form method="post" action="5_leaveExp.php">
			<h1 class="title">1/10</h1>
			
            <!-- info to save -->
            <input hidden id="functionID" name="functionID" value="2">
			<input hidden id="batchID" name="batchID" value="0">
            <input hidden id="icon1_FName" name="icon1_FName" value="">
            <input hidden id="icon2_FName" name="icon2_FName" value="">
            <input hidden id="icon3_FName" name="icon3_FName" value="">
            <input hidden id="icon4_FName" name="icon4_FName" value="">
            <input hidden id="icon5_FName" name="icon5_FName" value="">

			
            <h1 class="title" id="functionName"></h1>
			<h2 class="function" id="functionMeaning"></h2>
			<br>
			<!-- ******************** Icon 1 ******************** -->
			<div>
				<img id="icon1" src="" alt="image" align="left" height="96" width="96">
				<ul class="likert" id="semantic">
					<li class="question">&ensp;I can easily relate this icon with the function</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_1" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="fam">
					<li class="question">&ensp;I am very familiar with this icon&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
					<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="familiar_1" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_1" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_1" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_1" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_1" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="aesth">
					<li class="question">&ensp;I think this icon is visually aesthetic&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="aesth_1" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_1" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_1" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_1" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_1" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
			</div>
			<br>
			<br>
			<br>
			<hr />
			<br>
			<!-- ******************** Icon 2 ******************** -->
			<div>
				<img id="icon2" src="" alt="image" align="left" height="96" width="96">
				<ul class="likert" id="semantic">
					<li class="question">&ensp;I can easily relate this icon with the function</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_2" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="fam">
					<li class="question">&ensp;I am very familiar with this icon&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
					<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="familiar_2" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_2" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_2" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_2" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_2" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="aesth">
					<li class="question">&ensp;I think this icon is visually aesthetic&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="aesth_2" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_2" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_2" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_2" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_2" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
			</div>
			<br>
			<br>
			<br>
			<hr />
			<br>
			<!-- ******************** Icon 3 ******************** -->
			<div>
				<img id="icon3" src="" alt="image" align="left" height="96" width="96">
				<ul class="likert" id="semantic">
					<li class="question">&ensp;I can easily relate this icon with the function</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_3" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="fam">
					<li class="question">&ensp;I am very familiar with this icon&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
					<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="familiar_3" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_3" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_3" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_3" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_3" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="aesth">
					<li class="question">&ensp;I think this icon is visually aestheti&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="aesth_3" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_3" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_3" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_3" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_3" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
			</div>
			<br>
			<br>
			<br>
			<hr />
			<br>
			<!-- ******************** Icon 4 ******************** -->
			<div>
				<img id="icon4" src="" alt="image" align="left" height="96" width="96">
				<ul class="likert" id="semantic">
					<li class="question">&ensp;I can easily relate this icon with the function</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_4" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="fam">
					<li class="question">&ensp;I am very familiar with this icon&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
					<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="familiar_4" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_4" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_4" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_4" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_4" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="aesth">
					<li class="question">&ensp;I think this icon is visually aesthetic&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="aesth_4" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_4" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_4" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_4" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_4" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
			</div>
			<br>
			<br>
			<br>
			<hr />
			<br>
			<!-- ******************** Icon 5 ******************** -->
			<div>
				<img id="icon5" src="" alt="image" align="left" height="96" width="96">
				<ul class="likert" id="semantic">
					<li class="question">&ensp;I can easily relate this icon with the function</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="semanticDis_5" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="fam">
					<li class="question">&ensp;I am very familiar with this icon&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
					<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="familiar_5" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_5" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_5" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_5" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="familiar_5" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
        		<br>
        		<ul class="likert" id="aesth">
					<li class="question">&ensp;I think this icon is visually aesthetic&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</li>
            		<li class="likert">
            			<input id="radGuiltyStart" type="radio" name="aesth_5" value="5" required>
            			<label>Strongly agree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_5" value="4">
            			<label>Agree</label>
            		</li>
           			<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_5" value="3">
            			<label>Neutral</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_5" value="2">
            			<label>Disagree</label>
            		</li>
            		<li class="likert">&ensp;&ensp;
            			<input id="radGuiltyStart" type="radio" name="aesth_5" value="1">
            			<label>Strongly Disagree</label>
            		</li>
        		</ul>
			</div>
			<br>
			<br>
			<br>
			<br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $uid = $_POST['uid'];
                echo '<input id="uid" name="uid" value="' . $uid . '" hidden>';
            }

            ?>
		<input class="bluebutton" type="submit" value="Submit" />
		</form>
		<script src="js/ChangeFunctionIcon.js"></script>
	</body>
</html>