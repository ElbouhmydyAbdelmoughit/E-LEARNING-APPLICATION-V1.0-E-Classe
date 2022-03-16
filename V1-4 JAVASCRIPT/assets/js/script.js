var Name= document.getElementById("name");
var email= document.getElementById("email");
var password= document.getElementById("password");
var replay_password= document.getElementById("replay_password");

if(Name.value ==="" || email.value === "" || password.value === "" || replay_password.value === ""){
    alert("Please Fill In All The Inputs");
}