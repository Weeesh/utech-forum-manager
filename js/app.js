var config = {
    apiKey: "AIzaSyAv0Emmr6IZJsmhsyC1CqENh7u2akFwuCU",
    authDomain: "fir-demo-e7494.firebaseapp.com",
    databaseURL: "https://fir-demo-e7494.firebaseio.com",
    projectId: "fir-demo-e7494",
    storageBucket: "fir-demo-e7494.appspot.com",
    messagingSenderId: "677009890009"
  };

firebase.initializeApp(config);



// get elements
/*
const preObject = document.getElementById('object');

//ref function gets you to the root of the database
// child creates a new branch
const dbRefObject = firebase.database().ref().child('object');
//sync object changes
dbRefObject.on('value', snap => console.log(snap.val()));

*/
/*
var ref = firebase.app().database().ref();
ref.once('value')
    .then(function(snap){
        console.log('snap.val()', snap.val());
    });
*/

