import '../css/main.scss';
import './modals.js';
import './timetoread.js';

//Lang open/close
let langElement = document.querySelectorAll('.lang-js');
langElement.forEach(el => {
  el.addEventListener('click', function () {
    let langList = document.querySelectorAll('.lang-list');
    langList.forEach(list => { 
      list.classList.toggle('open');
    });
  })
});
