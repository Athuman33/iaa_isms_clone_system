// Enable dropdown functionality
var dropdownToggle = document.querySelector('.dropdown-toggle');
var dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('click', function() {
    dropdownMenu.classList.toggle('show');
});

// Close dropdown when clicking outside of it
window.addEventListener('click', function(event) {
    if (!dropdownToggle.contains(event.target)) {
        dropdownMenu.classList.remove('show');
    }
});

const toggleNav = document.getElementById('toggleNav');
const mainNav = document.getElementById('mainNav');

toggleNav.addEventListener('click', () => {
  mainNav.classList.toggle('active');
});
