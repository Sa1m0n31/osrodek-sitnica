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

        if(galleryWrapper) {
            closeGallery();
        }
    }
})

// Gallery
const galleryWrapper = document.querySelector('.gallery');
const galleryPlaceholder = document.querySelector('.gallery__image>.img');
const galleryImages = Array.from(document.querySelectorAll('.galleryImage')).map((item) => {
   return item.getAttribute('src');
});
let currentGallerySlide = 0;
let galleryLength = galleryImages.length;

const openGallery = (n) => {
    galleryWrapper.style.zIndex = '10000';
    galleryWrapper.style.opacity = '1';

    changeImage(n);
}

const changeImage = (n) => {
    galleryPlaceholder.style.opacity = '0';
    setTimeout(() => {
        galleryPlaceholder.setAttribute('src', galleryImages[n]);

        setTimeout(() => {
            galleryPlaceholder.style.opacity = '1';
        }, 200);
    }, 200);

    currentGallerySlide = n;
}

const galleryPrev = () => {
    if(currentGallerySlide === 0) {
        changeImage(galleryLength-1);
    }
    else {
        changeImage(currentGallerySlide-1);
    }
}

const galleryNext = () => {
    if(currentGallerySlide === galleryLength-1) {
        changeImage(0);
    }
    else {
        changeImage(currentGallerySlide+1);
    }
}

const closeGallery = () => {
    galleryWrapper.style.opacity = '0';
    setTimeout(() => {
        galleryWrapper.style.zIndex = '-10000';
    }, 300);
}

// Pricing enlarge
const enlargePricing = () => {

}
