


function checkInput() 
{

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var apple = document.getElementById("apple").value;
    var orange = document.getElementById("orange").value;
    var grapes = document.getElementById("grapes").value;
    var free = document.getElementById("7day");
    var overnight = document.getElementById("overnight");
    var threeday = document.getElementById("threeday");
    var valid = true;

    if(username == "" || password == "" || apple == ""|| orange == ""|| grapes == "")
    {
        document.getElementById("blank").innerHTML = "Input field cannot be left blank";
        valid = false;
    }
    else 
    {
        document.getElementById("blank").innerHTML = "";
    }

    if(ValidateEmail(username)==true)
    {
        document.getElementById("userEmail").innerHTML = "";
    }
    else 
    {
        document.getElementById("userEmail").innerHTML = "Enter a valid email";
        valid = false;
    }

    if(free.checked || overnight.checked || threeday.checked)
    {
        document.getElementById("shippingChosen").innerHTML = "";

    }
    else
    {
        document.getElementById("shippingChosen").innerHTML = "Please choose a shipping option";
        valid = false;

    }

    if(valid==true)
    {
        document.getElementById("valid").innerHTML = "Input is valid";
    }
    else 
    {
        document.getElementById("valid").innerHTML = "";

    }

}  

function ValidateEmail(username) 
{
 if (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(username))
  {
    return (true)
  }
    return (false)
}

function reset()
{
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("apple").value = "";
    document.getElementById("orange").value = "";
    document.getElementById("grapes").value = "";
    document.getElementById("7day").checked = false;
    document.getElementById("overnight").checked = false;
    document.getElementById("threeday").checked = false;
}