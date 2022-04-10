
window.onload = function () {
    //BEGIN:Declaring variables
    let sidebarContainer = document.getElementById("sidebar-container");
    let mainContainer = document.getElementById("main-container");
    let menuToggle = document.getElementById("menu-toggle");
    //END:Declaring variables

    //BEGIN:Checking if sidenav is open by default
    if (sidebarContainer.classList[0] == "active")
        mainContainer.style.marginLeft = "250px";
    else
        mainContainer.style.marginLeft = "70px";
    //END:Checking if sidenav is open by default

    //Toggle sidenav using button
    menuToggle.addEventListener("click", function (e) {
        sidebarContainer.classList.toggle("active");
        if(window.innerWidth >756)
        mainContainer.style.marginLeft = "250px";
    });

    //Open sidenav on hover
    sidebarContainer.addEventListener("mouseenter", function () {
        sidebarContainer.classList.add("active");
        if(window.innerWidth >756)
        mainContainer.style.marginLeft = "250px";
    });

    //Close sidenav when not:hover
    sidebarContainer.addEventListener("mouseleave", function () {
        mainContainer.style.marginLeft = "70px";
        sidebarContainer.classList.remove("active");
    });
}
