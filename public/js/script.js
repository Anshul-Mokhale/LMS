const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
    const li = item.parentElement;

    item.addEventListener("click", function () {
        allSideMenu.forEach((i) => {
            i.parentElement.classList.remove("active");
        });
        li.classList.add("active");
    });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
    "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
    "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
    if (window.innerWidth < 576) {
        e.preventDefault();
        searchForm.classList.toggle("show");
        if (searchForm.classList.contains("show")) {
            searchButtonIcon.classList.replace("bx-search", "bx-x");
        } else {
            searchButtonIcon.classList.replace("bx-x", "bx-search");
        }
    }
});

// if (window.innerWidth < 768) {
//     sidebar.classList.add("hide");
// } else if (window.innerWidth > 576) {
//     searchButtonIcon.classList.replace("bx-x", "bx-search");
//     searchForm.classList.remove("show");
// }

// window.addEventListener("resize", function () {
//     if (this.innerWidth > 576) {
//         searchButtonIcon.classList.replace("bx-x", "bx-search");
//         searchForm.classList.remove("show");
//     }
// });

// const switchMode = document.getElementById("switch-mode");
// switchMode.addEventListener("change", function () {
//     if (this.checked) {
//         document.body.classList.add("dark");
//     } else {
//         document.body.classList.remove("dark");
//     }
// });

const switchMode = document.getElementById("switch-mode");

// Function to save the switch state in a cookie
function saveSwitchStateToCookie(state) {
    // Save the state in localStorage
    localStorage.setItem("switchState", state);
}

// Function to load switch state from cookie and apply dark mode if necessary
function loadSwitchStateFromCookie() {
    const switchState = localStorage.getItem("switchState");
    if (switchState === "dark") {
        document.body.classList.add("dark");
        switchMode.checked = true;
    } else {
        document.body.classList.remove("dark");
        switchMode.checked = false;
    }
}

// Add event listener for switch change
switchMode.addEventListener("change", function () {
    if (this.checked) {
        document.body.classList.add("dark");
        saveSwitchStateToCookie("dark");
    } else {
        document.body.classList.remove("dark");
        saveSwitchStateToCookie("light");
    }
});

// Call the function on page load
loadSwitchStateFromCookie();

