var Kayzen = Kayzen || {};

/**
 * Logging component
 */

Kayzen.logger = (function(document, $, undefined) {

    "use strict";

    var console = window.console;
    var exports = {};
    var levels = {
        ERROR: 1,
        WARN: 2,
        INFO: 3,
        DEBUG: 4,
        VERBOSE: 5
    };
    var logLevel;
    var key = "Kayzen.debug";

    if (!console) {
        console = {};
    }

    var methods = ["log", "warn", "error", "group", "groupEnd"];

    for (var i = 0; i < methods.length; i++) {
        if (typeof console[methods[i]] !== "function") {
            console[methods[i]] = $.noop;
        }
    }

    function proxy(method, level) {
        exports[method] = function() {
            if (!level || logLevel >= level) {
                console[method].apply(console, arguments);
            }
            return exports;
        };
    }

    function make(method, level) {
        exports[method] = function(text, source) {
            if (logLevel < level) {
                return;
            }
            if (source) {
                return exports.log("%cKayzen.%s %c %s", "color:green", source, "color:dark-grey", text);
            }
            return exports.log(text);
        };
    }

    make("debug", levels.DEBUG);
    make("verbose", levels.VERBOSE);
    proxy("log", levels.INFO);
    proxy("warn", levels.WARN);
    proxy("error", levels.ERROR);
    proxy("group");
    proxy("groupEnd");

    exports.setLevel = function(level) {
        logLevel = levels[level];
        try {
            window.localStorage.setItem(key, level);
        } catch (e) {}
    };

    exports.getLevel = function() {
        return logLevel;
    };

    try {
        logLevel = +window.localStorage.getItem(key) || levels.DEBUG;
    } catch (e) {
        logLevel = levels.DEBUG;
    }

  return exports;

}(document, window.jQuery));