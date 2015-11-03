$(document).ready(function() {

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
            
        // Fetch the map colors from the CSS
        var _mapColor = _module['google-map']['colors']
        var mapColors = {
            'water'          : _mapColor['water'],
            'landscape'      : _mapColor['landscape'],
            'road'           : _mapColor['road'],
            'poi'            : _mapColor['poi'],
            'transit'        : _mapColor['transit'],
            'stroke'         : _mapColor['stroke'],
            'administrative' : _mapColor['administrative'],
            'park'           : _mapColor['park']
        };
        
        console.log(mapColors['water']);
            
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,

            // Disable scroll-wheel zoom
            scrollwheel: false,

            draggable: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(53.48076, -2.24263), 

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            
            styles: [
                {
                    "featureType" : "water", 
                    "elementType" : "geometry",
                    "stylers" : [{
                        "color" : mapColors['water']
                    }]
                },
                {
                    "featureType" : "landscape",
                    "elementType" : "geometry",
                    "stylers" : [{
                        "color" : mapColors['landscape']
                    }]
                },
                {
                    "featureType" : "road",
                    "elementType" : "geometry",
                    "stylers" : [
                        {
                            "color" : mapColors['road']
                        },
                        {
                            "lightness" : -37
                        }
                    ]
                },
                {
                    "featureType" : "poi",
                    "elementType" : "geometry",
                    "stylers" : [{
                        "color" : mapColors['poi']
                    }]
                },
                {
                    "featureType" : "transit",
                    "elementType" : "geometry",
                    "stylers" : [{
                        "color" : mapColors['transit']
                    }]
                },
                {
                    "elementType" : "labels.text.stroke",
                    "stylers" : [
                        {
                            "visibility" : "on"
                        },
                        {
                            "color" : mapColors['stroke']
                        },
                        {
                            "weight" : 2
                        },
                        {
                            "gamma" : 0.84
                        }
                    ]
                },
                {
                    "elementType" : "labels.text.fill",
                    "stylers" : [{
                        "color" : "#ffffff"
                    }]
                },
                {
                    "featureType" : "administrative",
                    "elementType" : "geometry",
                    "stylers" : [
                        {
                            "weight" : 0.6
                        },
                        {
                            "color" : mapColors['administrative']
                        }
                    ]
                },
                {
                    "elementType" : "labels.icon",
                    "stylers" : [{
                        "visibility" : "off"
                    }]
                },
                {
                    "featureType" : "poi.park",
                    "elementType" : "geometry",
                    "stylers" : [{
                        "color" : mapColors['park']
                    }]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        
    }

}); // document.ready