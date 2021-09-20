//home-page landing screen slider
$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000, 
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"><span class="iconify" data-icon="eva:arrow-ios-forward-fill" data-inline="false"></span><button>',
        prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><span class="iconify" data-icon="eva:arrow-ios-back-outline" data-inline="false"></span></button>',
    });
});

//home-page gallery slider
$('.home-gallery-slider').slick({
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><span class="iconify" data-icon="eva:arrow-ios-forward-fill" data-inline="false"></span><button>',
    prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><span class="iconify" data-icon="eva:arrow-ios-back-outline" data-inline="false"></span></button>',
});

//dropMenu
var j = 0;
function dropRoomMenu() {
    if(j==1) {
        j = 0;
        document.querySelector('.sub-menu-list').style.display = 'none';
    }
    else {
        j = 1;
        document.querySelector('.sub-menu-list').style.display = 'block';       
    }
}

//responsive menu
var i = 0;
function showMenu() {
    if(i == 1) {
        i = 0;
        document.querySelector('.responsive_menu').style.display = 'none';
    }
    else {
        i = 1;
        document.querySelector('.responsive_menu').style.display = 'block';        
    }
}

//responsive drop menu 
var k = 0;
function dropResponsiveMenu() {
    if(k==1) {
        k = 0;
        document.querySelector('.responsive_menu .sub-menu-list').style.display = 'none';
    }
    else {
        k = 1;
        document.querySelector('.responsive_menu .sub-menu-list').style.display = 'block';       
    }
}

//gallery
var lightboxDescription = GLightbox({
    selector: 'glightbox'
});

function call(id) {
    const filter_button = document.querySelector('.gallery').children;
    for(let i=0; i<filter_button.length; i++){
        filter_button[i].classList.remove('active');
    }
    document.getElementById(id).classList.add('active');
    const items = Array.from(document.getElementsByClassName("filter"));
    items.map(function (item, index) {
        console.log(item);

        if (id === "all") {
            item.classList.remove('d-none');
            item.classList.add('fadeIn','glightbox');
            setTimeout(clean,500);
        } 
        else {
            const check = items[index].classList.contains(id);
            console.log(check);
    
            if (check) {
                item.classList.remove('d-none');
                item.classList.add('fadeIn','glightbox');
            } 
            else {
                item.classList.add('d-none');
                item.classList.remove('fadeIn','glightbox');
            }
        }
    })
}

function clean() {
    const items = Array.from(document.getElementsByClassName("filter"));
    items.map(function (item, index) {
    item.classList.remove('fadeIn');
    })
}