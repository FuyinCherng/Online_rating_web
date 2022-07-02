<?php
//Save rating from ratingIcon page
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//get uid and post the key value to next
    //$_POST['get by element's name'];
    $uid = $_POST['uid'];
    echo '<input id="uid" name="uid" value="' . $uid . '" hidden>';

    //get function ID
    $functionID = $_POST['functionID'];
    echo '<input hidden id="functionID" name="functionID" value="' . $functionID . '">';
    echo '<label id="functionID_db" hidden>' . $functionID . '</label>';

    //get batchID
    $batchID = $_POST['batchID'];
    echo '<input hidden id="batchID" name="batchID" value="'. $batchID .'">';
    
    //get function Familiarity
    $func_fam = $_POST['familiarFunc'];
    echo '<label id="func_fam" hidden>' . $func_fam . '</label>';

    //get accumulated counts for quality control result
    $qualifyTestResult = $_POST['qualifyTestResult'];
    echo '<input id="qualifyTestResult" name="qualifyTestResult" value="' . $qualifyTestResult . '" hidden>';


    //get qualifyIconID for compute whether pass the qualification Test
    $qualifyIconID = $_POST['qualifyIconID'];
    echo '<label id="qualifyIconID" hidden>' . $qualifyIconID . '</label>';
    //get previous data
    //icon file name
    $icon1_FName = $_POST['icon1_FName'];
    $icon2_FName = $_POST['icon2_FName'];
    $icon3_FName = $_POST['icon3_FName'];
    $icon4_FName = $_POST['icon4_FName'];
    $icon5_FName = $_POST['icon5_FName'];

    //semantic rating
    $icon1_semantic = $_POST['semanticDis_1'];
    $icon2_semantic = $_POST['semanticDis_2'];
    $icon3_semantic = $_POST['semanticDis_3'];
    $icon4_semantic = $_POST['semanticDis_4'];
    $icon5_semantic = $_POST['semanticDis_5'];

    //familiarity rating
    $icon1_fam = $_POST['familiar_1'];
    $icon2_fam = $_POST['familiar_2'];
    $icon3_fam = $_POST['familiar_3'];
    $icon4_fam = $_POST['familiar_4'];
    $icon5_fam = $_POST['familiar_5'];

    //icon1
    echo '<label id="icon1_FName" hidden>' . $icon1_FName . '</label>';
    echo '<label id="icon1_semantic" hidden>' . $icon1_semantic . '</label>';
    echo '<label id="icon1_fam" hidden>' . $icon1_fam . '</label>';

    //icon2
    echo '<label id="icon2_FName" hidden>' . $icon2_FName . '</label>';
    echo '<label id="icon2_semantic" hidden>' . $icon2_semantic . '</label>';
    echo '<label id="icon2_fam" hidden>' . $icon2_fam . '</label>';

    //icon3
    echo '<label id="icon3_FName" hidden>' . $icon3_FName . '</label>';
    echo '<label id="icon3_semantic" hidden>' . $icon3_semantic . '</label>';
    echo '<label id="icon3_fam" hidden>' . $icon3_fam . '</label>';

    //icon4
    echo '<label id="icon4_FName" hidden>' . $icon4_FName . '</label>';
    echo '<label id="icon4_semantic" hidden>' . $icon4_semantic . '</label>';
    echo '<label id="icon4_fam" hidden>' . $icon4_fam . '</label>';

    //icon5
    echo '<label id="icon5_FName" hidden>' . $icon5_FName . '</label>';
    echo '<label id="icon5_semantic" hidden>' . $icon5_semantic . '</label>';
    echo '<label id="icon5_fam" hidden>' . $icon5_fam . '</label>';

}

?>
