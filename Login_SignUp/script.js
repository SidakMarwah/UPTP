const loginSignup = document.querySelector("#loginSignup");
const loginSignUpToggle = document.querySelector("#loginSignUpToggle");
var loginDisplay = true;

function showLogin() {
  loginDisplay = true;
  loginSignup.innerHTML = `<h1>Log In</h1>
    <form id="loginForm" method="post">
<label for="username">Username</label>
<input id="username" type="text" name="username" required >
<label for="password">Password</label>
<input type="password" name="Password" id="password" required >
<input id="login" type="submit" value="Login">
</form>
<p>Not a member? <button id="signupLink" onclick="showSignup()">SignUp..</button></p>`;
};

function showSignup() {
  loginDisplay = false;
  loginSignup.innerHTML = `<h1>Sign Up</h1>
    <form id="signupForm" method="post" ">
        <label for="name">Name</label>
    <input id="name" type="text" name="Name" required >
    <label for="email">Email</label>
    <input id="email" type="email" name="Email" required >
    <label for="phone">Phone Number</label>
    <input id="phone" type="tel" name="Phone" required >
   
    <label for="crPassword">Create Password</label>
    <input type="password" name="Password" id="crPassword" required >
    <input id="gender" name= "gender" type="hidden" value="gender">
    <input id="signup" name= "signup" type="submit" value="Sign Up">
</form>
    <p>Already have an account? <button id="loginLink" onclick="showLogin()">Login..</button></p>`;
};

function submitForm(event) {
  event.preventDefault();

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const username = document.getElementById('crUsername').value;

  // Encode the form data into the URL fragment
  const formData = `#name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&phone=${encodeURIComponent(phone)}&username=${encodeURIComponent(username)}`;

  // Redirect to the destination page with the form data in the URL fragment
  window.location.href = `templates/OTPform.html${formData}`;
};


loginSignUpToggle.addEventListener('click', () => {
  if (loginDisplay) {
    showSignup();
  }
  else {
    showLogin();
  }
});