//-----------------------------------------------------------------
// Progress Bars
//-----------------------------------------------------------------

$("progress.progress-bar").each(function() {
    var attrProgress = $(this).attr('data-progress');
    $(this).attr('value', attrProgress.replace(/[^-\d\.]/g, ''));
    $(this).find('.progress').css({ width : attrProgress }); 
});