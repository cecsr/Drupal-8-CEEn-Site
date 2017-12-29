var config = {
    apiKey: "AIzaSyBseqE7h5IJM05qigt0PALa4C99p0Ta6ZQ",
    authDomain: "update-alumni-contact-info.firebaseapp.com",
    databaseURL: "https://update-alumni-contact-info.firebaseio.com",
    projectId: "update-alumni-contact-info",
    storageBucket: "",
    messagingSenderId: "514738736456"
};

firebase.initializeApp(config);
var database = firebase.database();

function getContactInfo() {
    var fName = $('#fName').val();
    var mName = $('#mName').val();
    var lName = $('#lName').val();
    var address = $('#address').val();
    var state = $('#state').val();
    var city = $('#city').val();
    var zip = $('#zip').val();
    var email = $('#email').val();
    var phone = $('#phone').val();

    var uID = fName + "-" + mName + "-" + lName + "-" + zip;

    var data = {
        fName: fName,
        mName: mName,
        lName: lName,
        address: address,
        city: city,
        state: state,
        zip: zip,
        email: email,
        phone: phone
    }

    firebase.database().ref(uID).set(data);

    cleanInput();
    sendEmail(data);
}

function cleanInput() {
    var elem = document.getElementById('alumniForm').elements;
    for (var i = 0; i < elem.length - 1; i++) {
        var swag = "#" + elem[i].id;
        if (elem[i].value != "") {
            $(swag).parent().append("<span class='glyphicon glyphicon-ok form-control-feedback'></span>");
            $(swag).parent().parent().addClass("has-success has-feedback");
        } else {
            $(swag).parent().append("<span class='glyphicon glyphicon-warning-sign form-control-feedback'></span>");
            $(swag).parent().parent().addClass("has-warning has-feedback");
        }
    }

    $('.well').removeClass("well").addClass("alert alert-success ").text("Hooray! You have updated your information!");
}

function sendEmail(data) {
    console.log('sending email');
    //SEND TO GOOGLE SCRIPT TO SEND EMAIL
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'https://script.google.com/macros/s/AKfycbzO4W4Y-_qKVJ49w7bzUyjJAkj_e-moy18FYd2affYFqbNf-r-K/exec',
        data: data,
        success: function (data) {
            alert("An email has been sent to " + data);
        },
    });
}
