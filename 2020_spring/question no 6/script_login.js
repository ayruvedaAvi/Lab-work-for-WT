    document.getElementById("submit").onclick=validate;
    function validate(){
        var x=document.getElementById("email").value;
        validatepass();
        if(x==" ")
        {
            alert("Email cannot be empty");
        }
        else {
            var pos = x.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
            if (pos == -1) {
              alert("Email is not valid");
              return false;
            } else {
              alert("Email is valid");
              return true;
            }
          }
         
    }
function validatepass()
{
    var y=document.getElementById("password").value;
    if(y==" ")
    {
      alert("password cannot be empty");
      return false;
    }
    else
    {
      if(y.length<8)
      {
          alert("Password should be eight or more characters.")
          return false;
      }
      else
      {
          alert("Valid password");
          return true;
      }
    }
}