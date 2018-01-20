function writeToDatabase() {
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
    var imageToUpload = document.getElementById("image");
    var profileLink = $('#profileLink').val();

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

    //NON FORM LINKS
    var id = new Date().getTime().toString();
    var pageLink = fName + lName;
    var image = imageToUpload.files[0];
    var storageRef = firebase.storage().ref();
    var imageRef = storageRef.child(id);
    var filePath = "";
    var imagePath = "";

    if (!imageToUpload.files[0]) {
        alert('No Image Attached.');
        return
    }

    if (imageToUpload.files[0].size > 220500) {
        alert("Image file size is to big!");
        console.log(imageToUpload.files[0].size);
        return;
    }

    if (fileToUpload.files[0]) {
        var file = fileToUpload.files[0];
        var fileRef = storageRef.child(pageLink + "PDF");
        fileRef.put(file).then(function (snapshot) {
            alert('filePut!')
            filePath = snapshot.metadata.downloadURLs[0];
            firebase.database().ref(id).set({
                filePath: filePath,
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
                id: id,
                pageLink: pageLink,
                imagePath: imagePath,
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
            })
        })
    }

    imageRef.put(image).then(function (snapshot) {
        console.log(snapshot);
        alert('imagePut!')
        imagePath = snapshot.metadata.downloadURLs[0];

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
        })
        alert("Added " + fName + " " + lName);
    })

    //cleanInput();
}

function cleanInput() {
    $(':input').val('');

}

$('body').on('click', '.btn-danger', function () {
    //removeFromDatabase($(this));
});
