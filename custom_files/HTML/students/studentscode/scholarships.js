// Initialize Firebase
var config = {
    apiKey: "AIzaSyAI-1NlK5x1ZF1i0WjVmm-8NTgyJv-OBnM",
    authDomain: "scholar-23b20.firebaseapp.com",
    databaseURL: "https://scholar-23b20.firebaseio.com",
    projectId: "scholar-23b20",
    storageBucket: "",
    messagingSenderId: "584083321146"
};

firebase.initializeApp(config);
var database = firebase.database();
var data = {};

var thoseScholarships = firebase.database().ref('/');

thoseScholarships.on('value', function (snapshot) {
    data = snapshot.val();
    console.log(data);
    displayToPage(data);
    addDeletebutton(data);
});

function displayToPage(data) {
    $.each(data, function (index, params) {
        var link = params.link;
        var scholarship = params.scholarship;
        var description = params.description;
        var id = params.id;

        if ($("#" + id).length == 0) {
            $("#scholarships").append("<tr id='" + id + "'><td><a href='#'>" + scholarship + "</a></td><td>" + description + "</td></tr>");
        }
    });
}
