
function checkpassword(){
	
	var pw1= document.getElementById("pwd").value;
	var pw2= document.getElementById("cpwd").value;
	
	if(pw1==pw2)
	{
		alert("Password matched");
	
	}else{
		alert("Password mismatched");
	}
	
}

/*submit diable until check box tick*/
document.addEventListener('DOMContentLoaded', function() {
	
 const tcheck=document.getElementById('checkbox');
 const subb=document.getElementById('signup');

tcheck.addEventListener('change', function(){
 
  subb.disabled = !tcheck.checked;
});
//
});


document.getElementById('signupF').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Get password and confirm password values
    var pw1 = document.getElementById("pwd").value;
    var pw2 = document.getElementById("cpwd").value;
    var checkbox = document.getElementById('checkbox').checked;

    // Check if passwords match and checkbox is checked
    if (pw1 === pw2 && checkbox) {
        // Display success message
        document.getElementById('successMessage').style.display = 'block';

        // Optionally, reset the form after successful registration
        document.getElementById('signupF').reset();
    } else {
        // Do nothing as your original checkpassword function already alerts the user
        return false; // Prevent form submission
    }
});