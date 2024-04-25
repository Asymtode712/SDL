function validateform(){  
    var name=document.myform.name.value;  
    var password=document.myform.password.value;  
	var email=document.myform.email.value;
    var address=document.myform.address.value;
		
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
 
    if (email === "" || !email.includes('@')) {
        window.alert
        ("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (address === "") {
        window.alert
        ("Please enter your address.");
        address.focus();
        return false;
    }

    if(password.length<6){  
        alert("Password must be at least 6 characters long.");  
        return false;  
        }

        alert("Registration successful!");
        return true;
		
    }  