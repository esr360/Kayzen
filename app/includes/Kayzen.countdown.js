/**
 *
 * Kayzen.countdown
 * @author @esr360
 * @description Add class to element & remove from siblings
 *
 */

(function(e) {
    
    e.fn.countdown = function(time) {
        
        var thisEl = e(this);
        
        var options = {
            date   : null,
            format : null
        };
        
        function count() {
            
            var eventDate   = Date.parse(options.date) / 1e3;
            var currentDate = Math.floor(e.now() / 1e3);
            
            if (eventDate <= currentDate) {
                n.call(this);
                clearInterval(interval)
            }
            
            seconds  = eventDate - currentDate;
            days     = Math.floor(seconds / 86400);
            seconds -= days * 60 * 60 * 24;
            hours    = Math.floor(seconds / 3600);
            seconds -= hours * 60 * 60;
            minutes  = Math.floor(seconds / 60);
            seconds -= minutes * 60;
            
            days    == 1 ? thisEl.find(".timeRefDays").text("day") : thisEl.find(".timeRefDays").text("days");
            hours   == 1 ? thisEl.find(".timeRefHours").text("hour") : thisEl.find(".timeRefHours").text("hours");
            minutes == 1 ? thisEl.find(".timeRefMinutes").text("minute") : thisEl.find(".timeRefMinutes").text("minutes");
            seconds == 1 ? thisEl.find(".timeRefSeconds").text("second") : thisEl.find(".timeRefSeconds").text("seconds");
            
            if (options['format'] == 'on') {
                days    = String(days).length >= 2 ? days : "0" + days;
                hours   = String(hours).length >= 2 ? hours : "0" + hours;
                minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
                seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
            }
            
            if (!isNaN(eventDate)) {
                thisEl.find(".countdown_days").text(days);
                thisEl.find(".countdown_hours").text(hours);
                thisEl.find(".countdown_minutes").text(minutes);
                thisEl.find(".countdown_seconds").text(seconds)
            } else {
                console.log("Invalid date. Example: 23 September 2020 09:00:00");
                clearInterval(interval)
            }
            
        }
        
        time && e.extend(options, time);
        
        count();
        
        var interval = setInterval(count, 1e3);
        
    }
    
})(jQuery);
    
function e() {
    var e = new Date;
    e.setDate(e.getDate() + 60);
    var dd = e.getDate();
    var mm = e.getMonth() + 1;
    var y  = e.getFullYear();
    var futureFormattedDate = mm + "/" + dd + "/" + y;
    return futureFormattedDate
}

//

(function ($) {
 
    $.fn.KayzenCountdown = function(custom) {
        
        // Options
        var options = $.extend({
            
            date            : '23 September 2020 09:00:00',
            daysSelector    : '.countdown_days',
            hoursSelector   : '.countdown_hours',
            minutesSelector : '.countdown_minutes',
            secondsSelector : '.countdown_seconds'
            
        }, custom);
            
        // Run the code on each occurance of the element
        return this.each(function() {
            

            
        }); // this.each
 
    }; // KayzenCountdown()
 
}(jQuery));