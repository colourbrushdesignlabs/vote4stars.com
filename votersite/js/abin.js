function check_more(value)
{
	if(value<=8)
		{
			$('#more').hide();

		}
	
}


function goto_vote(id_val)
{
	//var id=atob(id_val);
	location='vote.php?id='+id_val
}



function checktoast_vote(aid)

	{



	if (aid==1)

		{

		toastr.success('Vote submitted successfully; Only one vote from one device will be counted in each stage');


		}

	else

	if (aid==2)

		{

		toastr.error('You have already voted, Kindly share this link with your friends');

		}

	else

	if (aid==3)

		{

		toastr.warning('Rejected by Captcha, Please try once again');

		}

			else

	if (aid==4)

		{

		toastr.warning('Elimination is in process .. voting will open shortly.. please watch live @ 07.00 PM www.facebook.com/livenewage ');

		} else
		
		if (aid==5)

		{

		toastr.warning('Eliminated candidate');

		}

		else

		if(aid==6)
		{
			toastr.error('Expired Event');
			
		}

		

		

	}