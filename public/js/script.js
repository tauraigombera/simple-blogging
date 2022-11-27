const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
    btn.classList.toggle('open')
    nav.classList.toggle('hidden')
})

const search_button = document.getElementById('search-btn')
const search = document.getElementById('search-bar')

search_button.addEventListener('click', () => {
  search.classList.toggle('hidden')
})

const profile_btn = document.getElementById('profile-avatar')
const dropdown = document.getElementById('profile-dropdown')

profile_btn.addEventListener('click', () => {
    dropdown.classList.toggle('hidden')
})
