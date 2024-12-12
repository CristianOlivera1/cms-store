(function() {
    "use strict";
    var attributes, storedAttributes;

    if (sessionStorage.getItem("defaultAttribute")) {
        attributes = document.documentElement.attributes;
        storedAttributes = {};

        Object.entries(attributes).forEach(function(attribute) {
            var name;
            if (attribute[1] && attribute[1].nodeName && attribute[1].nodeName !== "undefined") {
                name = attribute[1].nodeName;
                storedAttributes[name] = attribute[1].nodeValue;
            }
        });

        if (sessionStorage.getItem("defaultAttribute") !== JSON.stringify(storedAttributes)) {
            sessionStorage.clear();
            window.location.reload();
        } else {
            var settings = {};
            settings["data-layout"] = sessionStorage.getItem("data-layout");
            settings["data-sidebar-size"] = sessionStorage.getItem("data-sidebar-size");
            settings["data-layout-mode"] = sessionStorage.getItem("data-layout-mode");
            settings["data-layout-width"] = sessionStorage.getItem("data-layout-width");
            settings["data-sidebar"] = sessionStorage.getItem("data-sidebar");
            settings["data-sidebar-image"] = sessionStorage.getItem("data-sidebar-image");
            settings["data-layout-direction"] = sessionStorage.getItem("data-layout-direction");
            settings["data-layout-position"] = sessionStorage.getItem("data-layout-position");
            settings["data-layout-style"] = sessionStorage.getItem("data-layout-style");
            settings["data-topbar"] = sessionStorage.getItem("data-topbar");

            Object.keys(settings).forEach(function(key) {
                if (settings[key]) {
                    document.documentElement.setAttribute(key, settings[key]);
                }
            });
        }
    }
})();