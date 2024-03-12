prefColor = localStorage.getItem("color");

function onloadGroup(active) {
    startLighting();
    populateNavBar();
    populateFooter();
    //decorateActive(active); no longer in use.
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

    document.getElementById("navbarTarget").innerHTML = "<nav class=\"navbar navbar-expand-lg shadow-sm py-0\">\n" +
        "    <div class=\" main_container container-fluid p-0\">\n" +
        "        <a href=\"../../index.html\" class=\"navbar-brand\">\n" +
        "            <!-- Logo Image -->\n" +
        "            <img src=\"../../Images/team-ant-logo-white.png\" alt=\"team ant logo\" class=\"d-inline-block align-middle mr-2\">\n" +
        "        </a>\n" +
        "\n" +
        "        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n" +
        "            <span class=\"navbar-toggler-icon\" ></span>\n" +
        "        </button>\n" +
        "\n" +
        "\n" +
        "        <div id=\"navbarSupportedContent\" class=\"collapse navbar-collapse\">\n" +
        "            <ul class=\"navbar-nav ml-auto\">\n" +
        "                <li class=\"nav-item active\">\n" +
        "                    <a href=\"dashboard.php\" class=\"nav-link\">Dashboard <span class=\"sr-only\">(current)</span></a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"signup.html\" class=\"nav-link\">Sign Up</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"contact.html\" class=\"nav-link\">Contact</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"adminDashboard.php\" class=\"nav-link\">Admin</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"logout.php\" class=\"nav-link\">Log Out</a>\n" +
        "                </li>\n" +

        "            </ul>\n" +
        "<div class=\"d-flex\">\n" +
                "        <i class=\"fa-solid fa-circle-half-stroke\" id=\"lights\" onclick=\"lightingButton()\"></i>\n" +
                "      </div>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "    </div>\n" +
        "</nav>";

}

function populateFooter() {

    document.getElementById("footerTarget").innerHTML = "<footer id=\"footerid\" class=\"container-fluid text-center fixed-bottom\">\n" +
        "    <div>\n" +
        "        <div class=\"row\">\n" +
        "            <div class=\"col-xl-6 col-lg-6 col-sm-12 \">\n" +
        "                <h3>Resources</h3>\n" +
        "                <a href=\"https://www.facebook.com/GreenRiverCollege\" class=\"fa fa-facebook\"></a>\n" +
        "                <a href=\"https://www.linkedin.com/school/green-river-community-college\" class=\"fa fa-linkedin\"></a>\n" +
        "                <a href=\"https://slack.com/community\" class=\"fa fa-slack\"></a>\n" +
        "                <a href=\"https://github.com/greenrivercollege\" class=\"fa fa-git\"></a>\n" +
        "                <a href=\"https://www.devs.greenrivertech.net\" class=\"fa fa-external-link-square\"></a>\n" +
        "            </div>\n" +
        "            <div class=\"col-xl-6 col-lg-6 col-sm-12 \">\n" +
        "                <h3>School of Technology</h3>\n" +
        "                <p>Affordable tuition, instructors who care, access to tech industry mentors, and project-based learning\n" +
        "                make our applied bachelor’s program a popular destination for computing majors throughout the\n" +
        "                 Seattle-Tacoma region.\n" +
        "                </p>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "</footer>";
    document.getElementById("footerTarget").className = "";

}

function decorateActive(active) {
    if(active == null) {
        console.log('found null active');
        return;
    }
    //document.getElementById(active).style.textDecoration = "underline";
    console.log("attempted to decorate " + active);
}


// APPLICATION FORM CODE STARTS HERE

document.getElementById("dateInput").valueAsDate = new Date();

document.getElementById("followUpInput").valueAsDate = new Date( Date.now() + (6.048e+8 * 2));


// APPLICATION FORM ODE ENDS HERE

