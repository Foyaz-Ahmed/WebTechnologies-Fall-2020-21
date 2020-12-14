function validateForm()
{
	var name = document.getElementById("name").value;
	var pass = document.getElementById("password").value;
	var em = document.getElementById("email").value;
	var cpass = document.getElementById("cpassword").value;
	var id = document.getElementById("id").value;
	var address = document.getElementById("maddress").value;
	var jdate = document.getElementById("mdate").value;
	var phone = document.getElementById("phone").value;
	//var phone = document.getElementById("file").value;
	var date = document.getElementById("dob").value;
	
	if(name=="")
	{
		alert("empty name field");
		return false;
	}
	else{
		var regName = /^[A-Za-z]+ [A-Za-z]+$/;
		if(!regName.test(name)){
			 alert('Please enter valid Name');
			 return false;
		}
	}
	if(id == "")
	{
	alert("Id field is empty");
	return false;
	}
	
	if(id!=""){
	var regId = /^[A-Za-z]+$/;
	if(id.length<8 || regId.test(id))
	{
		alert("you shuoud choose XX-XXXXX(number) format");
		return false;
	}
	
	 }
	  if(em == "")
		{
		alert("empty email field");

		return false;
	    }
	 if(em != ""){
		
		var regEm = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		if(!regEm.test(em)){
		alert("You have entered an invalid email address!");
		return false;

		}
        }

	if(pass=="")
	{
		alert("empty password field");
		//document.getElementById("mypass").innerHTML="<b>Empty field of Password</b>";
		return false;
	}
	if(pass.length < 8) {  
	 alert("password should be must at least 8 characters");
     return false;  
	 } 

    if(cpass == "")
		{
		alert("Confirm password is empty");
		
		return false;
	    }
	if(cpass!= "" && pass!=cpass)
	{
		alert("password doesn't match");
		return false;
	}
	
  if(address=="")
	 {
		 alert("empty address field");
		 return false;
	 }
  if(jdate=="")
	 {
		 alert("give joining date");
		 return false;
	 }
	 
  if (document.getElementById("male").checked == false &&  document.getElementById("female").checked == false && document.getElementById("others").checked == false)
  {
    alert("Select gender");
    return false;
  }
   if (document.getElementById("apositive").selected == false &&  document.getElementById("anegetive").selected == false && document.getElementById("bpositive").selected == false && document.getElementById("bnegetive").selected == false && document.getElementById("opositive").selected == false && document.getElementById("onegetive"))
  {
    alert("Select blood group");
    return false;
  }
  if(phone=="")
  {
	  alert("empty phone number field");
	  return false;
  }
  
  if(phone!=""){
		var regPhone = /^[A-Za-z]+$/;
		
		
		if(phone.length!=11 || phone.length==15  || regId.test(phone))
		{
			alert("Invalid  Phone Number");
			return false;
		}
		
	}
 /* if(file="")
  {
	  alert("No file  Chosen");
  }
 */
  if(date=="")
  {
	  alert("give your date of birth");
	  return false;
  }
}
	
