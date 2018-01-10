function writeToDatabase() {
    var fName = $('#fName').val();
    var lName = $('#lName').val();
    var type = $('#type').val();
    var position = $('#position').val();
    var scholarShipsociety = $('#scholarShipsociety').val();
    var specialy = $('#specialy').val();
    var biography = $('#biography').val();
    var office = $('#office').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var classWebsite = $('#classWebsite').val();
    var personalWebsite = $('#personalWebsite').val();
    var profileLink = $('#profileLink').val();
    var fileToUpload = document.getElementById("vitae");
    var imageToUpload = document.getElementById("image");
    var condensedVitae = $('#condensedVitae').val();
    var fullName = fName + lName;

    if (imageToUpload.files[0].size > 220000) {
        alert("Image file size is to big!");
        console.log(imageToUpload.files[0].size);
        return;
    }

    if (imageToUpload.files[0]) {
        var image = imageToUpload.files[0];
        var storageRef = firebase.storage().ref();
        var imageRef = storageRef.child(fullName);
        var filePath = "";

        if (fileToUpload.files[0]) {
            var file = fileToUpload.files[0];
            var fileRef = storageRef.child(fullName + "PDF");
            fileRef.put(file).then(function (snapshot) {
                console.log(snapshot);
                filePath = snapshot.metadata.downloadURLs[0];
                imageRef.put(image).then(function (snapshot) {
                    console.log(snapshot);
                    firebase.database().ref(fullName).set({
                        fName: fName,
                        lName: lName,
                        type: type,
                        position: position,
                        scholarShipsociety: scholarShipsociety,
                        specialy: specialy,
                        biography: biography,
                        office: office,
                        phone: phone,
                        email: email,
                        personalWebsite: personalWebsite,
                        profileLink: profileLink,
                        filePath: filePath,
                        condensedVitae: condensedVitae,
                        classWebsite: classWebsite,
                        imagePath: snapshot.metadata.downloadURLs[0],
                        id: fullName
                    })
                })
            })
        } else {
            imageRef.put(image).then(function (snapshot) {
                console.log(snapshot);
                firebase.database().ref(fullName).set({
                    fName: fName,
                    lName: lName,
                    type: type,
                    position: position,
                    scholarShipsociety: scholarShipsociety,
                    specialy: specialy,
                    office: office,
                    phone: phone,
                    email: email,
                    personalWebsite: personalWebsite,
                    profileLink: profileLink,
                    filePath: filePath,
                    condensedVitae: condensedVitae,
                    classWebsite: classWebsite,
                    imagePath: snapshot.metadata.downloadURLs[0],
                    id: fullName
                })
            })
        }
    } else {
        alert('No image!');
        return
    }
}


$('body').on('click', '.btn-danger', function () {
    removeFromDatabase($(this));
});
