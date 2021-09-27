/*function validate()
{
if(document.getElementById("uname").value=="")
{
alert("Enter Your Mail");
document.getElementById("uname").focus();
return false;
}
var emailPat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
     var emailid=document.getElementById("uname").value;

     var matchArray = emailid.match(emailPat);

     if (matchArray == null)

    {

               alert("Your Email ID seems incorrect. Enter Correct Email ID.");

               document.getElementById("uname").focus();

               return false;

	}
	if(document.getElementById("pass").value=="")
	{
		alert(" Enter password");
		document.getElementById("pass").focus();
		return false;
	}
	if(document.getElementById("pass").value.length<8)

    {

    alert("Password must be of 8 or more characters");

    document.getElementById("pass").focus();

    return false;

    }
	return true;
}*/	
/*counter function using set and clear*/
function counter()
{
      var timeleft = 10;
      var downloadTimer = setInterval(function(){         /*here (set) uses to call the function multiple times until (clear) is used*/
			if(timeleft <= 0){                                  /*When timeleft is <= 0 ie need to stop the counter so we call (clear) in this (if block) */
				clearInterval(downloadTimer);
				document.getElementById("countdown").innerHTML = "00:"+ timeleft;
			} 
			else {                                               /* if timeleft is not 0 then show timeleft value in html(countdown will display) */
				document.getElementById("countdown").innerHTML = "00:" + timeleft + " seconds";
			}
			timeleft -= 1;                                       /* decrementing timeleft value by 1 */
        }, 1000);                                          /*it will diplay 1000 milliseconds time period in each call (ie 1 second time show this )*/
}        
