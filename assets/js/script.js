const dropdown_filter = document.querySelector('#menu-button')
const dropdown_list = document.querySelector('#dropdown_list')
const dropdown_contact = document.querySelector('#contact_drop')
const dropdown_contact_list = document.querySelector('#dropdown_contact')

dropdown_filter.addEventListener('click', ()=>{
    dropdown_list.classList.toggle('hidden')
})

dropdown_contact.addEventListener('click', ()=>{
    dropdown_contact_list.classList.toggle('hidden')
})

