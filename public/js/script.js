const open_btn = document.getElementById('menu-btn-open')
const close_btn = document.getElementById('menu-btn-close')
const nav = document.getElementById('menu')

open_btn.addEventListener('click', () => {
  nav.classList.toggle('hidden')
  close_btn.classList.remove('hidden')
  open_btn.classList.add('hidden')
})

close_btn.addEventListener('click', () => {
  nav.classList.toggle('hidden')
  close_btn.classList.add('hidden')
  open_btn.classList.remove('hidden')
})

const search_btn = document.getElementById('search-btn');
const search_bar = document.getElementById('search-bar');

search_btn.addEventListener('click', () => {
  search_bar.classList.toggle('hidden');
})