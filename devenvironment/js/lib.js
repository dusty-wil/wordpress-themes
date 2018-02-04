jQuery('.widget-title').click(function() {    
    var sib = jQuery(this).next();
    sib.toggle();
    if (sib.is(":visible")) { 
        jQuery(this).find(".widget-expanded").html("-");
    } else { 
        jQuery(this).find(".widget-expanded").html("+");
    }
});
