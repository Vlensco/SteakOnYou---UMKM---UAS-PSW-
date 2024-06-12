const { forEach } = require("lodash");

const activepage = window.location.pathname;
const navlinks = document.querySelectorAll("nav a");
forEach((link) => {
    if (link.href.includes(activepage)) {
        console.log(`${activepage} is active`);
        link.classList.add("active");
    }
});
