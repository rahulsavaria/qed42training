
  function validate(form)
{
    var a= document.getElementById("password").value;
   var b=document.getElementById("repassword").value;
    var c=document.getElementById("mob").value;

   if(a != b)
      {
      alert("password not matched");
      return false;

    }
    else if(a.length<8)
    {
      alert("password should contain atleast 8 characters");
      return false;

    }
    else if (isNaN(c) || c.length<10 || c.length>10)
    {
        alert("enter valid numbers");
        return false;
    }
  }
