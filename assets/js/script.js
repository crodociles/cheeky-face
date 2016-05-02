$(document).ready(function(){
    $("#services").mouseover(function(){
    	$("#services_dd").css("display","block");
    });
    $("#services").mouseout(function(){
    	$("#services_dd").css("display","none");
    });
    
    var hidden = true;

    $("#mob_nav").click(function(){

    	if (hidden){
    		$("#mob_dd_nav").css("display","inherit");
    		hidden = false;
    	}
    	else{
    		$("#mob_dd_nav").css("display","none");
    		hidden = true;
    	};
    });
   
});

