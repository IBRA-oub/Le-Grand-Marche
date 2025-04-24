document.addEventListener("DOMContentLoaded", function () {
    let currentPage = 1;
    const limit = 4;
    const leftBtn = document.querySelector('.left-row');
    const rightBtn = document.querySelector('.right-row');
    const container = document.getElementById('best-sellers-list');

    function loadProducts(page) {
        fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `action=load_best_sellers&page=${page}`
        })
        .then(res => res.text())
        .then(html => {
            container.innerHTML = html;
            currentPage = page;
            leftBtn.disabled = currentPage === 1;
            // ici tu peux aussi checker s’il reste moins de 4 produits, et désactiver rightBtn
        });
    }

    rightBtn.addEventListener('click', () => loadProducts(currentPage + 1));
    leftBtn.addEventListener('click', () => loadProducts(currentPage - 1));
    
    // --------testimonial slider---------
    
    const carousel = document.querySelector(".carousel");
    const leftBtnCarousel = document.getElementById("left");
    const rightBtnCarousel = document.getElementById("right");
  
    const card = carousel.querySelector(".card");
    const cardWidth = card.offsetWidth;
  
    leftBtnCarousel.addEventListener("click", () => {
      carousel.scrollLeft -= cardWidth;
    });
  
    rightBtnCarousel.addEventListener("click", () => {
      carousel.scrollLeft += cardWidth;
    }); 

    // ----------- burger menu -----------

    const burgerMenu = document.querySelector('.burger-menu');
    const navbar = document.querySelector('.main-navigation');
    
    burgerMenu.addEventListener('click', () => {
        navbar.classList.toggle('active');
        burgerMenu.classList.toggle('active');
    });
    
      
    
})





  

