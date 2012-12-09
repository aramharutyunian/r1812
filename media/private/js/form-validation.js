jQuery(document).ready(function($){

	// hide messages 
	$("#error").hide();
	$("#sent-form-msg").hide();
	
	// on submit...
	$("#contactForm #submit").click(function() {
		$("#error").hide();
	
		
		//required:
		
		//name
		var name = $.trim($("input#name").val());
//		if(name == ""){
//			$("#error").fadeIn().text("Username required.");
//			$("input#name").focus();
//			return false;
//		}
//		//password
//		var password = $.trim($("input#password").val());
//		if(password == ""){
//			$("#error").fadeIn().text("Password is required.");
//			$("input#password").focus();
//			return false;
//		}
//		//confirm
//		var confirm = $.trim($("input#confirm").val());
//		if(confirm == ""){
//			$("#error").fadeIn().text("Confirm password is required .");
//			$("input#confirm").focus();
//			return false;
//		}
//		if(password != confirm){
//			$("#error").fadeIn().text("Confirm & Password are  not  same .");
//			$("input#confirm").focus();
//			$("input#password").focus();
//			return false;
//		}
		return true;


	});  
		
	$("#loginform #submit").click(function() {
		$("#error").hide();
		
		//required:
		
		//name
		var name = $.trim($("input#name").val());
		if(name == ""){
			$("#error").fadeIn().text("Username required.");
			$("input#name").focus();
			return false;
		}
		//password
		var password = $.trim($("input#password").val());
		if(password == ""){
			$("#error").fadeIn().text("Password is required.");
			$("input#password").focus();
			return false;
		}
		
			return true;

		
	
	});  
	
	
		

});

