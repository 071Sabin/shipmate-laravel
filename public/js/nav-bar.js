let navbar = document.getElementById('navbar');
let hamMenu = document.getElementById('ham-menu');

hamMenu.addEventListener('click', function() {
    if(navbar.style.display === 'block'){
        navbar.style.display = 'none';
    }
    else{
        navbar.style.display = 'block';
    }
});
