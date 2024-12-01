const projectSpans = document.querySelector("#main-div");
const aboutMeDiv    = document.querySelector("#main-div");

// projects 
document.querySelectorAll(".nav-li-projects").forEach(label => {
    label.addEventListener('click', () => {
        projectSpans.innerHTML = '<span class="project-span"><a href="./buildasurveyform/index.html" target="_blank"><img src="./images/buildasurveyform.png" alt="build a survey form" id="project-img"></a></span>'
        + '<span class="project-span"><a href="./cafeMenu/index.html" target="_blank"><img src="./images/cafemenu.png" alt="cafe menu" id="project-img"></a></span>'
        + '<span class="project-span"><a href="./LearnHTMLFormsbyBuildingaRegistrationForm" target="_blank"><img src="./images/registrationform.png" alt="registration form" id="project-img"></a></span>'
        + '<span class="project-span"><a href="./buildingRolePlayingGame/index.html" target="_blank"><img src="./images/roleplayinggame.png" alt="role playing game" id="project-img"></a></span>'
        + '<span class="project-span"><a href="./streak/index.html" target="_blank"><img src="./images/streak.png" alt="programming streak" id="project-img"></a></span>'
        + '<span class="project-span"><a href="./tributePage/index.html" target="_blank"><img src="./images/tributepage.png" alt="tribute page" id="project-img"></a></span>';
    });
}); 
document.querySelectorAll("#nav-li-about-me").forEach(label => {
    label.addEventListener('click', () => {
        aboutMeDiv.innerHTML = "<div class=\"main-about\"><p id=\"aboutme\">Hello, I'm Stefaan Walleghem, a passionate learner."
        + "<br />I live in Belgium."
        + "<br />I'm an ex network administrator and pc-technician."
        + "<br />My native language is Dutch, but I also speak French, English and a bit of German.</p>"
        + "<p>I am currently a volunteer in the non-profit digibanken where I help people use a computer, tablet or portable phone to do administrative tasks or solve software problems the people cannot resolve themselves.</p>"
        + "<p>I'm 52 years old, married to a lovely lady and stepfather of 4."
        + "<br />The kids are out of the house and I have the tendency to get bored easily."
        + "<br />So, I started learning to program.</p>"
        + "<span>currently I'm learning the following \"languages\":</span>"
        + "<ul id=\"language-ul\">"
        + "<li>HTML (not really a programming language)</li>"
        + "<li>CSS (not really a programming language)</li>"
        + "<li>Javascript</li>"
        + "<li>PHP</li>"
        + "<li>MySQL (relational database management system)</li>"
        + "</ul>"
        + "<span>Books I'm currently reading:</span>"
        + "<ul id=\"books-ul\">"
        + "<li><img src=\"./images/learningphpmysqljavascriptoreilly.jpg\" alt=\"learning php mysql javascript o reilly\" id=\"book-img\" ></li>"
        + "<li><a href=\"https://eloquentjavascript.net/\"><img src=\"./images/eloquentjavascript.jpg\" alt=\" surveyform\" id=\"book-img\" ></a></li>"
        + "</ul></div> "
    })
})





