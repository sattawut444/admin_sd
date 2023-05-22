jQuery('.gallery').eq(0).initGallery({
    nav: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    close: "<i class='material-icons'>close</i>",
    aspectRatio: 3/2,
    showDots: false,
    showNavIfOneItem: false,
    showNav: false,
    arrows: true,
    transition: "fade",
    fullScreen: false,
    autoplay: true,
});

jQuery('.gallery').eq(3).initGallery({
    nav: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    close: "<i class='material-icons'>close</i>",
    aspectRatio: 3/2,
    dots: false,
    showNavIfOneItem: false,
    showNav: true,
    loop: false,
    autoplay: false,
    transition: "slide",

});

jQuery('.gallery').eq(1).initGallery({
    nav: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    close: "<i class='material-icons'>close</i>",
    aspectRatio: 3/2,
    showDots: true,
    showNavIfOneItem: false,
    showNav: false,
    arrows: true,
    transition: "slide",
    transitionTime: 700,
});



jQuery('.gallery').eq(3).initGallery({
    aspectRatio: 3/2,
    dots: true,
    showDotsIfOneItem: false,
    showNav: true,
});

// jQuery('.gallery').trigger('change', 'prev');
