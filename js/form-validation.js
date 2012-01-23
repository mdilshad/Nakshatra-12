jQuery(document).ready(function($) {

	// hide messages 
	$("#error").hide();
	$("#success").hide();
	
	// on submit...
	$("#contactForm #submit").click(function() {
		$("#error").hide();
		
		//required:
		
		//name
		var name = $("input#name").val();
		if(name == ""){
			$("#error").fadeIn().text("Name required.");
			$("input#name").focus();
			return false;
		}
		if(name.length < 3){
		$("#error").fadeIn().text("Name is not correct.");
			$("input#name").focus();
			return false;
		}
		
		// email
		
		
		var email = $("input#email").val();
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if(email == ""){
			$("#error").fadeIn().text("Email required");
			$("input#email").focus();
			return false;
		}
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
			$("#error").fadeIn().text("Email is not correct");
			$("input#email").focus();
			return false;
		}
		
		// web
		var web = $("#comments").val();
		if(web.length < 10){
			$("#error").fadeIn().text("Suggestons required");
			$("input#comments").focus();
			return false;
		}
		
		
		
		//to, from & subject
		var to = $("#to").val();
		var from = $("#from").val();
		var subject = $("#subject").val();
		
		// data string
		var dataString = 'name='+ name
						+ '&email=' + email        
						+ '&web=' + web
						+ '&comments=' + comments
						+ '&to=' + to
						+ '&from=' + from
						+ '&subject=' + subject;						         
		// ajax
		$.ajax({
			type:"POST",
			url: sendMailUrl,
			data: dataString,
			success: success()
		});
	});  
		
		
	// on success...
	 function success(){
	 	$("#success").fadeIn();
	 	$("#contactForm").fadeOut();
	 }
	
    return false;
});

