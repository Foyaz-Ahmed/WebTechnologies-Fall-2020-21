function validateForm()
{ var name = document.getElementById("search").value;

  if(document.getElementById("id").checked == false && document.getElementById("name").checked == false && document.getElementById("phone").checked == false && document.getElementById("email").checked == false)
	
     
	 {
		 if(name=="")
		 {
			 alert("select any option");
			return false;
		 }
		 else{
			 alert("search validate error");
		 }
		  
	 }
	 
	 	if(document.getElementById("id").checked == true){
			 if(name=="")
			{
				alert("empty id field");
				return false;
			}
		else{
			var regId = /^[a-z]+$/
			if(regId.test(name)){
				 alert('Please enter valid id');
				 return false;
			}
		}
	    }
	 
		if(document.getElementById("name").checked == true){
			 if(name=="")
			{
				alert("empty name field");
				return false;
			}
		else{
			var regName = /^[A-Za-z]+ [A-Za-z]+$/;
			if(!regName.test(name)){
				 alert('Please enter valid name');
				 return false;
			}
		}
	    }
		
		if(document.getElementById("phone").checked == true){
			if(name=="")
			{
				alert("empty phone field");
				return false;
			}
			
			else{
				 
		var regPhone = /^[A-Za-z]+$/;
		
		
		if(name.length<=8 || regPhone.test(name))
		{
			alert("Invalid  Phone Number");
			return false;
		}
		
	}
	    }
		
		if(document.getElementById("email").checked == true){
			
		if(name == "")
		{
		alert("empty email field");

		return false;
	    }
		else{
		
		var regEm = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		if(!regEm.test(name)){
		alert("You have entered an invalid email address!");
		return false;

		}
        }


		}


 
}
	
