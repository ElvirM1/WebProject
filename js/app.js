document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.fotot img');
    let currentPhotoIndex = 0;

    function showPhoto(index) {
        images.forEach(image => image.classList.remove('visible'));
        images[index].classList.add('visible');
    }

    function changePhoto(direction) {
        currentPhotoIndex = (currentPhotoIndex + direction + images.length) % images.length;
        showPhoto(currentPhotoIndex);
    }

    window.nextPhoto = function (direction) {
        changePhoto(direction);
    };
});

var emri = document.getElementById('name');
var mbiemri = document.getElementById('surname');
var emaili = document.getElementById('email');
var tel = document.getElementById('tel')
var msg = document.getElementById('message')

function checkAll(){

    if(
       !emri.value.trim() || !mbiemri.value.trim() || !emaili.value.trim() || !tel.value.trim() || !msg.value.trim()
    ){
        alert("Please fill all the required fields!");
    }else{
        alert("Your message is submitted successfully!")
    }
}



document.querySelectorAll('.scroll-link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});







function showLoginForm() {
    document.getElementById('signup-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
}

function showSignUpForm() {
    document.getElementById('signup-form').style.display = 'block';
    document.getElementById('login-form').style.display = 'none';
}

function validateSignUp() {
    var pass = document.getElementById('password').value;
    var confirm = document.getElementById('confirm-password').value;
    var error = document.getElementById('password-error');

    if (pass.length < 8) {
        error.textContent = "Password must be at least 8 characters long.";
        return false;
    } else if (pass != confirm) {
        error.textContent = "Passwords do not match.";
        return false;
    } else {
        error.textContent = "";
        return true; 
    }
}


function validateLogin() {

    var logPass = document.getElementById('login-password').value;
    var error = document.getElementById('error');

    if (logPass.length < 8) {
        console.log("Password is less than 8 characters");
        error.textContent = "Password must be at least 8 characters long.";
    }else if(logPass.length >=8) {
            alert('Log-in successful!');

    }
}
    
    