<!-- Syntax Highlighter -->

<?php if (env == 'dev') { ?>
    <link rel="stylesheet" href="<?php echo appDir ?>/styles/EnlighterJS.css">
    <script src="<?php echo appDir ?>/scripts/mootools-core.js"></script>    
    <script src="<?php echo appDir ?>/scripts/EnlighterJS.js"></script>
<?php } else if (env == 'prod') { ?>
    <link rel="stylesheet" href="<?php echo appDir ?>/styles/EnlighterJS.min.css">
    <script src="<?php echo appDir ?>/scripts/mootools-core.min.js"></script>    
    <script src="<?php echo appDir ?>/scripts/EnlighterJS.min.js"></script>
<?php } ?>

<script type="text/javascript">
/* <![CDATA[ */window.addEvent('domready', function(){if (typeof EnlighterJS == "undefined"){return;};EnlighterJS.Util.Init('pre.EnlighterJSRAW', 'code.EnlighterJSRAW', {"language":"html","theme":"enlighter","indent":4,"hover":"hoverEnabled","showLinenumbers":true,"rawButton":true,"infoButton":true,"windowButton":true,"rawcodeDoubleclick":false,"grouping":true});});/* ]]> */
</script>
          
<script>
    EnlighterJS.Util.Init('pre', 'code.value', {
        language: 'css'
    });
</script>

<style>
	ol.EnlighterJS, 
	ul.EnlighterJS {
		margin: 0;
	}
</style>  