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
		
		var cname = $("input#cname").val();
		if(cname == ""){
			$("#error").fadeIn().text("College name required.");
			$("input#cname").focus();
			return false;
		}
		if(cname.length < 3){
		$("#error").fadeIn().text("College name is not correct.");
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
		var passwd = $("input#passwd").val();
		if(passwd.length < 6){
			$("#error").fadeIn().text("Password required atleast 6 digit");
			$("input#passwd").focus();
			return false;
		}
		
		var phone = $("input#phone").val();
		if(isNaN(phone)||phone.indexOf(" ")!=-1)
   	{
      	$("#error").fadeIn().text("Enter numeric value");
			$("input#phone").focus();
         return false;
      }
		if (phone.length != 10 )
      {
      	$("#error").fadeIn().text("enter 10 digits");
			$("input#phone").focus();
         return false;
      }
		
		var cpasswd = $("input#cpasswd").val();
		if(cpasswd.length < 6){
			$("#error").fadeIn().text("Re-enter Password ");
			$("input#cpasswd").focus();
			return false;
		}
		if(passwd != cpasswd){
			$("#error").fadeIn().text("Password did not match");
			$("input#cpasswd").focus();
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

