const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    var flag = 0;

    if(usernameValue === '') {
        alert('Username is required');
    } 
    else{
        flag = flag+1;
    }

    if(emailValue === '') {
        alert('Email is required');
    } else if (!isValidEmail(emailValue)) {
        alert('Provide a valid email address');
    } 
    else{
        flag = flag+1;
    }

    if(passwordValue === '') {
        alert('Password is required');
    } else if (passwordValue.length < 8 ) {
        alert('Password must be at least 8 character.')
    } 
    else{
        flag = flag+1;
    }

    if(password2Value === '') {
        alert('Please confirm your password');
    } else if (password2Value !== passwordValue) {
        alert("Passwords doesn't match");
    } 
    else{
        flag = flag+1;
    }

    if(flag == 4)
    {
        alert("Registration Successfull...")
    }
    
    

};

function location1()
{
    window.location = "../HTML/login.html";
}