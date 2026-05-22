import "./bootstrap";

import "bootstrap/dist/css/bootstrap.min.css";
import "mdb-ui-kit/css/mdb.min.css";

import "../css/navbar.css";
import "@fortawesome/fontawesome-free/css/all.min.css";
// MDB
import "mdb-ui-kit";
import { Dropdown, Collapse, initMDB } from "mdb-ui-kit";

document.addEventListener("DOMContentLoaded", function () {
    initMDB({ Dropdown, Collapse });
});

// AOS
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init({
    duration: 1000,
    once: false,
});
