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

  var data = {};

  var thoseEmployment = firebase.database().ref('/');

  thoseEmployment.on('value', function (snapshot) {
      data = snapshot.val();
      displayToPage(data);
      //addDeletebutton(data);
  });

  function displayToPage(data) {
      console.log(data)
      $.each(data, function (index, params) {
          var id = params.id;
          var button = "";

          /*
          if (link.length > 3) {
              button = "<a style='margin: 15px' href='" + link + "' type='button' class='btn btn-default'>More Info</a>";
          }*/

          if ($("#" + id).length == 0) {
              var fName = params.fName;
              var lName = params.lName;
              var fullName = fName + " " + lName;
              var type = params.type;
              var scholarShipsociety = params.scholarShipsociety;
              var biography = params.biography;
              var office = params.office;
              var phone = params.phone;
              var email = params.email;
              var position = params.position;
              var specialy = params.specialy;

              var personalWebsite = params.personalWebsite;
              var profileLink = params.profileLink;
              var filePath = params.filePath;
              var condensedVitae = params.condensedVitae;
              var classWebsite = params.classWebsite;
              var imagePath = params.imagePath;
              var linkToFullPage = "#";


              $("#fullTime").append("<div class=' facultyWrapper' id='" + id + "'><div class='col-sm-3 facultyImage'><a class='profile-link' href='" + linkToFullPage + "'><img src='" + imagePath + "'></a></div><div class='col-sm-3 facultyInfo'><a href='" + linkToFullPage + "'><h2>" + fullName + "</h2></a><i>" + position + "</i><div class='contactWrapper'><p><strong>Office: </strong>" + office + "</p><p><strong>Phone: </strong> " + phone + "</p><p><strong>Email: </strong>" + email + "</p></div></div><div class='col-sm-6 facultyrNb'><h3 style='margin-top: 5px;'>Research</h3><p>" + specialy + "</p><h3> Biography </h3> <p>" + biography + "</p> </div></div>")


              //$("#employment").append("<div class='panel panel-default'><div id='panel" + id + "' class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse' data-parent='#accordion' href='#" + id + "'>" + position + " (" + type + ") " + " - " + employer + "</a></h4></div><div id='" + id + "' class='panel-collapse collapse'><div class='panel-body'>" + description + "</div>" + button + "</div>")

          }
      });
  }

  window.setTimeout(function () {
      pagination();
  }, 500);
  window.setTimeout(function () {
      pagination();
  }, 1500);

  function pagination() {
      var id = window.location.pathname;
      var activeTab = id.substr(id.lastIndexOf('/') + 1);
      var buildID = "#" + activeTab + "Tab";
      console.log(buildID)
      $(buildID).addClass('active')
  }
