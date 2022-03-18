const Name= document.getElementById("name");
const email= document.getElementById("email");
const password= document.getElementById("password");
const replay_password= document.getElementById("replay_password");

function validation(){
    if (Name.value == "" || Name.value == null) {
        alert("Please fill in Name");
        return false;
    }else if (email.value == "" || email.value == null) {
        alert("Please fill in E-mail");
        return false;
    }else if(!email.value.match(/^\w+@\w+(\.\w+){1,3}$/)){
        alert('invalid email');
        return false;
    }
    else if (password.value == "" || password.value == null) {
        alert("Please fill in Password");
        return false;
    }else if (replay_password.value == "" || replay_password.value == null) {
        alert("Please fill in Replay Password");
        return false;
    }else{
        return true;
    }

}



