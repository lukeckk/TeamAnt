prefColor = localStorage.getItem("color");

function onloadGroup() {
    startLighting()
    populateNavBar()
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
        "          <a class=\"nav-link\" href=\"dashboard.html\">Dashboard</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" href=\"signup.html\">Sign Up</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" href=\"contact.html\">Contact</a>\n" +
        "        </li>\n" +
        "        <li class=\"nav-item\">\n" +
        "          <a class=\"nav-link\" href=\"/index.html\"><i>Powered by Team ANT</i></a>\n" +
        "        </li>\n" +
        "      </ul>\n" +
        "      <div class=\"d-flex\">\n" +
        "        <i class=\"fa-solid fa-circle-half-stroke\" id=\"lights\" onclick=\"lightingButton()\"></i>\n" +
        "      </div>\n" +
        "    </div>\n" +
        "  </div>"
}