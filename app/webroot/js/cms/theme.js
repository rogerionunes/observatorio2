$(function () {

	// hideAlert
    hideAlert: setTimeout(function() {
        if($(".alert-hide")[0]) {
            $(".alert-hide").slideUp('fast');
        }
    }, 2500);

    // Datepicker
	$('.dp').datepicker({
    	format: "dd/mm/yyyy",
        todayBtn: "linked",
    	language: "pt-BR"
	});

    // Colorpicker
    $('.cp').colorpicker({
        format: 'hex'
    });

    // TinyMCE
    tinymce.init({
        selector: 'textarea',
        language : 'pt_BR',
        menubar : false,
        statusbar : false,
        plugins: "link",
        entity_encoding : "raw"
    });

});