document.getElementById("register").addEventListener("submit", (e) => {
    
    if( username() && phone() && pwd() && email())
    {
        alert('Successful registration!');
        //return true;
    }
    else{
        //return false;
    }
})

function email(){
    var login_email =document.getElementById("loginmail").value;
    if(login_email.length>30 && login_email.length<10)
    {
        alert('Email should be less than 30 and greater than 10');
        return false;
    }
    else{
        return true;
    }
}

function username()
{
    var login_name = document.getElementById("loginName").value;
    if(login_name.length<8)
    {
        alert('Username must be greater than 8 characters');
        return false;
    }
    else{
        return true;
    }
}

function phone()
{
    var login_phone = document.getElementById("loginphone").value;
    if(login_phone.length!=10)
    {
        alert('Phone number must be of 10 digits!');
        return false;
    }
    else
    {
        return true;
    }
}
function pwd()
{
    var loginpwd = document.getElementById("loginPassword").value;
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(loginpwd.match(passw))
    {
        return true;
    }
    else{
        alert('Password must  have atleast one uppercase, one lowercase, length to be less than 20 and greater than 6');
        return false;
    }
    
}