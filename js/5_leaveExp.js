var uid = document.getElementById('uid').value;

//Get accumulated counts of qalifyResult
var qualifyResult = document.getElementById('qualifyTestResult').value;
document.getElementById('nextCodebtn').innerHTML = document.getElementById('uid').value.substring(7,10);

//check whether the worker fail to pass the quality control tasks
/* if(qualifyResult < 3){
  console.log("pass");
  document.getElementById('nextCodebtn').innerHTML = document.getElementById('uid').value.substring(7,10);
}
else{
  console.log("reject");
  document.getElementById('nextCodebtn').innerHTML = "We detected that you fail to pass the quality control questions 3 times or more than 3 times.";
} */
