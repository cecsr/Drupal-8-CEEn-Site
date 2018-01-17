document.title = "This is the newpage title.";

// Initialize Firebase
var config = {
    apiKey: "AIzaSyDk6M4Vo7TwvDLUsM_bLb8Mw2xbyAPR8qQ",
    authDomain: "facultydirectory-d2797.firebaseapp.com",
    databaseURL: "https://facultydirectory-d2797.firebaseio.com",
    projectId: "facultydirectory-d2797",
    storageBucket: "facultydirectory-d2797.appspot.com",
    messagingSenderId: "236140620638"
};
firebase.initializeApp(config);

var thosePeople = firebase.database().ref('/');



thosePeople.on('value', function (snapshot) {
    data = snapshot.val();
    var urlName = getName();
    var personData = searchArray(urlName, data);

    if (personData) {
        console.log(personData);
        $('#person').append("<div style='margin-top:50px; margin-bottom:300px; margin-left:15px'><h1> page could  be found...</h1></div>");
    } else {
        alert('booo')
        $('#person').append("<div style='margin-top:50px; margin-bottom:300px; margin-left:15px'><h1>Request page could not be found...</h1></div>");
    }
});

function getName() {
    var id = window.location.pathname;
    var urlName = id.substr(id.lastIndexOf('/') + 1);
    return urlName;
}

function searchArray(urlName, data) {
    console.log(urlName);
    var foundPerson = false;

    $.each(data, function (index, params) {
        var builtName = params.fName + params.lName;
        if (urlName == builtName) {
            foundPerson = params;
        }
    })
    return foundPerson;
}
