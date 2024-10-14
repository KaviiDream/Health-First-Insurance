
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
});