var projectsData = JSON.parse(localStorage.getItem("projectsData"));
if (projectsData == null) {
    projectsData = {};
}

var config = {
    apiKey: "AIzaSyC-xc4aDfN5N81fV0GpHriFHMuu2hmQkm8",
    authDomain: "ceen-project-archive.firebaseapp.com",
    databaseURL: "https://ceen-project-archive.firebaseio.com",
    projectId: "ceen-project-archive",
    storageBucket: "ceen-project-archive.appspot.com",
    messagingSenderId: "785483747539"
};
firebase.initializeApp(config);

var database = firebase.database();
var data = {};

var thoseProjects = firebase.database().ref('/');

thoseProjects.on('value', function (snapshot) {

    data = snapshot.val();
    console.log(data)
    localStorage.setItem("projectsData", JSON.stringify(data));
    displayToPage(data);
    addDeletebutton(data);
});

function displayToPage(data) {
    var projectCount = 0;
    $.each(data, function (index, params) {
        var advisor = params.advisor;
        var title = params.title;
        var emphasis = params.emphasis;
        var file = params.file;
        var year = params.year;
        var projectNum = params.projectNum;
        var studauth = params.studauth;

        if (projectNum >= 25) {
            projectNum = projectNum + 1;
            if ($("#" + projectNum).length == 0) {
                $("#projects").append("<tr id='" + projectNum + "'><td>" + year + "</td><td>" + studauth + "</td><td>" + advisor + "</td><td>" + emphasis + "</td><td><a href='" + file + "' download>" + title + "</a></td>");
            }
        }
    });
}
