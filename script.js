
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
