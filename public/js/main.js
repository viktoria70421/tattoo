$(function(){
	
	 var name_default= $('#name').text();
	 var body_default= $('#body').text();
	
	$('.ml-auto a').on({
     
	 'mouseover': function(){
	    var color=$(this).attr('data-color');
		var name=$(this).attr('data-name');
		var body=$(this).attr('data-body');
				
		$('#name').text(name);
		$('#body').text(body);		
		$('#picture').css('background-color', color);
		$('.bg-dark').css('background-color', color);
	 
	 },
	 
	 'mouseout': function(){
		 
		 $('#name').text(name_default);
		 $('#body').text(body_default);
		 $('#picture').css('background-color','#343a40');
		 $('.bg-dark').css('background-color','#343a40');
	 }
	 
	})
	

	
});