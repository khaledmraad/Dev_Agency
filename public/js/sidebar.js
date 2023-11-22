$(document).ready(function() {
    const body = $("body"),
        sidebar = $(".here"),
        toggle = $(".toggle"),
        searchBtn = $(".search-box"),
        modeSwitch = $(".toggle-switch"),
        modeText = $(".mode-text");

    toggle.on("click", function() {
        sidebar.toggleClass("close");
    });

    searchBtn.on("click", function() {
        sidebar.removeClass("close");
    });

    modeSwitch.on("click", function() {
        body.toggleClass("dark");

        if (body.hasClass("dark")) {
            modeText.text("Light mode");
        } else {
            modeText.text("Dark mode");
        }
    });
});
