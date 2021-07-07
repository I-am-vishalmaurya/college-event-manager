// show navbar
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggleId && navId){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
            toggle.classList.toggle('bx-x')
        })
    }
}

showMenu('header_toggle', 'navbar')

// Active Links

const linkColors = document.querySelectorAll('.nav__links')

function colorLinks(){
    linkColors.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColors.forEach(l => l.addEventListener('click', colorLinks))