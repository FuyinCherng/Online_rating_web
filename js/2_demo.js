// Initialize Firebase
//		var config = {
//    			apiKey: "AIzaSyCRY3WliLoqO6JYSHwivDrzAyI5OHvr_fU",
//    			authDomain: "exp1-watchvideo.firebaseapp.com",
//    			databaseURL: "https://exp-iconrating-3.firebaseio.com",
//    			projectId: "exp1-watchvideo",
//    			storageBucket: "exp1-watchvideo.appspot.com",
//    			messagingSenderId: "13982835731"
//  		};
//			firebase.initializeApp(config);

			var firebaseConfig = {
			    apiKey: "AIzaSyCRY3WliLoqO6JYSHwivDrzAyI5OHvr_fU",
			    authDomain: "exp1-watchvideo.firebaseapp.com",
			    databaseURL: "https://exp-iconrating-3.firebaseio.com/",
			    projectId: "exp1-watchvideo",
			    storageBucket: "exp1-watchvideo.appspot.com",
			    messagingSenderId: "13982835731",
			    appId: "1:13982835731:web:7e7a772c5687084aee8be6"
			  };
			  // Initialize Firebase
			  firebase.initializeApp(firebaseConfig);


  		var db = firebase.database().ref('ExpData/');

  		var ref = db.push({
  				intro_1: "agree"
  		})

  		//post the key value to next page
  		document.getElementById('uid').value = ref.key;
