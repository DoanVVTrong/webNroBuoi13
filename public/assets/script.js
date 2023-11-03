var login = document.querySelector('.login');
var formDN = document.querySelector('.formDangNhap');
var wrapper_form = document.querySelector('.wrapper-form');
var modal_main = document.querySelector('.modal-main');

login.addEventListener('click', function() {
    formDN.classList.add('active');
    login.classList.add('mau');
    wrapper_form.classList.add('active');
});

wrapper_form.addEventListener('click', function() {
    console.log('ngu');
})

// navbar
var navbar = document.querySelector(".row.navbar--pc");
var navIcon = document.querySelector(".nav__icon");
var dem = 0 ;

navIcon.addEventListener('click',function(){
    navbar.classList.add("active");
    if(dem % 2 === 1){
        navbar.classList.remove("active");
    }
    dem++;
});
