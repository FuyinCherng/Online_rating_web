//Make this js can be reuse for each icon rating page

// meta data
var FName = [ "add", "attachment", "bookmark",
              "call", "check", "crop", "document",
              "download", "edit", "favorite", "folder",
              "grid", "help", "image", "info","link","list",
              "login", "logout", "mail", "map", "message",
              "notification", "password", "pause", "payment",
              "pin", "refresh", "save", "scan", "send",
              "setting", "share", "stop", "tag", "time",
              "update", "upload", "warning", "wifi"
            ];

// Initialize Firebase
var firebaseConfig = {
  apiKey: "AIzaSyCRY3WliLoqO6JYSHwivDrzAyI5OHvr_fU",
  authDomain: "exp1-watchvideo.firebaseapp.com",
  databaseURL: "https://exp-iconrating-3.firebaseio.com/",
  projectId: "exp1-watchvideo",
  storageBucket: "exp1-watchvideo.appspot.com",
  messagingSenderId: "13982835731",
  appId: "1:13982835731:web:7e7a772c5687084aee8be6"
};

firebase.initializeApp(firebaseConfig);

  //map to the same users
  var uid = document.getElementById('uid').value;
  var db = firebase.database().ref('ExpData/' + uid);


  // get value from html
	var func_fam = document.getElementById('func_fam').innerHTML;

  //icon1
  var icon1_FName = document.getElementById('icon1_FName').innerHTML;
  var icon1_semantic = document.getElementById('icon1_semantic').innerHTML;
  var icon1_fam = document.getElementById('icon1_fam').innerHTML;

  //icon2
  var icon2_FName = document.getElementById('icon2_FName').innerHTML;
  var icon2_semantic = document.getElementById('icon2_semantic').innerHTML;
  var icon2_fam = document.getElementById('icon2_fam').innerHTML;

  //icon3
  var icon3_FName = document.getElementById('icon3_FName').innerHTML;
  var icon3_semantic = document.getElementById('icon3_semantic').innerHTML;
  var icon3_fam = document.getElementById('icon3_fam').innerHTML;

  //icon4
  var icon4_FName = document.getElementById('icon4_FName').innerHTML;
  var icon4_semantic = document.getElementById('icon4_semantic').innerHTML;
  var icon4_fam = document.getElementById('icon4_fam').innerHTML;

  //icon5
  var icon5_FName = document.getElementById('icon5_FName').innerHTML;
  var icon5_semantic = document.getElementById('icon5_semantic').innerHTML;
  var icon5_fam = document.getElementById('icon5_fam').innerHTML;


  //set functionIF from 1-10; see the p in html
  var functionID = document.getElementById("functionID_db").innerHTML;
  console.log(functionID);
  // convert functionID into dexcimal formate (10)
  functionID_int = parseInt(functionID, 10);
  var Fun_name =  FName[functionID_int];

  var ref = db.push({
    //Function: {
      Function_name: Fun_name,
      Function_ID: functionID_int,
      Function_Fam: func_fam,
      icon1_FName: {
        fileName: icon1_FName,
        semantic: icon1_semantic,
        familiar: icon1_fam
      },
      icon2_FName: {
        fileName: icon2_FName,
        semantic: icon2_semantic,
        familiar: icon2_fam
      },
      icon3_FName: {
        fileName: icon3_FName,
        semantic: icon3_semantic,
        familiar: icon3_fam
      },
      icon4_FName: {
        fileName: icon4_FName,
        semantic: icon4_semantic,
        familiar: icon4_fam
      },
      icon5_FName: {
        fileName: icon5_FName,
        semantic: icon5_semantic,
        familiar: icon5_fam
      }
    //}
  })
console.log("finish saving icon rate");

// (removed) compuate and set counts of quality control test (icon5)
var qualifyIconID =  document.getElementById('qualifyIconID').innerHTML;
var show_counts = document.getElementById('Counts');
var qualifyResult = document.getElementById('qualifyTestResult').value;
console.log(qualifyResult);

// set counts to previous counts if no fail this time
show_counts.innerHTML = parseInt(qualifyResult, 10);
document.getElementById('qualifyTestResult').value = 0;

//qualifyIconID + 1 indicate which icon is used for quality control test
/* switch(qualifyIconID) {
	case "0":
		//icon1
		if( (Math.abs(icon5_semantic - icon1_semantic) > 2) || (Math.abs(icon5_fam - icon1_fam) > 2) ){
			//different rating for the same icons
			show_counts.innerHTML = parseInt(qualifyResult, 10) + 1;
			document.getElementById('qualifyTestResult').value = parseInt(show_counts.innerHTML, 10);
		}
		break;
	case "1":
	  //icon2
		if( (Math.abs(icon5_semantic - icon2_semantic) > 2) || (Math.abs(icon5_fam - icon2_fam) > 2) ){
			//different rating for the same icons
			show_counts.innerHTML = parseInt(qualifyResult, 10) + 1;
			document.getElementById('qualifyTestResult').value = parseInt(show_counts.innerHTML, 10);
		}
		break;
	case "2":
		//icon3
		if( (Math.abs(icon5_semantic - icon3_semantic) > 2) || (Math.abs(icon5_fam - icon3_fam) > 2) ){
			//different rating for the same icons
			show_counts.innerHTML = parseInt(qualifyResult, 10) + 1;
			document.getElementById('qualifyTestResult').value = parseInt(show_counts.innerHTML, 10);
		}
		break;
	case "3":
	  //icon4
		if( (Math.abs(icon5_semantic - icon4_semantic) > 2) || (Math.abs(icon5_fam - icon4_fam) > 2) ){
			//different rating for the same icons
			show_counts.innerHTML = parseInt(qualifyResult, 10) + 1;
			document.getElementById('qualifyTestResult').value = parseInt(show_counts.innerHTML, 10);
		}
		break;
	default:
		console.log("cannot find qualifyIconID");
	break;
}
*/
console.log("check");
console.log(qualifyResult);
console.log(document.getElementById('qualifyTestResult').value);
//show up the btn, remove hidden
//document.getElementById('nextCodebtn').removeAttribute("hidden");
setTimeout(function(){document.getElementById('nextCodebtn').removeAttribute("hidden");},1500);

//console.log("remove hidden");
