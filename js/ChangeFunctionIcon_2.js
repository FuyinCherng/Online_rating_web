

//According to functionID, show different content
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

//set functionID from 0 - 9; see the this tag in html
var functionID = document.getElementById("functionID").value;

// there are totally 11 batch; same batch for the all the rating pages
var batchID = document.getElementById("batchID").value;

//output the current functionID and batchID on console
console.log(functionID);
console.log(batchID);

var functionName = document.getElementById("functionName");
var path_fun = "";

// convert functionID into dexcimal formate (10)
functionID_int = parseInt(functionID, 10);
console.log(functionID_int);

//Assign Function Name and path by FunctionID & batchID
functionName.innerHTML = FName[functionID_int];
path_fun = FName[functionID_int].concat("/"); //path name for icon

// ========= Functions used for randomly display Icon =========
// why? remove ordering effect when rating icons
function getRandomInt(min, max) {
		var num = Math.floor(Math.random() * (max - min + 1)) + min
		return (num == functionID_int) ? getRandomInt(min, max): num;
}

function shuffle(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}
// ========= Functions used for randomly display Icon =========

//Assign Icons
var icon1 = document.getElementById("img1");
var icon2 = document.getElementById("img2");
var icon3 = document.getElementById("img3");
var icon4 = document.getElementById("img4");
var icon5 = document.getElementById("img5");

var path = "img_2022/".concat(path_fun).concat((functionID_int).toString()).concat("_");

                      //var iconOrder = [1, 2, 3, 4];
var iconOrder = [(Number(batchID)*5 + 0).toString(),
								 (Number(batchID)*5 + 1).toString(),
								 (Number(batchID)*5 + 2).toString(),
							   (Number(batchID)*5 + 3).toString(),
                 (Number(batchID)*5 + 4).toString()];

// determine which icon will be the qualification test (qualificationID)
var qualificationID = getRandomInt(0, 4);
shuffle(iconOrder);
console.log(iconOrder);
console.log(qualificationID);

icon1.src = path.concat(iconOrder[0]).concat(".png");
icon2.src = path.concat(iconOrder[1]).concat(".png");
icon3.src = path.concat(iconOrder[2]).concat(".png");
icon4.src = path.concat(iconOrder[3]).concat(".png");
// icon5 is the same as icon1; use for qualification test
icon5.src = path.concat(iconOrder[4]).concat(".png");

console.log(icon1.src);
console.log(icon2.src);
console.log(icon3.src);
console.log(icon4.src);
console.log(icon5.src);

//Save Icon file name for saving to firebase
var icon1_name = document.getElementById("icon1_FName");
var icon2_name = document.getElementById("icon2_FName");
var icon3_name = document.getElementById("icon3_FName");
var icon4_name = document.getElementById("icon4_FName");
var icon5_name = document.getElementById("icon5_FName");
var qualifyIconID = document.getElementById("qualifyIconID");

icon1_name.value = (functionID_int).toString().concat("_").concat(iconOrder[0]).concat(".png");

icon2_name.value = (functionID_int).toString().concat("_").concat(iconOrder[1]).concat(".png");
icon3_name.value = (functionID_int).toString().concat("_").concat(iconOrder[2]).concat(".png");
icon4_name.value = (functionID_int).toString().concat("_").concat(iconOrder[3]).concat(".png");
icon5_name.value = (functionID_int).toString().concat("_").concat(iconOrder[4]).concat(".png");
qualifyIconID.value = qualificationID;
