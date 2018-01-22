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
var personData = "";
var id = "";
var image = "";


thosePeople.on('value', function (snapshot) {
    data = snapshot.val();
    var urlName = getName();
    personData = searchArray(urlName, data);
    id = personData.id;
    populateFields(personData);
});

function populateFields(personData) {
    console.log(personData)
    $('#id').val(personData.id);
    $('#fName').val(personData.fName);
    $('#lName').val(personData.lName);
    $('#type').val(personData.type);
    $('#scholarShipsociety').val(personData.scholarShipsociety);
    $('#position').val(personData.position);
    $('#specialty').val(personData.specialty);
    $('#biography').val(personData.biography);
    $('#office').val(personData.office);
    $('#phone').val(personData.phone);
    $('#email').val(personData.email);
    $('#classWebsite').val(personData.classWebsite);
    $('#personalWebsite').val(personData.personalWebsite);
    $('#profileLink').val(personData.profileLink);

    $('#customTitle1').val(personData.content1.title);
    $('#customContent1').val(personData.content1.content);
    $('#customTitle2').val(personData.content2.title);
    $('#customContent2').val(personData.content2.content);
    $('#customTitle2').val(personData.content2.title);
    $('#customContent2').val(personData.content2.content);
    $('#customTitle3').val(personData.content3.title);
    $('#customContent3').val(personData.content3.content);
    $('#customTitle4').val(personData.content4.title);
    $('#customContent4').val(personData.content4.content);
    $('#customTitle5').val(personData.content5.title);
    $('#customContent5').val(personData.content5.content);
    $('#customTitle6').val(personData.content6.title);
    $('#customContent6').val(personData.content6.content);
    $('#customTitle7').val(personData.content7.title);
    $('#customContent7').val(personData.content7.content);
    $('#customTitle8').val(personData.content8.title);
    $('#customContent8').val(personData.content8.content);
    $('#customTitle9').val(personData.content9.title);
    $('#customContent9').val(personData.content9.content);
    $('#customTitle10').val(personData.content10.title);
    $('#customContent10').val(personData.content10.content);
}

function getValues() {
    alert('Updating Person. Please wait for for an alert saying the changes have been saved.')
    updateDatabase(personData);
}

function updateDatabase(personData) {
    var imageToUpload = document.getElementById("image");
    var fName = $('#fName').val();
    var lName = $('#lName').val();
    var type = $('#type').val();
    var scholarShipsociety = $('#scholarShipsociety').val();
    var position = $('#position').val();
    var specialty = $('#specialty').val();
    var biography = $('#biography').val();
    var office = $('#office').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var classWebsite = $('#classWebsite').val();
    var personalWebsite = $('#personalWebsite').val();
    var profileLink = $('#profileLink').val();
    var fileToUpload = document.getElementById("vitae");
    var profileLink = $('#profileLink').val();
    var filePath = "";
    var imagePath = "";
    var pageLink = fName + lName;

    var customTitle1 = $('#customTitle1').val();
    var customContent1 = $('#customContent1').val();
    var customTitle2 = $('#customTitle2').val();
    var customContent2 = $('#customContent2').val();
    var customTitle3 = $('#customTitle3').val();
    var customContent3 = $('#customContent3').val();
    var customTitle4 = $('#customTitle4').val();
    var customContent4 = $('#customContent4').val();
    var customTitle5 = $('#customTitle5').val();
    var customContent5 = $('#customContent5').val();
    var customTitle6 = $('#customTitle6').val();
    var customContent6 = $('#customContent6').val();
    var customTitle7 = $('#customTitle7').val();
    var customContent7 = $('#customContent7').val();
    var customTitle8 = $('#customTitle8').val();
    var customContent8 = $('#customContent8').val();
    var customTitle9 = $('#customTitle9').val();
    var customContent9 = $('#customContent9').val();
    var customTitle10 = $('#customTitle10').val();
    var customContent10 = $('#customContent10').val();

    if (imageToUpload.files[0]) {
        if (imageToUpload.files[0].size > 220500) {
            alert("Image file size is to big!");
            return false;
        }

        var storageRef = firebase.storage().ref();
        var imageRef = storageRef.child(id);
        var image = imageToUpload.files[0];

        imageRef.put(image).then(function (snapshot) {
            imagePath = snapshot.metadata.downloadURLs[0];
            console.log(imagePath);
        })
    } else {
        imagePath = personData.imagePath;
    }

    if (fileToUpload.files[0]) {
        var file = fileToUpload.files[0];
        var fileRef = storageRef.child(pageLink + "PDF");
        fileRef.put(file).then(function (snapshot) {
            filePath = snapshot.metadata.downloadURLs[0];
        })
    }

    window.setTimeout(function () {
        firebase.database().ref(id).set({
            fName: fName,
            lName: lName,
            type: type,
            position: position,
            scholarShipsociety: scholarShipsociety,
            specialty: specialty,
            biography: biography,
            office: office,
            phone: phone,
            email: email,
            personalWebsite: personalWebsite,
            profileLink: profileLink,
            filePath: filePath,
            classWebsite: classWebsite,
            imagePath: imagePath,
            id: id,
            pageLink: pageLink,
            content1: {
                title: customTitle1,
                content: customContent1
            },
            content2: {
                title: customTitle2,
                content: customContent2
            },
            content3: {
                title: customTitle3,
                content: customContent3
            },
            content4: {
                title: customTitle4,
                content: customContent4
            },
            content5: {
                title: customTitle5,
                content: customContent5
            },
            content6: {
                title: customTitle6,
                content: customContent6
            },
            content3: {
                title: customTitle3,
                content: customContent3
            },
            content7: {
                title: customTitle7,
                content: customContent7
            },
            content8: {
                title: customTitle8,
                content: customContent8
            },
            content9: {
                title: customTitle9,
                content: customContent9
            },
            content10: {
                title: customTitle10,
                content: customContent10
            }
        });
        alert('Person has been updated')
    }, 2500);
}

window.setTimeout(function () {
    $('#adminPanel').fadeIn();
}, 1500);
