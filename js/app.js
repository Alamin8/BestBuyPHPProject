// clock
function updateClock() {
  var now = new Date();
  var day = now.getDay(),
    month = now.getMonth() + 1,
    year = now.getFullYear(),
    hour = now.getHours(),
    minutes = now.getMinutes(),
    pe = "AM";

  if (hour == 0) {
    houe = 12;
  }
  if (hour > 12) {
    hour = hour - 12;
    pe = "PM";
  }
  Number.prototype.pad = function (digits) {
    for (var n = this.toString(); n.length < digits; n = 0 + n);
    return n;
  };
  document.getElementById("curr_date").innerHTML = `${day.pad(2)}/${month.pad(
    2
  )}/${year.pad(4)}`;
  document.getElementById("curr_time").innerHTML = `${hour.pad(
    2
  )}:${minutes.pad(2)} ${pe}`;
}
function initClock() {
  updateClock();
  window.setInterval("updateClock()", 1);
}

//  Handle Registration
function userRegister() {
  var user_name = jQuery("#registerUserName").val();
  var email = jQuery("#registerEmail").val();
  var mobile = jQuery("#registerPhone").val();
  var showroom_code = jQuery("#registerShowroomCode").val();
  var party_code = jQuery("#registerPartyCode").val();
  var password = jQuery("#registerPassword").val();

  if (user_name == "") {
    alert("Please enter your user name");
    jQuery("#registerUserName").css("border", "2px solid tomato");
  } else if (email == "") {
    alert("Please enter your email");
    jQuery("#registerEmail").css("border", "2px solid tomato");
  } else if (mobile == "") {
    alert("Please enter your mobile");
    jQuery("#registerPhone").css("border", "2px solid tomato");
  } else if (showroom_code == "") {
    alert("Please enter your showroom code");
    jQuery("#registerShowroomCode").css("border", "2px solid tomato");
  } else if (party_code == "") {
    alert("Please enter your party code");
    jQuery("#registerPartyCode").css("border", "2px solid tomato");
  } else if (password == "") {
    alert("Please enter your password");
    jQuery("#registerPassword").css("border", "2px solid tomato");
  } else {
    jQuery.ajax({
      url: "user_register.php",
      type: "post",
      data:
        "user_name=" +
        user_name +
        "&email=" +
        email +
        "&mobile=" +
        mobile +
        "&showroom_code=" +
        showroom_code +
        "&party_code=" +
        party_code +
        "&password=" +
        password,
      success: function (result) {
        if (result == "email_present") {
          alert("Email Already exists, Try again with another email");
        }
        if (result == "insert") {
          alert("Thanks for your registration");
          window.location.href='index.php'
        }
      },
    });
  }
}

//  Handle login
function userlogin() {
  var showroom_code = jQuery("#login_party_code").val();
  var password = jQuery("#login_password").val();
  if (showroom_code == "") {
    alert("Please enter your showroom code");
    jQuery("#registerShowroomCode").css("border", "2px solid tomato");
  } else if (password == "") {
    alert("Please enter your password");
    jQuery("#registerPassword").css("border", "2px solid tomato");
  } else {
    jQuery.ajax({
      url: "user_login.php",
      type: "post",
      data: "showroom_code=" + showroom_code + "&password=" + password,
      success: function (result) {
        if (result == "wrong") {
          jQuery("#loginAlart")
            .show()
            .css("background", "tomato")
            .html("Invalid Party code or password ");
        }
        if (result == "valid") {
          window.location.href = "dashboard.php";
        }
      },
    });
  }
}
// handle TI
 function handleTI(){
  
 }

// handle tab
function openTab(evt, tabName) {
  var i, tabcontent;
  tabcontent = document.getElementsByClassName("tab_content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
document.getElementById("defaultOpen").click();
