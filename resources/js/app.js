require("./Utils");

if (window.location.pathname.includes("/auth/login")) {
    window.Auth = require("./Auth/login");
}
