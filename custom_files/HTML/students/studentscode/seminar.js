setTimeout(function () {
    $('#hideSeminar').fadeOut();

}, 7500);

var key = "AIzaSyDR50mVI2H-7Ca5sr_j-xQpXoNzX8drbjE";
var ytUrl = "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=byuceenweb&key=" + key;
var videosURL = "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=OneDirectionVEVO&key=" + key;

$.getJSON(ytUrl, function (data) {
    console.log(data.items[0].contentDetails.relatedPlaylists.uploads);
    var uploadID = data.items[0].contentDetails.relatedPlaylists.uploads
    var uploadIDString = "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=" + uploadID + "&key=" + key + "&part=snippet&maxResults=5"

    $.getJSON(uploadIDString, function (data2) {
        var videoTitle = data2.items[0].snippet.title;
        var videoID = data2.items[0].snippet.resourceId.videoId;
        var videoTitle2 = data2.items[1].snippet.title;
        var videoID2 = data2.items[1].snippet.resourceId.videoId;

        $('#showSeminar').append("<h2>" + videoTitle + "</h2>")
        $('#showSeminar').append("<iframe width='854' height='480' src='https://www.youtube.com/embed/" + videoID + "' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>");

        $('#showSeminar').append("<h2 style='margin-top: 60px'>" + videoTitle2 + "</h2>")
        $('#showSeminar').append("<iframe width='854' height='480' src='https://www.youtube.com/embed/" + videoID2 + "' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>");

    })
});
