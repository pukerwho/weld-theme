// Form - Contact Us
const modalScriptURL = 'https://script.google.com/macros/s/AKfycbzBrLKl6NTwBI2TDdl1cRbDnyViYSd1cVVcUsZ977Ozy8p0UGnmpVBThjuijtZhPmI4/exec'
const contact_us = document.forms['contact_us']
if (contact_us) {
  contact_us.addEventListener('submit', e => {
    e.preventDefault()
    let this_form = contact_us
    let data = new FormData(contact_us)
    fetch(modalScriptURL, { method: 'POST', mode: 'cors', body: data })
      .then(response => showSuccessMessage(data, this_form))
      .catch(error => console.error('Error!', error.message))
  })
}

function showSuccessMessage(data, this_form) {
  this_form.reset();
  $('.contactus-success').addClass('block my-8').removeClass('hidden');
  // ga('send', {
  //   hitType: 'event',
  //   eventCategory: 'Форма',
  //   eventAction: 'Отправили вопрос',
  // })
  // setTimeout(function () {
  //   $('.form_q_success').removeClass('block my-4').addClass('hidden');
  // }, 4500)
}