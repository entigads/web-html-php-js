

const username = document.getElementById("getuser").innerText;
const user_id = document.getElementById("getid").innerText;
const email = document.getElementById("getemail").innerText;
const password = document.getElementById("getpass").innerText;
const subject = document.getElementById("getsub").innerText;

    // create a function that holds value of php variables
    function greetUser(){
        alert("Hello " + username + " \nYour user ID is "+ user_id + " \nYour Email is " + email + " \nyour password is " + password + " \nYour Subject: " + subject);   
    }