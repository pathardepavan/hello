function redirectSignUp(event)
{
    window.location.href='https://php.net';

}
function validateEmail(email)
{
    var valid=false;
    var atexists=email.indexOf('@');
    var dotexistslast=email.lastIndexOf('.');
    if(atexists<1||(dotexistslast-atexists<2))
    {
        return false;
    }
    else{
        return true;
    }
}
function validateLoginForm(event)
{
    //event.preventDefault();
    var messagetag=document.getElementById('message');
    messagetag.innerHTML="";
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    //Validate the email.
    var message="";
    if(!validateEmail(email))
    {
        message+="Email Format is Wrong<br />";
    }

    if(password!='magic')
    {
        message+="password is wrong<br />";
    }
    if(message!="")
    {

        messagetag.innerHTML=message;
        messagetag.style="color:red";

    }
    else{
        //Validation Right Redirect
        window.location.href='login.php';


    }



}

