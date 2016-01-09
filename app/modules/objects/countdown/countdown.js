/**
 *
 * countdown.js
 * @author: @esr360, @mrwigster
 * @description: Countdown to a specific date and time
 *
 */

(function (e) {
 
    $.fn.countdown = function(custom) {
        
        // Options
        var options = $.extend({
            
            date            : '23 September 2020 09:00:00',
            format          : null,
            daysSelector    : '.countdown_days',
            hoursSelector   : '.countdown_hours',
            minutesSelector : '.countdown_minutes',
            secondsSelector : '.countdown_seconds'
            
        }, custom);
            
        // Run the code on each occurance of the element
        return this.each(function() {
            
            var thisEl = $(this);
            
            function count() {
                
                var eventDate   = Date.parse(options.date) / 1e3;
                var currentDate = Math.floor(e.now() / 1e3);
                
                var daysID  = options.daysSelector;
                var hoursID = options.hoursSelector;
                var minsID  = options.minutesSelector;
                var secsID  = options.secondsSelector;
                
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
                
                //
                // Change units to singular if value is "1"
                // eg. "1 second" instead of "1 seconds"
                //
                    
                if (days == 1) {
                   thisEl.find(daysID).attr('data-timeUnit', 'day') 
                } else {
                    thisEl.find(daysID).attr('data-timeUnit', 'days');
                } 
                  
                if (hours == 1) {
                   thisEl.find(hoursID).attr('data-timeUnit', 'hour') 
                } else {
                    thisEl.find(hoursID).attr('data-timeUnit', 'hours');
                } 
                  
                if (minutes == 1) {
                   thisEl.find(minsID).attr('data-timeUnit', 'minute') 
                } else {
                    thisEl.find(minsID).attr('data-timeUnit', 'minutes');
                } 
                   
                if (seconds == 1) {
                   thisEl.find(secsID).attr('data-timeUnit', 'second') 
                } else {
                    thisEl.find(secsID).attr('data-timeUnit', 'seconds');
                }
                
                //
                // place 0 before value if less than "10"
                // eg. "03" instead of "3"
                //
                
                if (options['format'] == 'on') {
                    if (String(days).length >= 2) {
                        days = days;
                    } else {
                        days = "0" + days;
                    }
                    if (String(hours).length >= 2) {
                        hours = hours;
                    } else {
                        hours = "0" + hours;
                    }
                    if (String(minutes).length >= 2) {
                        minutes = minutes;
                    } else {
                        minutes = "0" + minutes;
                    }
                    if (String(seconds).length >= 2) {
                        seconds = seconds;
                    } else {
                        seconds = "0" + seconds;
                    }
                }
                
                if (!isNaN(eventDate)) {
                    thisEl.find(daysID).text(days);
                    thisEl.find(hoursID).text(hours);
                    thisEl.find(minsID).text(minutes);
                    thisEl.find(secsID).text(seconds)
                } else {
                    console.log("Invalid date. Example: 23 September 2020 09:00:00");
                    clearInterval(interval)
                }
                
            }
            
            custom && e.extend(options, custom);
            
            count();
            
            var interval = setInterval(count, 1e3);
            
        }); // this.each
 
    }; // KayzenCountdown()
 
}(jQuery));
    
function e() {
    var e = new Date;
    e.setDate(e.getDate() + 60);
    var dd = e.getDate();
    var mm = e.getMonth() + 1;
    var y  = e.getFullYear();
    var futureFormattedDate = mm + "/" + dd + "/" + y;
    return futureFormattedDate
}