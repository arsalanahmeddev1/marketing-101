// Function to handle redirection based on selected radio button
function handleRedirection(value) {
  window.location.href = value + '.php';
}

// Radio button click event
let inputRadio = document.querySelectorAll('.location');
if (inputRadio) {
  inputRadio.forEach(el => {
    el.addEventListener('click', function (e) {
      handleRedirection(e.target.value);
    });
  });
}

// Submit button click event
let submitBtn = document.querySelector('.secondry-btn');
if (submitBtn) {
  submitBtn.addEventListener('click', function (e) {
    e.preventDefault();
    // Find the checked radio button
    let checkedRadio = document.querySelector('.location:checked');
    if (checkedRadio) {
      handleRedirection(checkedRadio.value);
    }
  });
}



function handleRadioChange(option) {
  var radioInputField = document.getElementById('pay-input-field');

  if (option === 'pay') {
    radioInputField.disabled = false;
    radioInputField.focus();
    radioInputField.classList.remove('gray-500')
  } else if (option === 'no-pay') {
    radioInputField.disabled = true;
    radioInputField.blur();
    radioInputField.classList.add('gray-500')
  }
}
let showPhoneBtn = document.querySelector('.show-phone-btn')
let showPhoneBtn2 = document.querySelector('.show-phone-btn2')
let showPhoneField = document.querySelectorAll('.show-phone-field')
let showPhoneField2 = document.querySelectorAll('.show-phone-field2')
let showPhoneLabel = document.querySelectorAll('.show-phone-label')
let inputBgWhite = document.querySelectorAll('.input-bg-white')
let alertText = document.querySelector('.alert-text')
console.log(showPhoneBtn, showPhoneField);

if (showPhoneBtn) {
  showPhoneBtn.addEventListener('change', (e) => {
    if (e.target.checked) {
      showPhoneField.forEach(el => {
        el.disabled = false
      })
      showPhoneLabel.forEach(el => {
        el.classList.remove('light-gray')
      })
      inputBgWhite.forEach(el => {
        el.style.backgroundColor = '#fff'
      })
      alertText.classList.remove('d-none')
    } else {
      showPhoneField.forEach(el => {
        el.disabled = true
      })
      showPhoneLabel.forEach(el => {
        el.classList.add('light-gray')
      })
      alertText.classList.add('d-none')
    }
  })
}
if (showPhoneBtn2) {
  showPhoneBtn2.addEventListener('change', (e) => {
    if (e.target.checked) {
      showPhoneField2.forEach(el => {
        el.disabled = false
      })
      inputBgWhite.forEach(el => {
        el.style.backgroundColor = '#fff'
      })
    } else {
      showPhoneField2.forEach(el => {
        el.disabled = true
      })
    }
  })
}


// document.addEventListener('DOMContentLoaded', function () {
//   var bgColor = document.querySelector('.theme-light-bg');
//   var headingColor = document.querySelector('.inner-form-heading');
//   var containerColor = getComputedStyle(bgColor).backgroundColor;
//   if (getComputedStyle(headingColor).color === containerColor) {
//     headingColor.style.color = '#e74c3c';
//   }
// });