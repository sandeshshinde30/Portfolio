const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});


const validateInputs = () => {
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    var flag = 0;

    if(usernameValue === '') {
        alert('Username is required');
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


    if(flag == 2)
    {
        alert("Login Successfull...")
    }
    
};

function location1()
{
    window.location = "../HTML/Registration.html";
}