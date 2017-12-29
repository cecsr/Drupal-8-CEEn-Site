// Initialize Firebase
var config = {
    apiKey: "AIzaSyBOJkgWvk-imb6FNm873VCwveDuSbGBrsg",
    authDomain: "employment-47a59.firebaseapp.com",
    databaseURL: "https://employment-47a59.firebaseio.com",
    projectId: "employment-47a59",
    storageBucket: "",
    messagingSenderId: "129166650247"
};

firebase.initializeApp(config);
var database = firebase.database();
var data = {};

var thoseEmployment = firebase.database().ref('/');

thoseEmployment.on('value', function (snapshot) {
    data = snapshot.val();
    console.log(data);
    displayToPage(data);
    addDeletebutton(data);
});

function displayToPage(data) {
    $.each(data, function (index, params) {
        var link = params.link;
        var employer = params.employer;
        var description = params.description;
        var position = params.position;
        var id = params.id;
        var type = params.typee;

        if ($("#" + id).length == 0) {
            if (type != "internship") {

                //$("#employment").append("<tr id='" + id + "'><td><a href='#'>" + employment + "</a></td><td>" + description + "</td></tr>");
            }
        }
    });
}
