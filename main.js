/**
    Author: Brandon Lammey
    Date Last Updated: 24 September 2017
    File Name: main.js
    Description: Set of functions to complete 3 tasks
    1) Validate a password
    2) Scroll forward and back through 5 pictures
    4) Manipulate the CSS of a text box
*/


/**
*	Public method that takes no arguments returns a message.
*	Details: Compares two strings and checks that they're at least a length of 8.
*/
function validate()
{
    let pass1 = document.getElementById("first").value;
    let pass2 = document.getElementById("second").value;

    if(pass1.length < 8 || pass2.length < 8)
    {
        alert("Error: Please enter at least 8 characters.");
    }
    else if(pass1 != pass2)
    {
        alert("Error: Passwords do not match.");
    }
    else
    {
        alert("Passwords Match.");
        
        document.getElementById("first").value = "";
        document.getElementById("second").value = "";
    }
}

/**
*	Public method that takes no arguments returns a picture.
*	Details: Moves to the next image in a series of 5 pictures.
*/
function nextPic()
{
    let imgSource = document.getElementById("initialImage").src;//current image

    //determine next image
    for(let i=imgSource.length-1; i>0; i--)
    {

        if(document.getElementById("initialImage").src.charAt(i) == 1)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img2.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 2)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img3.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 3)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img4.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 4)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img5.jpg";
            break;PREV
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 5)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img1.jpg";
            break;
        }
    }
}

/**
*	Public method that takes no arguments returns a picture.
*	Details: Moves to the previous image in a series of 5 pictures.
*/
function prevPic()
{
    let imgSource = document.getElementById("initialImage").src;//current image

    //determine previous image
    for(let i=imgSource.length-1; i>0; i--)
    {
        if(document.getElementById("initialImage").src.charAt(i) == 1)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img5.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 2)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img1.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 3)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img2.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 4)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img3.jpg";
            break;
        }
        else if(document.getElementById("initialImage").src.charAt(i) == 5)
        {
            document.getElementById("initialImage").src = "http://i237.photobucket.com/albums/ff138/brandonlammey/448%20Project/img4.jpg";
            break;
        }
    }
}

/**
*	Public method that takes no arguments cahnges CSS.
*	Details: Takes a user value for background color and border width and color and modifies CSS.
*/
function manipulateText()
{
    //retrieving values
    let borderValue = parseInt(document.getElementById("borderWidth").value);
    let redBorder = parseInt(document.getElementById("borderRed").value);
    let greenBorder = parseInt(document.getElementById("borderGreen").value);
    let blueBorder = parseInt(document.getElementById("borderBlue").value);

    let redBack = parseInt(document.getElementById("backgroundRed").value);
    let greenBack = parseInt(document.getElementById("backgroundGreen").value);
    let blueBack = parseInt(document.getElementById("backgroundBlue").value);

    let preview = document.getElementById("editText");

    //Checking user input
    if(isNaN(borderValue) || isNaN(redBorder) || isNaN(greenBorder) || isNaN(blueBorder))
    {
        alert("Error. Invalid values for the border. Please enter a number.");
    }
    else if(redBorder < 0 || redBorder > 255 || greenBorder < 0 || greenBorder > 255 || blueBorder < 0 || blueBorder > 255)
    {
        alert("Error. Number out of range. Please enter within 0-255.");
    }
    else if(isNaN(redBack) || isNaN(greenBack) || isNaN(blueBack))
    {
        alert("Error. Invalid values for the background. Please enter a number.");
    }
    else if(redBack < 0 || redBack > 255 || greenBack < 0 || greenBack > 255 || blueBack < 0 || blueBack > 255)
    {
        alert("Error. Number out of range. Please enter within 0-255.");
    }
    else
    {
        preview.style.borderWidth = borderValue + "px";
        preview.style.borderColor = "rgb(" + redBorder + "," + greenBorder + "," + blueBorder + ")";
        preview.style.backgroundColor = "rgb(" + redBack + "," + greenBack + "," + blueBack + ")";
    }
}

  /**
*	Public method that takes no arguments.
*	Details: 
*	-Checks for user input (No blank forms)
*	-Checks user input to make sure username and password are valid
*/
function validateForm()
{

    let name = document.forms["store"]["username"].value;
    let password = document.forms["store"]["password"].value;


    let q1 = document.forms["store"]["quantity1"].value;
    let q2 = document.forms["store"]["quantity2"].value;
    let q3 = document.forms["store"]["quantity3"].value;
    let shipping = document.forms["store"]["shipping"].value;

    if(name == null || name == "")
    {
        alert("Username is invalid! Field Left Blank!");
        return false;
    }
    else if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(name))
    {
        alert("Username is invalid! Not valid format!");
	    return false;
    }
    else if(password == null || password == "")
    {
        alert("Password is invalid! Field Left Blank!");
        return false;
    }
	else if(q1 == null || q1 == "" || parseInt(q1) < 0)
    {
      alert("Boots quantity invalid! Please unter a quantity greater than or equal to 0.");
      return false;
    }
    else if(q2 == null || q2 == "" || parseInt(q2) < 0)
    {
      alert("Kimono quantity invalid! Please unter a quantity greater than or equal to 0.");
      return false;
    }
    else if(q3 == null || q3 == "" || parseInt(q3) < 0)
    {
      alert("Card quantity invalid! Please unter a quantity greater than or equal to 0.");
      return false;
    }
    else if(shipping == null || shipping == "")
    {
      alert("PLEASE CHOOSE SHIPPING OPTION");
      return false;
    }
    else
    {
    return true;
    }
}

