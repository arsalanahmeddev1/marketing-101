let inputRadio = document.querySelectorAll('.location');
inputRadio.forEach(el => {
  el.addEventListener('click', function (e) {
    console.log(e.target.value);
    window.location.href = e.target.value + '.php';

  })
})
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