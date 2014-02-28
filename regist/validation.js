function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;
var f=document.forms["reg"]["pic"].value;
var g=document.forms["reg"]["pic"].value;
var h=document.forms["reg"]["pic"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("picture must be filled out");
  return false;
  }
if (g==null || g=="")
  {
  alert("username must be filled out");
  return false;
  }
if (h==null || h=="")
  {
  alert("password must be filled out");
  return false;
  }
}