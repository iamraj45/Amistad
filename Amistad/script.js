
function convoHide() {
    var x = document.getElementById("online-js");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var x = document.getElementById("hide");
    if (x.innerHTML === "Hide") {
        x.innerHTML = "Show";
    } else {
        x.innerHTML = "Hide";
    }
}

//dropdown//

var settingsmenu = document.querySelector(".settings-menu");

function settingsMenuToggle() {
    settingsmenu.classList.toggle("settings-menu-height");
}

//dark-mode-btn//

var darkBtn = document.getElementById("dark-btn");

darkBtn.onclick = function () {
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");

    if (localStorage.getItem("theme") == "light") {
        localStorage.setItem("theme", "dark");
    }
    else {
        localStorage.setItem("theme", "light");
    }
}

//local storage to keep website in dark/light mode//

if (localStorage.getItem("theme") == "light") {
    darkBtn.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme");
}
else if (localStorage.getItem("theme") == "dark") {
    darkBtn.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme");
}
else {
    localStorage.setItem("theme", "light");
}