setTimeout(
    function () {
        getDocSize();
    }, 1500);

function getDocSize() {
    var width = $(window).width();
    if (width < 1200) {
        addRowClass();
    } else {
        removeRowClass();
    }
}

function addRowClass() {
    if ($("#duhfuh1").length == 0) {} else {
        $("#duhfuh1").addClass("row");
        $("#duhfuh2").addClass("row");
    }
}

function removeRowClass() {
    if ($("#duhfuh1").length == 0) {} else {
        console.log('exist');
        $("#duhfuh1").removeClass("row");
        $("#duhfuh2").removeClass("row");
    }
}


$(window).resize(function () {
    getDocSize();
});
