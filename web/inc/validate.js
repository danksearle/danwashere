function isBlank(s)
{
//	Returns TRUE if the string 's' contains all whitespace, or is empty. FALSE otherwise.
	if (s.length == 0 || s == null) return true;

	for(var i = 0; i < s.length; i++)
	{
		var c = s.charAt(i);
		if ((c != ' ') && (c != '\n') && (c != '\t')) return false;
	}
	return true;
}

function isValidEmail(s)
{
	var regExpEmail = /^([^\@ \.]+\.)*[^\@ \.]+\@([^\@ \.]+\.)+[^\@ \.]+$/;
//	Assumes it's already checked for being !isBlank
	if (s.length < 5) return false;

	return regExpEmail.test(s);
}

//	Sorting algorithm used to order the elements in the checkForm function
function elementsort(a, b)
{
	if(a == null || b == null) return -1;
	if(!a.name || a.name=="") retval = -1;
	else if(!b.name || b.name=="") retval = 1;
	else retval = (a.name < b.name ? -1 : 1);
	return (retval);
}

function checkForm(f)
{
//	This is a generic validation function that checks all types of form elements.
//	Should an element or elements be deemed invalid an alert popup appears listing all those that need the user's attention.
//	Some initialisation of variables may be required in the onSubmit event of the form, for instance in the event of a problem being found,
//	the popup by default shows the name of the element, but if you set up a .nicename attribute for that element first, 
//	the nicename is displayed instead.
//	Note that for checkbox and radiobutton groups to be properly validated (i.e. ensure at least one is selected) they must appear in the form's
//	element list consecutively.
//
//	PARAMETERS:
//
//	f - the form to be validated
//
//	use it in the onSubmit function like this:
//	onSubmit="return(checkForm(this));"
//
//	If you want a different header message than the default, set up a .errormsg variable for your form, and that will be displayed instead:
//	onSubmit="this.errormsg='ERROR!!! You\'e messed up your form!\n\n'; return(checkForm(this));"
//
//	EXTRA ATTRIBUTES THAT AFFECT THE ACTION OF THIS FUNCTION:
//	element.ignore
//		- If this is set to TRUE then all other attributes of this element are ignored, and the validator skips past it. NOTE this is not the same
//		- as setting its Optional flag to TRUE, see below.
//	element.nicename 
//		- type string
//		- set this to the phrase you want displayed to the user in the event of invalid data.
//		-	defaults to null
//	element.email
//		- type boolean
//		- should only be used with text type inputs. If set to true the content is validated against an email address template (i.e. 'n@n.n')
//		- defaults to false
//	element.optional
//		- type boolean
//		- if applied to a text box it allows null values - but if data is entered anyway it performs whatever other validation may apply
//		- if applied to anything else it doesn't validate the element (i.e. radio buttons can be left blank)
//		- defaults to false (i.e. defaults to 'required')
//	element.texttype - ONLY CURRENTLY SUPPORTED FOR THE MIN MAX PROPERTIES (See below)
//		- type string
//		- if set to 'ALPHANUMERIC' it allows any characters
//		-	if set to 'NUMERIC' it only allows numbers and mathematical symbols ('-', '+', '.')
//		- default 'ALPHANUMERIC'
//	element.min & element.max (when used with texttype == 'NUMERIC')
//		- type numeric
//		- used to specify a numeric range for the element, it is not necessary to provide both.
//		- default to null
//	element.min & element.max (when used with texttype == 'ALPHANUMERIC')
//		- type numeric
//		- used to specify the minimum or maximum length of the string, it is not necessary to provide both.
//		- default to null
//	element.validchars
//		- type string
//		- only used with TEXT or TEXTAREA elements - is checked regardless of the 'optional' flag.
//		- where the user is only allowed to use certain characters in an input field, list them all here.
//		-	e.g element.validchars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // only allows capital letters
//		- default to null
//	element.invalid
//		- type string
//		- only used with SELECT elements, value ignored if the element is optional
//		- used to specify the invalid choices for non-optional SELECT elements (e.g. 'Please select' option - commonly set to '-1'
//		- default to null
//	element.minchecked & element.maxchecked
//		- type checkbox only
//		- only used with CHECKBOX elements
//		- allows you to specify a minimum and maximum number of choices that the user can select.
//		-	defaults to null and null respectively, meaning that the user can select any number of choices, including zero.
//		- note that to avoid confusion with the 'optional' flag, if either of the minchecked or maxchecked flags are non-null then the checkbox  
//		  group is set to be not optional, regardless of the optional flag's setting. If they are both null, but the optional flag is set to false,  
//			then the minchecked property is set to 1 and the maxchecked is set to null, this forces the user to choose at least one option.

 	var errors = "";
	var errorFound = false;
	var errorElement = 0;
	var errorElementToSelect = 0;
	var i;
	var optdef = false; // Optional Default
	var thisElement, thisGroup, elementIdx, flagIgnore, flagOptional, thisNicename

//	Set the optionaldefault boolean - defaults to FALSE (i.e. all elements are REQUIRED by default), setting it to TRUE means that all elements are by default OPTIONAL.
	if(f.optionaldefaultvalue == true) optdef = true;

//	Set the default error message, if an alternate has not been provided
	if(!f.errormsg || f.errormsg == "" || f.errormsg == null) f.errormsg = 'Sorry, you have not filled in the form correctly. Please try again:\n\n';

//	First, to simplify the validation of element groups (radio buttons, etc), copy the elements array into a local one and sort it based on the name.

	arrE = new Array(); // arrE - array of elements

	for(i = 0; i < f.length; i++)
	{
		arrE[i] = f.elements[i];
	}

//	sort the array - COMMENTED OUT Nov 2004
//	arrE.sort(elementsort);
			
//	continue validation using the arrE as the element list. Now all groups will appear consecutively, simplifying the rest of the code.
	thisGroup = "";
	elementIdx = 0;

	while(elementIdx < arrE.length)
	{
//		Iterate through every individual element of the form
		thisElement = arrE[elementIdx];
		thisGroup = thisElement.name;

//		Fetch general data about the current element / element group
		flagIgnore = false;
		flagOptional = false;
		thisNicename = thisElement.name;

		if(f["validate_" + thisElement.name + "_ignore"]) flagIgnore = (f["validate_" + thisElement.name + "_ignore"].value == "true" ? true : false);
		if(f["validate_" + thisElement.name + "_optional"]) flagOptional = (f["validate_" + thisElement.name + "_optional"].value == "true" ? true : false);
		if(f["validate_" + thisElement.name + "_nicename"]) thisNicename = "\"" + f["validate_" + thisElement.name + "_nicename"].value + "\"";

//	**********************************************************************************************
//	*****  IGNORE ELEMENTS
//	**********************************************************************************************
		if(flagIgnore)
		{
			elementIdx++;
		}
//	**********************************************************************************************
//	*****  RADIO BUTTONS
//	**********************************************************************************************
		else if(thisElement.type == "radio")
		{
//			For radio buttons, advance through the array of radio buttons, checking for CHECKED.
			checkedFound = false;

			do
			{
				if(thisElement.checked) checkedFound++;
				thisElement = arrE[++elementIdx]; // move to next item...
			}while(elementIdx < arrE.length && thisElement.name == thisGroup); // Keep looping until we reach the last radio button element of this group.

			if(!flagOptional && !checkedFound) // An error if no 'checked' were found and it isn't an optional group.
			{
				errors += " - " + thisNicename + " must be chosen\n";
				errorFound = true;
			}
		}
//	**********************************************************************************************
//	*****  CHECK BOXES
//	**********************************************************************************************
		else if(thisElement.type == "checkbox")
		{
			testMinChecked = null;
			testMaxChecked = null;

			if(f["validate_" + thisElement.name + "_minchecked"]) testMinChecked = f["validate_" + thisElement.name + "_minchecked"].value;
			if(f["validate_" + thisElement.name + "_maxchecked"]) testMaxChecked = f["validate_" + thisElement.name + "_maxchecked"].value;

//			For check boxes, advance through the elements, checking for CHECKEDs, 
//			until the 'name' changes, which indicated we've moved out of that radio group.
			checkedFound = 0;
			do
			{
				if(thisElement.checked) checkedFound++;
				thisElement = arrE[++elementIdx]; // move to next item...
			}while(elementIdx < arrE.length && thisElement.name == thisGroup); // Keep looping until we reach the last radio button element of this group.

//		Sort out the validation rules - clear up any confusion between optional and minchecked/maxchecked.
//		Note - base the checking on the min/max options, but if they aren't set and optional == false, then set minchecked to 1.
			if(!flagOptional && !testMinChecked && !testMaxChecked) testMinChecked = 1;

			if(!testMinChecked || !testMaxChecked) // Only error check if at least one of these is not-null - ignore the flagOptional from now on.
			{
				if(testMinChecked && checkedFound < testMinChecked)
				{
					errors += " - " + thisNicename + " - you must choose at least " + testMinChecked + " option" + (testMinChecked == 1 ? "" : "s") + "\n";
					errorFound = true;
				}
				else if(testMaxChecked && checkedFound > testMaxChecked)
				{
					errors += " - " + thisNicename + " - you cannot choose more than " + testMaxChecked + " option" + (testMaxChecked == 1 ? "" : "s") + "\n";
					errorFound = true;
				}
			}
		}
//	**********************************************************************************************
//	*****  TEXT BOXES
//	**********************************************************************************************
		else if(thisElement.type == "text" || thisElement.type == "password" || thisElement.type == "textarea")
		{
			testValidChars = "";
			testTextType = "";

			if(f["validate_" + thisElement.name + "_validchars"]) testValidChars = f["validate_" + thisElement.name + "_validchars"].value;
			if(f["validate_" + thisElement.name + "_texttype"]) testTextType = f["validate_" + thisElement.name + "_texttype"].value;

			if(testValidChars && testValidChars.length > 0)
			{
//				Perform test even for optional elements.
				for(i = 0; i <= thisElement.value.length; i++)
				{
					if(testValidChars.indexOf(thisElement.value.charAt(i)) == -1)
					{
						errors += " - " + thisNicename + " can only contain the following characters:\n" + testValidChars + "\n"; 
						errorFound = true;
						if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
						i = thisElement.value.length; // Stop the loop now we've found a problem.
					}
				}
			}

			if(!thisElement.value)
			{
//				If the element is blank or empty...
				if(flagOptional != true)
				{
//					If the element is not optional and it is blank, then raise an error
					errors += " - " + thisNicename + " cannot be blank\n"; 
					errorFound = true;
					if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
				}
			}
			else{
				if(testTextType != "NUMERIC"){
				// It must be 'ALPHANUMERIC' then
				
					flagEmail = false;

					if(f["validate_" + thisElement.name + "_email"]) flagEmail = (f["validate_" + thisElement.name + "_email"].value == "true" ? true : false);

					testMin = 0;
					testMax = 0;

					if(f["validate_" + thisElement.name + "_min"]) testMin = 0 + f["validate_" + thisElement.name + "_min"].value;
					if(f["validate_" + thisElement.name + "_max"]) testMax = 0 + f["validate_" + thisElement.name + "_max"].value;

					if(flagEmail == true)
					{
//					If the element is an email type
						if(!isValidEmail(thisElement.value))
						{
							errors += " - " + thisNicename + " is not a valid email address\n"; 
							errorFound = true;
							if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
						}
					}
					
					if (testMin > 0 && thisElement.value.length < testMin)
					{
//					If the element is not optional, but it isn't blank either, then validate the contents.
						errors += " - " + thisNicename + " is too short (min " + testMin + " chars)\n"; 
						errorFound = true;
						if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
					}
					if (testMax > 0 && thisElement.value.length > testMax)
					{
						errors += " - " + thisNicename + " is too long (max " + testMax + " chars)\n"; 
						errorFound = true;
						if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
					}
				}else{
				// Handle Numeric type data
				/*
					testMin = 0;
					testMax = 0;

					if(f["validate_" + thisElement.name + "_min"]) testMin = 0 + f["validate_" + thisElement.name + "_min"].value;
					if(f["validate_" + thisElement.name + "_max"]) testMax = 0 + f["validate_" + thisElement.name + "_max"].value;

					if (testMin > 0 && thisElement.value.length < testMin){
//					If the element is not optional, but it isn't blank either, then validate the contents.
						errors += " - " + thisNicename + " is too short (min " + testMin + " chars)\n"; 
						errorFound = true;
						if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
					}
					if (testMax > 0 && thisElement.value.length > testMax){
						errors += " - " + thisNicename + " is too long (max " + testMax + " chars)\n"; 
						errorFound = true;
						if(errorElement == 0){errorElement = thisElement; errorElementToSelect = thisElement;}
					}
				*/
				}
			}

			elementIdx++;
		}
//	**********************************************************************************************
//	*****  DROP DOWN LISTS - SINGLE CHOICE ONLY
//	**********************************************************************************************
		else if(thisElement.type == "select-one")
		{
			if(!flagOptional)
			{
				if(thisElement.invalid && thisElement.value == thisElement.invalid)
				{
					errors += " - " + thisNicename + " has not been selected\n"; 
					errorFound = true;
					if(errorElement == 0){errorElement = thisElement}
				}
			}

			elementIdx++;
		}
//	**********************************************************************************************
//	*****  ALL OTHER ELEMENTS GET IGNORED (Hidden fields, buttons, etc)
//	**********************************************************************************************
		else
		{
			elementIdx++;
		}

	}

	if (!errorFound) return true;

	if (errors.length < 1000){
		errors = f.errormsg + errors;
	}else{
		errors = f.errormsg + errors.substring(0, 1000) + " ...\n\n      - too many errors to list - ";
	}

	alert (errors);
	if(errorElement != 0)					errorElement.focus();
	if(errorElementToSelect != 0) errorElementToSelect.select();
	return false;
}
