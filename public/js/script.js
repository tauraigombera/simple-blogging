const btn = document.getElementById('menu-btn')
const nav = document.getElementById('menu')

btn.addEventListener('click', () => {
    btn.classList.toggle('open')
   // nav.classList.toggle('flex')
    nav.classList.toggle('hidden')
})
const search_btn = document.getElementById('search-btn')
const search_bar = document.getElementById('search-bar')

search_btn.addEventListener('click', () => {
  search_bar.classList.toggle('hidden')
})

const profile_avatar = document.getElementById('profile-avatar')
const profile_dropdown = document.getElementById('profile-dropdown')

profile_avatar.addEventListener('click', () => {
    profile_dropdown.classList.toggle('hidden')
})
