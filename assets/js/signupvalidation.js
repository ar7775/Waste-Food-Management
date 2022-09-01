
<script>

function validateform()
{
//populate variable names, etc based on form
var name=document.signup.name.value;
var uname=document.signup.name.value;
var addr=document.signup.name.value;
var pwd=document.signup.name.value;
var phone=document.signup.name.value;


if (name==null || name=="")
{
  alert("Please enter a valid name.");
  return false;
}

if (uname==null || uname=="")
{
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(uname))
 {
   return true;
 }

  alert("Please enter a valid email ID as your username.");
  return false;
}
if (addr==null || addr=="")
{
  alert("Please enter a valid address.");
  return false;
}

else
  if(password.length<6)
  {
    alert("Password must be at least 6 characters long.");
    return false;
  }
  if (uname==null || uname=="")
  {
    alert("Please enter a valid name.");
    return false;
  }

  if (phone!=null || phone!="")
  {
    var numformat = /^\d{10}$/;
    if((phone.value.match(numformat))
      return true;
      }
    alert("Please enter a valid phone number.");
    return false;
  }
 return true;
}
</script>
