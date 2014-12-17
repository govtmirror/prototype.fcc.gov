(function($, document, window, viewport) {
  $(function () {
    $('.expand-tertiary').click(function (e) {
      	e.preventDefault();
		
		var parent_menu = $(this).parents('.top-level-menu, .tertiary-menu');
		var selected_menu = e.target.href.split('#')[1];
		
		parent_menu.hide("slide", { direction: "left" }, 500, function(){
			$("#" + selected_menu).show("slide", { direction: "right"}, 500);
		});
		
    });

    $('.collapse-tertiary').click(function (e) {
      	e.preventDefault();

     	var parent_menu = $(this).parents('.top-level-menu, .tertiary-menu');
		var selected_menu = e.target.href.split('#')[1];
	
		parent_menu.hide("slide", { direction: "right" }, 500, function(){
			$("#" + selected_menu).show("slide", { direction: "left"}, 500);
		});
		
		
    });
  });
})(jQuery, document, window, ResponsiveBootstrapToolkit);