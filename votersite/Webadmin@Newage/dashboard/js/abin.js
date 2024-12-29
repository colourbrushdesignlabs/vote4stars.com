function goto(value) {

 

location='suggestion_sortby.php?action='+value;



}


function goto_viewcan() {

 

location='view-candidate.php';



}






function setdefault_event(event_id)

{

	$.post("setdefault.php", {eventid: event_id}, function(data)

            {

               

                  //  document.getElementById("defaultmessage").innerHTML="default has been set as "+data+" Note: you can add candidate continuesly to this event";
		
		setTimeout(window.location.reload(), 3000);	
	window.location.reload();

					$('#current_default').show();

				//$('#current_default').hide();

				

					

            });

		

}



function setdefault_view_event(event_id)

{

	$.post("setdefault.php", {eventid: event_id}, function(data)

            {

               

                  //  document.getElementById("defaultmessage").innerHTML="default has been set as "+data+" Note: you can add candidate continuesly to this event";

					//$('#current_default').show();

				//$('#current_default').hide();

				

					

            });

		setTimeout(window.location.reload(2), 4000);	
window.location.reload();
}


//event name checker

	$(document).ready(function()

    {

        $("#eventname").focusout(function()

        {

			

				

            //Check if usernane if available

            var eventname = $("#eventname").val();

			

		

            $.post("checkeventname.php", {eventname:  eventname}, function(data)

            {

                if(data == 'false')

                {

                    document.getElementById("messagefailure").innerHTML="Event name already exist";

					$('#submit').hide();

					$('#messagesuccess').hide();

					$('#messagefailure').show();

					$('#messagesubmit').hide();

                }

				else if(data == 'invalid')

					{

						document.getElementById("messagefailure").innerHTML="Enter a valid event name";

					$('#submit').hide();

					$('#messagesuccess').hide();

					$('#messagefailure').show();

					$('#messagesubmit').hide();	

					}

                else

                {

                    document.getElementById("messagesuccess").innerHTML="Event name available";

					$('#messagefailure').hide();

					$('#submit').show();

					$('#messagesuccess').show();

					$('#messagesubmit').hide();

                }

				

					

            });

            return false;

        });

    });

	
// vote count updater


//password

$('#submit').hide();



	$(document).ready(function()

    {

	

        $("#password").focusout(function()

        {

			

				

            //Check if usernane if available

            var password = $("#password").val();

			var id = $("#passwordid").val();

			

		

            $.post("checkpassword.php", {id:  id,password: password}, function(data)

            {

                if(data == 'false')

                {

                    document.getElementById("messagefailure").innerHTML="Wrong Password";

					$('#submit').hide();

					$('#messagesuccess').hide();

					$('#messagefailure').show();

					$('#messagesubmit').hide();

                }

				else if(data == 'invalid')

					{

						document.getElementById("messagefailure").innerHTML="Enter Password";

					$('#submit').hide();

					$('#messagesuccess').hide();

					$('#messagefailure').show();

					$('#messagesubmit').hide();	

					}

                else

                {

                    document.getElementById("messagesuccess").innerHTML="Password Matching";

					$('#messagefailure').hide();

					$('#submit').show();

					$('#messagesuccess').show();

					$('#messagesubmit').hide();

                }

				

					

            });

            return false;

        });

    });

	







function checktoast(aid)

	{



	if (aid==1)

		{

			

		

		toastr.success('Success');

        

}

		

	

	else

	if (aid==2)

		{

		toastr.error('Operation Failed!');

		}

	else

	if (aid==3)

		{

		toastr.warning('something went wrong');

		}

		

		

		

	}





function checktoast_act(aid)

	{



	if (aid==1)

		{

			

		

		toastr.success('Event Activated');

        

		}

	else

	if (aid==2)

		{

		toastr.error('Already Activated/Expired Event cannot activate');

		}

	else

	if (aid==3)

		{

		toastr.warning('something went wrong');

		}

		

		

		

	}





function goto_index()

{

	

	location='index.php'

}

function goto_viewevent()

{

	

	location='view_event.php'

}

function goto_home()

{

	

	location='home.php'

}





