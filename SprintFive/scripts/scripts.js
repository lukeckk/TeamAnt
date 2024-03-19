prefColor = localStorage.getItem("color");
var isAdmin = "<?php " +
    " $_SESSION['isAdmin'];?>";
function onloadGroup(active) {
    startLighting();
    populateNavBar();
    populateFooter();
    if(active === 'loginPage') {
        loginPageObscureAll();
        console.log('active param was loginPage');
    }


    //decorateActive(active); no longer in use.
}
function AfterLoginonloadGroup(active, IsAdmin) {
    startLighting();
    populateNavBar();
    populateFooter();

    console.log(IsAdmin + " This is the isadmin code!");

// If Statement for Dashboard page
    if (active === 'navDashboard' && IsAdmin === 0)
    {
        UserPageObscureAll();
        console.log('active param was user dash');
    }
    else if (active === 'navDashboard' && IsAdmin === 1)
    {
        adminPageObscureAll();
        console.log('active param was admin dash');
    }



// If Statement for application page
    if (active === 'applicationPage' && IsAdmin === 0) {
        UserPageObscureAll();
        console.log('active param was user application');
    }
    else if (active === 'applicationPage' && IsAdmin === 1) {
        adminPageObscureAll();
        console.log('active param was admin application');
    }

// if statement for signup page
    if (active === 'SignupPage') {
        SignupPageObscureAll();
        console.log('active param was loginPage');
    }

// if statement for all receipt pages
    if (active === 'receipt' && IsAdmin === 0) {
        UserPageObscureAll();
        console.log('active param was user receipt page');
    }
    else if (active === 'receipt' && IsAdmin === 1) {
        adminPageObscureAll();
        console.log('active param was admin receipt page');
    }

// if statement for contact form
    if (active === 'contact2' && IsAdmin === 0) {
        UserPageObscureAll();
        console.log('active param was user contact page');
    }
    else if (active === 'contact' && IsAdmin === 1) {
        adminPageObscureAll();
        console.log('active param was admin contact page');
    }

    else if (active === 'nologcontact' && IsAdmin === 0) {
        loginPageObscureAll();
        console.log('active param was admin contact page');
    }





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

    document.getElementById("navbarTarget").innerHTML =  "<nav class=\"navbar navbar-expand-lg shadow-sm py-0\">\n" +
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
        "                    <a href=\"dashboard.php\" id=\"dashboardItem\" class=\"nav-link\">Dashboard <span class=\"sr-only\">(current)</span></a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"signup.php\" id=\"signupbuttonnav\" class=\"nav-link\">Sign Up</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"contact.php\" id=\"contactItem\" class=\"nav-link\">Contact</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"adminDashboard.php\" id=\"adminItem\" class=\"nav-link\">Admin</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a href=\"logout.php\" id=\"logoutItem\" class=\"nav-link\">Log Out</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a id=\"usernameTarget\" class=\"nav-link\">Guest</a>\n" +
        "                </li>\n" +
        "            </ul>\n" +
        "<div class=\"position-absolute end-0 mx-3 d-none d-lg-block\">\n" +
        "        <i class=\"fa-solid fa-circle-half-stroke\" id=\"lights\" onclick=\"lightingButton()\"></i>\n" +
        "      </div>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "    </div>\n" +
        "</nav>";

    let fullName = localStorage.getItem("fullName");
    if(fullName !== ''){
        console.log('fullName found to be not null.')
        setTimeout(function() {
            let fullName = localStorage.getItem("fullName");
            document.getElementById('usernameTarget').innerHTML = fullName;
        },10);

    }

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


// APPLICATION FORM CODE ENDS HERE

function loginPageObscureAll() {
    document.getElementById('adminItem').style.display = "none";
    document.getElementById('logoutItem').style.display = "none";
    document.getElementById('dashboardItem').style.display = "none";
    document.getElementById('usernameTarget').style.display = "none";
    document.getElementById('contactItem').style.display = "none";
}
function UserPageObscureAll() {
    document.getElementById('adminItem').style.display = "none";
    document.getElementById('signupbuttonnav').style.display = "none";
}

function SignupPageObscureAll() {

    document.getElementById('adminItem').style.display = "none";
    document.getElementById('logoutItem').style.display = "none";
    document.getElementById('dashboardItem').style.display = "none";
    document.getElementById('usernameTarget').style.display = "none";

}

function adminPageObscureAll() {
    document.getElementById('signupbuttonnav').style.display = "none";
}

