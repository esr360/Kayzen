var Kayzen = Kayzen || {};

/**
 *
 * Kayzen.eventEmitter
 * @description: A JavaScript event emitter
 *
 */

Kayzen.eventEmitter = (function(document, $, undefined) {

    var handlerId = 0;

    var exports = {
        
        listeners: {},

        on: function(event, handler) {
            
            if (!exports.listeners[event]) {
                exports.listeners[event] = [];
            }

            exports.listeners[event].push({
                fn: handler,
                id: ++handlerId
            });

            Kayzen.logger.verbose("listening for '" + event + "' (ID " + handlerId + ")", "eventEmitter");

            return handlerId;
            
        },

        once: function(event, handler) {
            var id = exports.on(event, function() {
                handler.apply(exports, arguments);
                exports.off(event, id);
            });
        },

        off: function(event, id) {

            Kayzen.logger.debug("removing listener for '" + event + "' (ID " + id + ")", "eventEmitter");

            for (var i = 0, j = exports.listeners[event].length; i < j; i++) {
                var target = exports.listeners[event][i];
                if (target.id === id) {
                    exports.listeners[event].splice(i, 1);
                    return;
                }
            }

        },

        emit: function(event, args) {
            
            Kayzen.logger.debug("emitting '" + event + "'", "eventEmitter");

            if (!exports.listeners[event]) {
                return;
            }

            for (var i = 0, j = exports.listeners[event].length; i < j; i++) {

            var handler = exports.listeners[event][i];
                if (handler) {
                    handler.fn.apply(exports, args || []);
                }
            }
        
        }
    
    };

    return exports;

}(document, window.jQuery));