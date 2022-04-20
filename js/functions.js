// JavaScript Document

//Contact Form
$(document).ready (function() {   
			$('#email').submit(function() {
			if ($('#email').valid()) {
			var queryString = $('#email').serialize();
			$.post('js/email.php', queryString, processResults);
			return false; //do not submit the form 
			}
		});		
		$('#email').validate({
			
		rules: {
		first_name: { required: true},
		last_name: { required: true},
		comments: { required: true},	
		email: {required:true, email:true},
		human_check: {required:true},
			}, //end rules
			messages: {
				email: { 
					required: "Please enter your primary email address.", 
					email: "The email you provided is not in the proper format"
				},
				
				human_check: { 
					required: "Please verify that you are a human!", 
				},
				
			} //end messages
		});
	
		
		function processResults(data, textStatus) {
			if(textStatus == 'success')
			{
				$('#success').text('The message has been sent successfully!');
				$('#success').fadeIn('slow'); //display success message
				$('#email').hide(); //hide form
			}
		}
		
		// Masonry Grid


});
//End

function showCase() {
document.getElementById("black_overlay_splash").style.backgroundColor = 'rgba(0,0,0,.8)';
document.getElementById("splash_logo").style.opacity= '1';
document.getElementById("splash_logo").style.paddingBottom = '10px';
}

function normalizeOverlay() {
document.getElementById("black_overlay_splash").style.backgroundColor = 'rgba(0,0,0,.0)';
document.getElementById("splash_logo").style.opacity= '.5';
document.getElementById("splash_logo").style.paddingBottom = '0';
}

// Sidenav
function openNav() {
    document.getElementById("mySidenav").style.right = "0";
    document.getElementById("container").style.right = "250px";
   
}

function closeNav() {
    document.getElementById("mySidenav").style.right= "-270px";
    document.getElementById("container").style.right= "0";
 
}


