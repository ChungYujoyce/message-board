  // jquery transit is used to handle the animation

  
 setTimeout(function(){
  
   $("input[id='pw']").focusin(function() {
	  
        $("label[class='labelpw']").transition({x:'80px'},500,'ease').next()
        .transition({x:'5px'},500, 'ease');
//setTimeout needed for Chrome, for some reson there is no animation from left to right, the pen is immediately present. Slight delay to adding the animation class fixes it
         
		 setTimeout(function(){
		    $("label[class='labelpw']").next().addClass('move-pen');
	      },100);
		
		});
		  
		  $("input[id='pw']").focusout
		  (function() 
			{$("label[class='labelpw']").transition({x:'0px'},500,'ease').next()
           .transition({x:'-100px'},500, 'ease').removeClass('move-pen');
		  });

		

		     $("input[id='id']").focusin(function() {
        $("label[class='labelid']").transition({x:'80px'},500,'ease').next()
        .transition({x:'5px'},500, 'ease');
//setTimeout needed for Chrome, for some reson there is no animation from left to right, the pen is immediately present. Slight delay to adding the animation class fixes it
         setTimeout(function(){
		    $("label[class='labelid']").next().addClass('move-pen');
	      },100);
		
		});
		  
		  $("input[id='id']").focusout
		  (function() 
			{$("label[class='labelid']").transition({x:'0px'},500,'ease').next()
           .transition({x:'-100px'},500, 'ease').removeClass('move-pen');
		  });
		  
		  
	
		
	
		 $("input[id='swich']").click(function() {
			  
   if($("#swich").prop('checked')==true){ 
     $(".all").removeClass('id_wrapperall-day');
	 $(".all").addClass('id_wrapperall-night');
	$("label").removeClass('lp');
	$(".Footer").removeClass('lp');
   }  else{
     $(".all").removeClass('id_wrapperall-night');
	 $("label").addClass('lp'); 
	 $(".Footer").addClass('lp'); 
	 $(".all").addClass('id_wrapperall-day');
	      };          
   });


		    },1000);