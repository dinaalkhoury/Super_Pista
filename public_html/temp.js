// JavaScript Document


	function validate()
	{ 
		if (document.forms.registration.email.value == "")
		{
			 alert("You must provide an email adddress.");
			 return false;
		}
		return true;
	}


	function quote()
	{
		xhr = new XMLHttpRequest();	
		var url = "quote1.php?symbol=" + document.getElementById("symbol").value;
		
		xhr.onreadystatechange = handler;
		xhr.open("GET", url, true);
		xhr.send(null);
	}
		
	function handler()
	{
		if (xhr.readyState == 4)
		{
			if (xhr.status == 200)
				alert(xhr.responseText);
			else
				alert("error");
		}
	}