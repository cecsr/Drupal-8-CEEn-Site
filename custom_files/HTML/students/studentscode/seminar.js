setTimeout(function () {
    $('#hideSeminar').fadeOut();
}, 6500);

//YouTube API Key
var key = "AIzaSyDR50mVI2H-7Ca5sr_j-xQpXoNzX8drbjE";

//YouTube Channel Call URL
var ytUrl = "https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=byuceenweb&key=" + key;

$.getJSON(ytUrl, function (data) {
    //get id for channels uploaded videos
    var uploadID = data.items[0].contentDetails.relatedPlaylists.uploads;
    //youtube channel uploaded videos
    var uploadIDString = "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=" + uploadID + "&key=" + key + "&part=snippet&maxResults=2"

    $.getJSON(uploadIDString, function (channelData) {
        console.log(channelData);
        var videoTitle = channelData.items[0].snippet.title;
        var videoID = channelData.items[0].snippet.resourceId.videoId;
        var videoTitle2 = channelData.items[1].snippet.title;
        var videoID2 = channelData.items[1].snippet.resourceId.videoId;

        $('#showSeminar').append("<h2>" + videoTitle + "</h2>")
        $('#showSeminar').append("<iframe width='854' height='480' src='https://www.youtube.com/embed/" + videoID + "' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>");

        $('#showSeminar').append("<h2 style='margin-top: 60px'>" + videoTitle2 + "</h2>")
        $('#showSeminar').append("<iframe width='854' height='480' src='https://www.youtube.com/embed/" + videoID2 + "' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>");

        $('#showSeminar').append("<h3 style='padding-top: 50px'><a href='https://www.youtube.com/user/byuceenweb/featured'>Click here to view all seminars</a></h3>");
    })
});
