var menuButton = document.getElementById("menu-button");
if (menuButton) {
    menuButton.addEventListener("click", showMenu);
}

function showMenu() {
    var x = document.getElementById("menu-items");
    if (x.className === "menu-items") {
        x.className += " show";
        document.getElementById("menu-button").innerHTML = "CLOSE MENU";
    } else {
        x.className = "menu-items";
        document.getElementById("menu-button").innerHTML = "OPEN MENU";
    }
}