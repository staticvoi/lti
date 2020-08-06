function Encrypt(data)
 {
  return data;
 }
 function submitForm(form)
 {
  var name=document.myform.name.value;  
  var password=document.myform.pwd.value;  
  
  if (name==null || name==""){  
    document.getElementById("demo").innerHTML ="Name can't be blank";  
    return false;  
  }
  else if (name!="LTI" || name!="lti"){  
    document.getElementById("demo").innerHTML ="Username is incorrect";  
    return false;  
  }
  else if(password.length<3){  
    document.getElementById("demo").innerHTML ="Password must be at least 3 characters long.";  
    return false;  
  }  

  else if(name=="lti"||name=="LTI"){
    <a href="welcome.html"></a>
  }  


  //create a form element
  var f = document.createElement("form");
  //set post and action attributes
  f.setAttribute('method',"post");
  f.setAttribute('action',"process.php");
  
  //Create a new element of type input
  var uname = document.createElement("input");
  //Set its type
  uname.setAttribute('type',"text");
  //give it a name
  uname.setAttribute('name',"uname");
  //Encrypt can be any function that you define to 
  //encrypt the given data
  uname.value = Encrypt(form.uname.value); 
  
  //create one more to store password
  var pass = document.createElement("input");
  pass.setAttribute('type',"password");
  pass.setAttribute('name',"pass");
  pass.value = Encrypt(form.pass.value);
  
  //add both to form
  f.appendChild(uname);
  f.appendChild(pass);

  //submit the form
  f.submit();
  return false;
 }

