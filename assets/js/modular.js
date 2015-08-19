/*-----------------------------------------------------------------

Modular - JS Extension
Made by @esr360
http://github.com/esr360/Modular/
	
-----------------------------------------------------------------*/

//-----------------------------------------------------------------
// Convert CSS config to JS
//-----------------------------------------------------------------

// Get styles' configuration
var stylesConfigJSON = document.getElementById("stylesConfigJSON");

// Remove quotes from computed JSON
function removeQuotes(json) {
    json = json.replace(/^['"]+|\s+|\\|(;\s?})+|['"]$/g, '');
    return json;
}

// Convert computed JSON to camelCase
function camelCase(json) {
	json = json.replace(/-([a-z])/g, function (g) { 
		return g[1].toUpperCase(); 
	});
	return json;
}

// Convert the config to JS
function getStylesConfig(camelCase) {
    var style = null;
    style = window.getComputedStyle(stylesConfigJSON, '::before');
    style = style.content;
	style = removeQuotes(style);
	if(camelCase) {
		style = camelCase(style);
	}
    return JSON.parse(style);
}

// Store configuartion data in a variable
var module = getStylesConfig(camelCase);

// Store the raw data in a variable (no camelCase)
var moduleRaw = getStylesConfig();

// Create a global variable to select each main component in the DOM
var componentIndex = 0;
$.each(module, function(component) {
	var componentRaw = moduleRaw[Object.keys(moduleRaw)[componentIndex]]['name'];
	window[component] = '.' + componentRaw + ', [class*="' + componentRaw + '-"]';
	componentIndex++;
});

//-----------------------------------------------------------------
// Functions
//-----------------------------------------------------------------

//	1. setting()
//	2. breakpoint()

//-----------------------------------------------------------------

// 1. Setting
//-----------------------------------------------------------------

//	Usage
//
//	if(setting(navigation, 'sticky')) {
//		...
//	}

function setting(component, setting) {
	return $(component).is('[class*="-' + setting + '"]') == true || module.component[setting]['default'] == true;
}

// 2. Breakpoint
//-----------------------------------------------------------------

//	Usage
//
//	if(breakpoint('min-width', 'break-3')) {
//		...
//	}

function breakpoint(media, value) {
	return window.matchMedia('(' + media + ':' + module['grid']['breakpoints'][value] + ')').matches;
}