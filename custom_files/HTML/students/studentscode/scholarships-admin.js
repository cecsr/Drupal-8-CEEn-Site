function writeToDatabase() {
    var id = new Date().getTime();
    var scholarship = $('#scholarship').val();
    var link = $('#link').val();
    var description = $('#description').val();

    firebase.database().ref(id).set({
        id: id,
        scholarship: scholarship,
        link: link,
        description: description
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
    $('#scholarship').val("");
    $('#link').val("");
    $('#description').val("");
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
