const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');
    
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('left-[-100%]');
            navLinks.classList.toggle('left-0');
        });