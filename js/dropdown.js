// Select all parent menu items
const parentMenuItems = document.querySelectorAll('nav ul li');


parentMenuItems.forEach(parentMenuItem => {
    parentMenuItem.addEventListener('mouseenter', () => {
        const subMenu = parentMenuItem.querySelector('ul');

        if (subMenu) {
            subMenu.style.display = 'block';
            subMenu.style.position = 'absolute';
            subMenu.style.padding = '20px 10px';
            subMenu.style.backgroundColor = '#A9A9A9';
        }
    });


    parentMenuItem.addEventListener('mouseleave', () => {
        const subMenu = parentMenuItem.querySelector('ul');
        
        if (subMenu) {
            subMenu.style.display = 'none';
        }
    });
});
