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
    displayToPage(data);
    addDeletebutton(data);
});

function displayToPage(data) {
    $.each(data, function (index, params) {
        var link = params.link || "#";
        var employer = params.employer;
        var description = params.description;
        var position = params.position;
        var id = params.id;
        var type = params.type;
        var button = "";
        if (link.length > 3) {
            button = "<a style='margin: 15px' href='" + link + "' type='button' class='btn btn-default'>More Info</a>";
        }

        if ($("#" + id).length == 0) {
            if (type != "Internship") {
                $("#employment").append("<div class='panel panel-default'><div id='panel" + id + "' class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion' href='#" + id + "'>" + position + " (" + type + ") " + " - " + employer + "</a></h4></div><div id='" + id + "' class='panel-collapse collapse'><div class='panel-body'>" + description + "</div>" + button + "</div>")
            } else {
                $("#internships").append("<div class='panel panel-default'><div id='panel" + id + "' class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion' href='#" + id + "'>" + position + " - " + employer + "</a></h4></div><div id='" + id + "' class='panel-collapse collapse'><div class='panel-body'>" + description + "</div>" + button + "</div>")
            }
        }
    });
}
