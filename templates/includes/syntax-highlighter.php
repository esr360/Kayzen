<!-- Syntax Highlighter -->
<?php devAsset('', 'EnlighterJS.css') ?>
<?php devAsset('', 'mootools-core.js') ?>
<?php devAsset('', 'EnlighterJS.js') ?>

<script type="text/javascript">
    /* <![CDATA[ */
    window.addEvent('domready', function() {
        if (typeof EnlighterJS == "undefined") {
            return;
        };
        EnlighterJS.Util.Init('pre.EnlighterJSRAW', 'code.EnlighterJSRAW', {
            "language":"css",
            "theme":"enlighter",
            "indent":4,
            "hover":"hoverEnabled",
            "showLinenumbers":true,
            "rawButton":true,
            "infoButton":true,
            "windowButton":true,
            "rawcodeDoubleclick":false,
            "grouping":true
        });
    });
    /* ]]> */
</script>

<style>
	ol.EnlighterJS, ul.EnlighterJS {
		margin: 0;
	}
</style>  