$('document').ready(function()
{ 
     /* validation */
	  
	   jQuery.validator.addMethod("require_from_group", function (value, element, options) {
        var numberRequired = options[0];
        var selector = options[1];
        var fields = $(selector, element.form);
        var filled_fields = fields.filter(function () {
            // it's more clear to compare with empty string
            return $(this).val() != "";
        });
        var empty_fields = fields.not(filled_fields);
        // we will mark only first empty field as invalid
        if (filled_fields.length < numberRequired && empty_fields[0] == element) {
            return false;
        }
        return true;
        // {0} below is the 0th item in the options field
    }, jQuery.validator.format("Please fill out at least {0} of these fields."));

    $('#search-form').validate({ // initialize the plugin
        groups: {
            names: "location title jobid"
        },
        rules: {
            location: {
                require_from_group: [1, ".form-control"]
            },
            title: {
                require_from_group: [1, ".form-control"]
            },
			jobid: {
                require_from_group: [1, ".form-control"]
            }
        },
		submitHandler: submitForm
    });
	
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {	
 
			var data = $("#search-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'search_process.php',
			data : data,
			beforeSend: function()
			{					
				$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; searching ...');
			},
			success :  function(response)
			   {			
					if(response != ""){
						$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Search');	
						$("#results").html("");
						var res = JSON.parse(response);
						if(res.jobs.length > 0){
							$.each(res.jobs, function(i) {
								$("#results").append("<table class='jobTab'><tr><td><span class='detHead'>Job ID: </span>"+this.JOB_ID+" ("+this.Job_Type+")</td><td><a href='fetchjobdescription.php?jobid="+this.JOB_ID+"'>"+this.Title+"</a></td><td><span class='detHead'>Location: </span>"+this.Location+"</td><td><span class='detHead'>Field: </span>"+this.Field+"</td></tr></table>");
								$("#results").append("<p class='summary'><span class='detHead'>Summary : </span>"+this.JobSummary+"</p>");
								$("#results").append("<hr>");
							});	
						}
						else{
							$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Search');
							$("#results").html("<span class='errorMsg'>No jobs found<span>");
						}
					}
					else{
						$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Search');
						$("#results").html("<span class='errorMsg'>No jobs found<span>");
					}
			  }
			});
				return false;
		}
	   /* login submit */
});