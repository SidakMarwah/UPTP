const inputs = document.querySelectorAll("input"),
  verifyOTP = document.querySelector("#verifyOTP");

// Generate OTP
const expectedOTP = generateOTP().toString();
alert(expectedOTP);

// iterate over all inputs
inputs.forEach((input, index1) => {
  input.addEventListener("keyup", (e) => {
    // This code gets the current input element and stores it in the currentInput variable
    // This code gets the next sibling element of the current input element and stores it in the nextInput variable
    // This code gets the previous sibling element of the current input element and stores it in the prevInput variable
    const currentInput = input,
      nextInput = input.nextElementSibling,
      prevInput = input.previousElementSibling;

    // if the value has more than one character then clear it
    if (currentInput.value.length > 1) {
      currentInput.value = "";
      return;
    }
    // if the next input is disabled and the current value is not empty
    //  enable the next input and focus on it
    if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
      nextInput.removeAttribute("disabled");
      nextInput.focus();
    }

    // if the backspace key is pressed
    if (e.key === "Backspace") {
      // iterate over all inputs again
      inputs.forEach((input, index2) => {
        // if the index1 of the current input is less than or equal to the index2 of the input in the outer loop
        // and the previous element exists, set the disabled attribute on the input and focus on the previous element
        if (index1 <= index2 && prevInput) {
          input.setAttribute("disabled", true);
          input.value = "";
          prevInput.focus();
        }
      });
    }
    //if the fourth input( which index number is 3) is not empty and has not disable attribute then
    //add active class if not then remove the active class.
    if (!inputs[3].disabled && inputs[3].value !== "") {
      const enteredOTP = inputs[0].value + inputs[1].value + inputs[2].value + inputs[3].value;

      // Check if the entered OTP matches the expected OTP
      if (enteredOTP === expectedOTP) {
        verifyOTP.classList.add("active");
        displayMessage("OTP is correct!", true);
      } else {
        displayMessage("OTP is incorrect! Please try again.", false);
      }
    } else {
      verifyOTP.classList.remove("active");
    }
  });
});

function displayMessage(message, success) {
  const otpStatus = document.querySelector("#otpStatus");
  otpStatus.textContent = message;
  otpStatus.classList.add("message", success ? "success" : "error");


  setTimeout(() => {
    otpStatus.textContent = "";
  }, 2000);
}

//focus the first input which index is 0 on window load
window.addEventListener("load", () => inputs[0].focus());



function getFormData() {
  // Get the URL fragment (everything after #)
  const fragment = window.location.hash.substring(1);
  // Parse the form data from the URL fragment
  const params = new URLSearchParams(fragment);
  const name = params.get('name');
  const email = params.get('email');
  const phone = params.get('phone');
  const username = params.get('username');

  // Display the form data on the page
  document.getElementById('email').innerText = email;
}

// Call the function to display the form data on page load
getFormData();



function generateOTP() {
  // Generate a random 4-digit OTP
  const otp = Math.floor(1000 + Math.random() * 9000);
  return otp;
}
