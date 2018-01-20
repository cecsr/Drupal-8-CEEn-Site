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
        displayHeader(personData);
        displayInfo(personData);
    } else {
        redirect();
    }
});

function getName() {
    var id = window.location.pathname;
    var urlName = id.substr(id.lastIndexOf('/') + 1);
    return urlName;
}

function searchArray(urlName, data) {
    var foundPerson = false;
    $.each(data, function (index, params) {

        var builtName = params.fName + params.lName;
        console.log(builtName)

        if (urlName == builtName) {
            foundPerson = params;
            document.title = params.fName + " " + params.lName;
        }
    })
    return foundPerson;
}

function redirect() {
    $('#person').append("<div style='margin-top:50px; margin-bottom:300px; margin-left:15px'><h1>Request page could not be found. </h1><h1>Redirecting to previous page in <span id='timer'>5</span></h1></div>");

    var time = 4;
    window.setInterval(function () {
        if (time <= 1) {
            window.history.back();
        } else {
            document.getElementById("timer").innerHTML = time;
        }

        time--;
    }, 900);
}

function displayHeader(personData) {
    var name = personData.fName + " " + personData.lName;
    var position = personData.position;
    var office = personData.office;
    var phone = personData.phone;
    var email = personData.email;
    var imagePath = personData.imagePath;
    var personalWebsite = personData.personalWebsite;
    var specialy = personData.specialy;
    var classWebsite = personData.classWebsite;

    $("#imagePath").hide(function () {
        $("#imagePath").attr('src', imagePath);
        $("#imagePath").fadeIn();
    });
    $('#name').text(name);
    $('#position').text(position);
    $('#office').text(office);
    $('#phone').text(phone);
    $('#email').text(email);

    setTimeout(function () {
        $('.header-container').fadeIn();
        $('#accordion').fadeIn();
    }, 650);
}

function displayInfo(personData) {
    var biography = personData.biography;
    var links = "";

    //BIOGRAPHY FIRST
    var thePanel = '<div class="panel panel-default">';
    var panelHeading = '<div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#biography">' + 'Biography' + '</a></h4></div>';
    var panelCollapse = '<div id="biography" class="panel-collapse collapse in"><div class="panel-body">' + biography + '</div></div><div>';
    $('#accordion').append(thePanel + panelHeading + panelCollapse);

    $.each(personData, function (index, params) {
        switch (index) {
            case 'id':
                break;
            case 'fName':
                break;
            case 'lName':
                break;
            case 'classWebsite':
                if (params !== "") {
                    links += "<h4><a href='" + params + "'>" + 'Class Website' + "</a></h4>"
                }
                break;
            case 'profileLink':
                if (params !== "") {
                    links += "<h4><a href='" + params + "'>" + 'Profile Link' + "</a></h4>"
                }
                break;
            case 'type':
                break;
            case 'pageLink':
                break;
            case 'personalWebsite':
                if (params !== "") {
                    links += "<h4><a href='" + params + "'>" + 'Personal Website' + "</a></h4>"
                }
                break;
            case 'personalWebsite':
                if (params !== "") {
                    links += "<h4><a href='" + params + "'>" + 'Personal Website' + "</a></h4>"
                }
                break;
            case 'scholarShipsociety':
                break;
            case 'filePath':
                if (params !== "") {
                    links += "<h4><a href='" + params + "'>" + 'Vitae (PDF)' + "</a></h4>"
                }
                break;
            case 'specialty':
                if (params !== "") {
                    var thePanel = '<div class="panel panel-default">';
                    var panelHeading = '<div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#' + 'specialty' + '">' + 'Specialty' + '</a></h4></div>';
                    var panelCollapse = '<div id="' + 'specialty' + '" class="panel-collapse collapse"><div class="panel-body">' + params + '</div></div><div>';
                    $('#accordion').append(thePanel + panelHeading + panelCollapse);
                }
                break;
            default:
                if (($("#" + index).length == 0) && (params.content !== "")) {
                    console.log(params)

                    var thePanel = '<div class="panel panel-default">';
                    var panelHeading = '<div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#' + index + '">' + params.title + '</a></h4></div>';
                    var panelCollapse = '<div id="' + index + '" class="panel-collapse collapse"><div class="panel-body">' + params.content + '</div></div><div>';

                    $('#accordion').append(thePanel + panelHeading + panelCollapse);
                }
        }
    });

    var thePanel = '<div class="panel panel-default">';
    var panelHeading = '<div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#links">' + 'Links' + '</a></h4></div>';
    var panelCollapse = '<div id="links" class="panel-collapse collapse"><div class="panel-body">' + links + '</div></div><div>';
    $('#accordion').append(thePanel + panelHeading + panelCollapse);

}
