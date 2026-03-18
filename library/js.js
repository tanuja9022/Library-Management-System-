/*
function empty(td1,td2,msg)
		{	
			
				if(document.getElementById(td1).value=="")
				{	
					
					document.getElementById(td2).innerHTML="<font color='#FF7A7A'>"+msg+"</font>";
				}
		
			
		}
		
function role()
{

		if(document.getElementById("role")=="")
		{
			
			window.alert("select Role");
		}
		else
		{
			document.signup.submit();
			
			}


}
*/
function validate()
{
if(document.signup.username.value=='')
{
window.alert("user name is empty");
return false;
}
if(document.signup.password.value=='')
{
window.alert("password is empty");
return false;
}
if(document.signup.cpassword.value=='')
{
window.alert("confirm password is empty");
return false;
}
if(document.signup.email.value=='')
{
window.alert("email is empty");
return false;
}
if(document.signup.cnic.value=='')
{
window.alert("CNIC is empty");
return false;
}
if(document.signup.cel.value=='')
{
window.alert("cell# is empty");
return false;
}
if(document.signup.address.value=='')
{
window.alert("address is empty");
return false;
}


if(document.signup.role.value=='')
{
window.alert("role is empty");
return false;
}
document.signup.submit();
return true;
}





function insert_hidden()
{
		if(document.getElementById("email").value=="example_123.id@library.com")
		{

		document.getElementById("email").value="";
		}
}

