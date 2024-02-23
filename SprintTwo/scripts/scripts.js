prefColor = localStorage.getItem("color");

function onloadGroup(active) {
    startLighting();
    populateNavBar();
    populateFooter();
    decorateActive(active);
}
function startLighting(){
    console.log("startLighting");
    if(prefColor == null) {
        localStorage.setItem("color","light");
    } else {
        lightingRequest(localStorage.getItem("color"));
    }
}

function lightingButton(){
    console.log("lightingButton");
    let lastColor = localStorage.getItem("color");
    if(lastColor === "light"){
        localStorage.setItem("color","dark");
        lightingRequest("dark");

    } else {
        localStorage.setItem("color","light");
        lightingRequest("light");
    }
}

function lightingRequest(color){
    console.log("lightingRequest");
    let page = document.getElementById("htmlTag");
    page.setAttribute("data-bs-theme", color);
    switch (color) {
        case "light":
            document.getElementById("footerTarget").style.color = "#000";
            break;
        case "dark":
            document.getElementById("footerTarget").style.color = "#FFFFFF";
            break;
    }
}

function populateNavBar() {
    document.getElementById("navbarTarget").innerHTML = "<div class=\"container-fluid\">\n" +
        "    <a class=\"navbar-brand\" href=\"dashboard.html\"><i>Gator</i>ATT</a>\n" +
        "    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\">\n" +
        "      <span class=\"navbar-toggler-icon\"></span>\n" +
        "    </button>\n" +
        "    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n" +
        "      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" id=\"navDashboard\" href=\"dashboard.html\">Dashboard</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" id=\"navSignup\" href=\"signup.html\">Sign Up</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" id=\"navContact\" href=\"contact.html\">Contact</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" id=\"navAdmin\" href=\"adminDashboard.html\">Admin</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" href=\"../../index.html\"><i>Powered by Team ANT</i></a>\n" +
        "        </li>\n" +
        "      </ul>\n" +
        "      <div class=\"d-flex\">\n" +
        "        <i class=\"fa-solid fa-circle-half-stroke\" id=\"lights\" onclick=\"lightingButton()\"></i>\n" +
        "      </div>\n" +
        "    </div>\n" +
        "  </div>"
}

function populateFooter() {
    document.getElementById("footerTarget").className = "container-fluid text-center fixed-bottom mt-5";
    document.getElementById("footerTarget").innerHTML = "<div class=\"row\" style=\"border: 10px black\">\n" +
        "        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">\n" +
        "            <h3>Resources</h3>\n" +
        "            <a href=\"https://www.facebook.com/GreenRiverCollege/\" class=\"fa fa-facebook\"></a>\n" +
        "            <a href=\"https://www.linkedin.com/school/green-river-community-college/\" class=\"fa fa-linkedin\"></a>\n" +
        "            <a href=\"https://slack.com/community\" class=\"fa fa-slack\"></a>\n" +
        "            <a href=\"https://github.com/greenrivercollege\" class=\"fa fa-git\"></a>\n" +
        "            <a href=\"https://www.devs.greenrivertech.net/\" class=\"fa fa-external-link-square\"></a>\n" +
        "        </div>\n" +
        "        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">\n" +
        "            <h3>School of Technology</h3>\n" +
        "            <p>Affordable tuition, instructors who care, access to tech industry mentors, and project-based learning\n" +
        "                make our applied bachelor’s program a popular destination for computing majors throughout the\n" +
        "                Seattle-Tacoma region.\n" +
        "            </p>\n" +
        "        </div>\n" +
        "    </div>"
}

function decorateActive(active) {
    if(active == null) {
        console.log('found null active');
        return;
    }
    document.getElementById(active).style.textDecoration = "underline";
    console.log("attempted to decorate " + active);
}


// APPLICATION FORM CODE STARTS HERE

document.getElementById("dateInput").valueAsDate = new Date();
  
document.getElementById("followUpInput").valueAsDate = new Date( Date.now() + (6.048e+8 * 2));


// APPLICATION FORM ODE ENDS HERE