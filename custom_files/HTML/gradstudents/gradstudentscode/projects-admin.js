function writeToDatabase() {
    console.log('write to database');

    //define variables
    var projectNum = new Date().getTime();
    var studauth = $('#studauth').val();
    var advisor = $('#advisor').val();
    var emphasis = $('#emphasis').val();
    var year = $('#year').val();
    var title = $('#title').val();
    var fileToUpload = document.getElementById("fileToUpload");

    if ('files' in fileToUpload) {
        //get first file that is selected
        var file = fileToUpload.files[0];
        //define firebase storage
        var storageRef = firebase.storage().ref();
        //set filebase storage name
        var filesRef = storageRef.child(file.name);
        //upload to firebase
        filesRef.put(file).then(function (snapshot) {
            alert(snapshot.metadata.fullPath + " has been saved to the database");
            //upload all data to firebase
            firebase.database().ref("project_" + projectNum).set({
                projectNum: projectNum,
                studauth: studauth,
                advisor: advisor,
                emphasis: emphasis,
                title: title,
                year: year,
                file: snapshot.metadata.downloadURLs[0],
                filename: file.name
            })
        })
        cleanInput();
    } else {
        alert('no file attached');
    }
}

function removeFromDatabase(that) {
    var storageRef = firebase.storage().ref();
    var id = $(that).closest('tr').prop("id");
    $.each(projectsData, function (index, params) {
        var adjustedID = "project_" + id;
        if (adjustedID == index) {
            var deleteref = storageRef.child(params.filename);
            deleteref.delete().then(function () {
                console.log('success');
                firebase.database().ref("project_" + id).remove();
                $("#" + id).fadeOut();
            }).catch(function (error) {
                alert('failed to remove')
            });
        }
    });
}


function cleanInput() {
    $('#studauth').val("");
    $('#advisor').val("");
    $('#emphasis').val("");
    $('#title').val("");
}

var addedToPage = [];
var functionHasRun = false;

function addDeletebutton(data) {
    if (functionHasRun == false) {
        $("colgroup").append("<col style='width: 10%'>");
        $("#projectsHeader").append("<th>Delete</th>");
        functionHasRun = true;
    }

    $.each(data, function (index, params) {

        var projectNum = params.projectNum;
        var indexNum = addedToPage.indexOf(projectNum);
        if (indexNum == -1) {
            addedToPage.push(projectNum);
            console.log(projectNum)
            $("#" + projectNum).append("<td><button style='float: right;margin:7px 5px 7px 0px;width:100%;min-width:75px'type='button' class='btn btn-danger'>Delete</button></td>")
        }
    });
}

$('body').on('click', '.btn-danger', function () {
    removeFromDatabase($(this));
});
