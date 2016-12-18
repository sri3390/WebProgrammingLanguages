$( document ).ready(function() {
	
	$("#id").after("<span id = \"warningid\"> </span>");
	$("#title").after("<span id = \"warningtitle\"> </span>");
	$("#location").after("<span id = \"warninglocation\"> </span>");
	$("#field").after("<span id = \"warningfield\"> </span>");
	$("#job_type").after("<span id = \"warningjob_type\"> </span>");
	$("#summary").after("<span id = \"warningsummary\"> </span>");
	$("#req").after("<span id = \"warningreq\"> </span>");
	$("#res").after("<span id = \"warningres\"> </span>");
	
	var id=false;
	var title=false;
	var location=false;
	var field=false;
	var job_type=false;
	var summary=false;
	var req=false;
	var res=false;
	
	$("#submit").attr("disabled", true);
	
	$("#id").focus(function(){
		$("#warningid").hide();	
	});
	
	$("#id").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningid").text("Job ID cannot be blank");
			$("#warningid").show();
    }
	else{
		$("#warningid").hide();
		id=true;
	}
	});
	
	$("#title").focus(function(){
		$("#warningtitle").hide();	
	});
	
	$("#title").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningtitle").text("Title cannot be blank");
			$("#warningtitle").show();
    }
	else{
		$("#warningtitle").hide();
		title=true;
	}
	});
	
	$("#location").focus(function(){
		$("#warninglocation").hide();	
	});
	
	$("#location").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warninglocation").text("Location cannot be blank");
			$("#warninglocation").show();
    }
	else{
		$("#warninglocation").hide();
		location=true;
	}
	});
	
	$("#field").focus(function(){
		$("#warningfield").hide();	
	});
	
	$("#field").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningfield").text("Field cannot be blank");
			$("#warningfield").show();
    }
	else{
		$("#warningfield").hide();
		field=true;
	}
	});
	
	
	$("#job_type").focus(function(){
		$("#warningjob_type").hide();	
	});
	
	$("#job_type").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningjob_type").text("Job Type cannot be blank");
			$("#warningjob_type").show();
    }
	else{
		$("#warningjob_type").hide();
		job_type=true;
	}
	});
    
	$("#summary").focus(function(){
		$("#warningsummary").hide();	
	});
	
	$("#summary").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningsummary").text("Summary cannot be blank");
			$("#warningsummary").show();
    }
	else{
		$("#warningsummary").hide();
		summary=true;
	}
	});
	
	$("#req").focus(function(){
		$("#warningreq").hide();	
	});
	
	$("#req").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningreq").text("Requirement cannot be blank");
			$("#warningreq").show();
    }
	else{
		$("#warningreq").hide();
		req=true;
	}
	});
	
	$("#res").focus(function(){
		$("#warningres").hide();	
	});
	
	$("#res").blur(function()
	{
		if( $(this).val().length === 0 ) {
			$("#warningres").text("Responsibilities cannot be blank");
			$("#warningres").show();
    }
	else{
		$("#warningres").hide();
		res=true;
		if(id && title && location && job_type && field && summary && req && res){
			$("#submit").attr("disabled", false);
		}
	}
	});
	
});