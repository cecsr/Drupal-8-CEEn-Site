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
    console.log(that);
    var id = $(that).closest('tr').prop("id");
    console.log(id);
    $("#" + id).fadeOut();
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
    if (functionHasRun == false) {
        $("colgroup").append("<col style='width: 10%'>");
        $("#scholarshipHeader").append("<th>Delete</th>");
        functionHasRun = true;
    }

    $.each(data, function (index, params) {
        var link = params.link;
        var scholarship = params.scholarship;
        var description = params.description;
        var id = params.id;

        var indexNum = addedToPage.indexOf(id);

        if (indexNum == -1) {
            addedToPage.push(id);
            $("#" + id).append("<td><button type='button' class='btn btn-danger'>X</button></td>")
        }
    });
}

$('body').on('click', '.btn-danger', function () {
    alert('Scholarship Deleted');
    removeFromDatabase($(this));
});
