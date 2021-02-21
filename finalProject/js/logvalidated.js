function logvalidateForm(){
	
	var id = document.getElementById("id").value;
	var pass = document.getElementById("password").value;
	
	
	
	if(id == "")
	{
	alert("Id field is empty");
	return false;
	}
	
	if(id!=""){
	var regId = /^[A-Za-z]+$/;
	if(id.length<8 || regId.test(id))
	{
		alert("Invalid Id");
		return false;
	}
	
	 }
	 
	 if(pass=="")
	{
		alert("empty password field");
		return false;
	}
	if(pass.length < 8) {  
	 alert("password should be must at least 8 characters");
     return false;  
	 }
	
 if (document.getElementById("admin").checked == false &&  document.getElementById("newseditor").checked == false && document.getElementById("journalist").checked == false && document.getElementById("reader").checked == false)
  {
    alert("Select Usertype");
    return false;
  }
	
	
}