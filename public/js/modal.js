$(function(){
	var fx = {  //проверяем есть ли класс .modal-window
		"initModal" : function (){
			if ($(".modal-window").length == 0) {
				return $("<div>")
						.addClass("modal-window")
						.appendTo("body");
			} else {
				return $(".modal-window");
			}
		}
	};

	$("a.prod_more").on("click", function(event){
		event.preventDefault();
		var data = $(this).attr("data-id");
		modal = fx.initModal();
	})

});