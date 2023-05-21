function cardnumber(inputtxt)
{
	var cardno = /^(?:5[1-5][0-9]{14})$/;
	if(inputtxt.value.match(cardno))
		{
			return true;
		}
	else
		{
		alert("Not a valid Mastercard number!");
		return false;
		}
}

//	if (expirationMonth.value == "Month" or expirationYear.value == "Year")
//		{
//			alert("Not a valid Expiration Date!");
//			return false;
//		}
//		else
//		{
//			return true;
//		}