// Initialize Firebase
		var config = {
    			apiKey: "AIzaSyCRY3WliLoqO6JYSHwivDrzAyI5OHvr_fU",
    			authDomain: "exp1-watchvideo.firebaseapp.com",
    			databaseURL: "https://exp-iconrating-3.firebaseio.com",
    			projectId: "exp1-watchvideo",
    			storageBucket: "exp1-watchvideo.appspot.com",
    			messagingSenderId: "13982835731"
  		};
  		firebase.initializeApp(config);

  		var uid = document.getElementById('uid').value;
  		var db = firebase.database().ref('ExpData/' + uid);


  		var gender = document.getElementById('gender').innerHTML;
  		var age = document.getElementById('age').innerHTML;

		//var education = document.getElementById('education').innerHTML;
  		var occupation = document.getElementById('occupation').innerHTML;
  		//var mobileSystem = document.getElementById('mobileSystem').innerHTML;

  		//insert data to database
  		var ref = db.update({
  			demo_2: {
  				gender: gender,
  				age: age,
				//education: education,
  				occupation: occupation,
  				//mobileSystem: mobileSystem
  			}
  		})
