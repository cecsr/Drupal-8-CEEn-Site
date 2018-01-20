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

var data = {};
var thosePeople = firebase.database().ref('/');

thosePeople.on('value', function (snapshot) {
    data = snapshot.val();
    displayToPage(data);
});

function displayToPage(data) {
    $('#loader').hide();
    $.each(data, function (index, params) {
        var id = params.id;
        switch (params.type) {
            case "Full-Time":
                displayFullTime(params);
                break;
            case "Adjunct":
                displayAdjunct(params);
                break;
            case "Staff":
                displayStaff(params);
                break;
            case "Emeritus":
                displayEmeritus(params);
                break;
        }
    });
}

function displayFullTime(params) {
    var fName = params.fName;
    var lName = params.lName;
    var fullName = fName + " " + lName;
    var id = params.id;
    var biography = params.biography.substring(0, 315) + "...";
    var office = params.office;
    var phone = params.phone;
    var email = params.email;
    var position = params.position;
    var specialty = params.specialty;
    var imagePath = params.imagePath;
    var linkToFullPage = "person/" + params.pageLink;

    if ($("#" + id).length == 0) {
        $("#fullTime").append("<div class=' facultyWrapper' id='" + id + "'><div class='col-sm-3 facultyImage'><a class='profile-link' href='" + linkToFullPage + "'><img src='" + imagePath + "'></a></div><div class='col-sm-3 facultyInfo'><a href='" + linkToFullPage + "'><h2>" + fullName + "</h2></a><i>" + position + "</i><div class='contactWrapper'><p><strong>Office: </strong>" + office + "</p><p><strong>Phone: </strong> " + phone + "</p><p><strong>Email: </strong>" + email + "</p></div></div><div class='col-sm-6 facultyrNb'><h3 style='margin-top: 5px;'>Research</h3><p>" + specialty + "</p><h3> Biography </h3> <p>" + biography + "</p> </div></div>")
    }
}

function displayAdjunct(params) {
    var fName = params.fName;
    var lName = params.lName;
    var fullName = fName + " " + lName;
    var id = params.id;
    var biography = params.biography.substring(0, 315) + "...";
    var office = params.office;
    var phone = params.phone;
    var email = params.email;
    var position = params.position;
    var specialty = params.specialty;
    var imagePath = params.imagePath;
    var linkToFullPage = "person/" + params.pageLink;

    if ($("#" + id).length == 0) {
        $("#adjunct").append("<div class=' facultyWrapper' id='" + id + "'><div class='col-sm-3 facultyImage'><a class='profile-link' href='" + linkToFullPage + "'><img src='" + imagePath + "'></a></div><div class='col-sm-3 facultyInfo'><a href='" + linkToFullPage + "'><h2>" + fullName + "</h2></a><i>" + position + "</i><div class='contactWrapper'><p><strong>Office: </strong>" + office + "</p><p><strong>Phone: </strong> " + phone + "</p><p><strong>Email: </strong>" + email + "</p></div></div><div class='col-sm-6 facultyrNb'><h3 style='margin-top: 5px;'>Research</h3><p>" + specialty + "</p><h3> Biography </h3> <p>" + biography + "</p> </div></div>")
    }
}

function displayEmeritus(params) {
    var fName = params.fName;
    var lName = params.lName;
    var fullName = fName + " " + lName;
    var type = params.type;
    var id = params.id;
    var scholarShipsociety = params.scholarShipsociety;
    var biography = params.biography;
    var office = params.office;
    var phone = params.phone;
    var email = params.email;
    var position = params.position;
    var specialy = params.specialy;
    var personalWebsite = params.personalWebsite;
    var profileLink = params.profileLink;
    var filePath = params.filePath;
    var condensedVitae = params.condensedVitae;
    var classWebsite = params.classWebsite;
    var imagePath = params.imagePath;
    var linkToFullPage = "person/" + params.id;

    if ($("#" + id).length == 0) {
        $("#emeritus").append("<div class=' facultyWrapper' id='" + id + "'><div class='col-sm-3 facultyImage'><a class='profile-link' href='" + linkToFullPage + "'><img src='" + imagePath + "'></a></div><div class='col-sm-3 facultyInfo'><a href='" + linkToFullPage + "'><h2>" + fullName + "</h2></a><i>" + position + "</i><div class='contactWrapper'><p><strong>Office: </strong>" + office + "</p><p><strong>Phone: </strong> " + phone + "</p><p><strong>Email: </strong>" + email + "</p></div></div><div class='col-sm-6 facultyrNb'><h3 style='margin-top: 5px;'>Research</h3><p>" + specialy + "</p><h3> Biography </h3> <p>" + biography + "</p> </div></div>")
    }
}

function displayStaff(params) {
    var fName = params.fName;
    var lName = params.lName;
    var fullName = fName + " " + lName;
    var type = params.type;
    var id = params.id;
    var scholarShipsociety = params.scholarShipsociety;
    var biography = params.biography;
    var office = params.office;
    var phone = params.phone;
    var email = params.email;
    var position = params.position;
    var specialy = params.specialy;
    var personalWebsite = params.personalWebsite;
    var profileLink = params.profileLink;
    var filePath = params.filePath;
    var condensedVitae = params.condensedVitae;
    var classWebsite = params.classWebsite;
    var imagePath = params.imagePath;
    var linkToFullPage = "person/" + params.id;

    if ($("#" + id).length == 0) {
        $("#staff").append("<div class=' facultyWrapper' id='" + id + "'><div class='col-sm-3 facultyImage'><a class='profile-link' href='" + linkToFullPage + "'><img src='" + imagePath + "'></a></div><div class='col-sm-3 facultyInfo'><a href='" + linkToFullPage + "'><h2>" + fullName + "</h2></a><i>" + position + "</i><div class='contactWrapper'><p><strong>Office: </strong>" + office + "</p><p><strong>Phone: </strong> " + phone + "</p><p><strong>Email: </strong>" + email + "</p></div></div><div class='col-sm-6 facultyrNb'><h3 style='margin-top: 5px;'>Research</h3><p>" + specialy + "</p><h3> Biography </h3> <p>" + biography + "</p> </div></div>")
    }
}

function pagination() {
    var id = window.location.pathname;
    var activeTab = id.substr(id.lastIndexOf('/') + 1);
    var buildID = "#" + activeTab + "Tab";
    $(buildID).addClass('active')
}


window.setTimeout(function () {
    pagination();
}, 500);
window.setTimeout(function () {
    pagination();
}, 1500);
