function writeToDatabase() {
    var id = new Date().getTime();
    var employer = $('#employer').val();
    var link = $('#link').val();
    var description = $('#description').val();
    var type = $('#type').val();
    var position = $('#position').val();

    firebase.database().ref(id).set({
        id: id,
        employer: employer,
        link: link,
        description: description,
        type: type,
        position: position
    });
    cleanInput();
}

function removeFromDatabase(that) {
    var css_id = $(that).closest('div').prop("id");
    var id = css_id.substring(5);
    $("#" + id).fadeOut();
    $("#panel" + id).fadeOut();

    firebase.database().ref(id).remove();
}

function cleanInput() {
    $('#employer').val("");
    $('#link').val("");
    $('#description').val("");
    $('#position').val("");
}

var addedToPage = [];
var functionHasRun = false;

function addDeletebutton(data) {
    $.each(data, function (index, params) {
        var link = params.link;
        var description = params.description;
        var id = params.id;
        var employer = params.employer;
        var description = params.description;
        var position = params.position;
        var type = params.type;

        var indexNum = addedToPage.indexOf(id);

        if (indexNum == -1) {
            addedToPage.push(id);
            $("#panel" + id).append("<button style='float: right;margin:-40px 8px 0px 0px;'type='button' class='btn btn-danger'>Delete</button>")
        }
    });
}

$('body').on('click', '.btn-danger', function () {
    alert('Employment Deleted');
    removeFromDatabase($(this));
});
