//-----------------------------------------------------------------
// Progress Bars
//-----------------------------------------------------------------

$(".progress").each(function() {
    attrProgress = $(this).attr('data-progress');
    $(this).css({ width : attrProgress }); 
});