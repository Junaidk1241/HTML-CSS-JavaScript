const togglePassword = document.querySelector('#togglePassword');
const toggleePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#cur-pass');
const Newpassword = document.querySelector('#new-pass');



togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});


toggleePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = Newpassword.getAttribute('type') === 'password' ? 'text' : 'password';
    Newpassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});