const menuDesktop = document.querySelector('.menuDesktop');
const menuDesktopInner = document.querySelector('.menuDesktop__inner');
const menuDesktopChildren = Array.from(document.querySelectorAll('.menuDesktop__inner>*'));

const openDesktopMenu = () => {
    menuDesktop.style.opacity = '1';
    menuDesktop.style.zIndex = '1000';

    setTimeout(() => {
        menuDesktopInner.style.transform = 'scaleX(1)';

        setTimeout(() => {
            menuDesktopChildren.forEach((item) => {
                item.style.opacity = '1';
            });
        }, 200);
    }, 200);
}

const closeDesktopMenu = () => {
    menuDesktopChildren.forEach((item) => {
        item.style.opacity = '0';
    });

    setTimeout(() => {
        menuDesktopInner.style.transform = 'scaleX(0)';

        setTimeout(() => {
            menuDesktop.style.opacity = '0';
            menuDesktop.style.zIndex = '-1000';
        }, 200);
    }, 200);
}

document.addEventListener('keyup', (e) => {
    if(e.key === 'Escape') {
        closeDesktopMenu();
    }
})
