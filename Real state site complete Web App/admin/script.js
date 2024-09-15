const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const propertyFormBtn = document.querySelector('.property-insert');
function checkMenuState() {
    if (window.innerWidth < 767) {
        menu.classList.add('menu-close');
        localStorage.setItem('menuClosed', 'true');
    } else {
        menu.classList.remove('menu-close');
        localStorage.setItem('menuClosed', 'false');
    }
}
if (localStorage.getItem('menuClosed') === 'true') {
    menu.classList.add('menu-close');
} else {
    checkMenuState();
}
menuBtn.addEventListener('click', () => {
    menu.classList.toggle('menu-close');
    
    if (menu.classList.contains('menu-close')) {
        localStorage.setItem('menuClosed', 'true');
    } else {
        localStorage.setItem('menuClosed', 'false');
    }
});
window.addEventListener('resize', checkMenuState);


propertyFormBtn.addEventListener('click',()=>{
    document.getElementById('insert').classList.toggle('property-show');
})
document.querySelector('.property-form-close').addEventListener('click',()=>{
    document.getElementById('insert').classList.remove('property-show');
})

document.addEventListener('DOMContentLoaded', () => {
    // Select all elements with the class 'td-row'
    let td = document.querySelectorAll('.td-row');

    // Loop through each selected element
    for (let i = 0; i < td.length; i++) {
        // Set the inner HTML of each element to its index + 1
        td[i].innerHTML = i + 1;
    }
});

document.querySelector('.alert-close').addEventListener('click',()=>{
    window.location.href = '../property/property.php';
    console.log('he;l');
})

