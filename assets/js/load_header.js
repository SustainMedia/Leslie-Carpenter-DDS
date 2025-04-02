function setActiveNavItem() {

    console.log("function runs")

    const currentPath = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-link1');

    console.log(navLinks);
    
    navLinks.forEach(link => {

        console.log("link not Found")

        const linkPath = link.getAttribute('href').split('/').pop();
        if (currentPath === linkPath) {
            console.log("link Found")
            link.closest('.nav-item').classList.add('active');
        }
    });
}

function adjustMainContentPadding() {
    const navbar = document.querySelector('.main-nav-box');
    const mainContent = document.querySelector('.main-content');
    
    if (navbar && mainContent) {
      const navbarHeight = navbar.offsetHeight;
      mainContent.style.paddingTop = `${navbarHeight}px`;
    }
  }

$(document).ready(function() {
    $("#header-placeholder").load("./assets/components/header.html");
    setTimeout(() => {
        adjustMainContentPadding();
        setActiveNavItem();
      }, 100);
});

$(document).ready(function() {
    $("#footer-placeholder").load("./assets/components/footer.html");
});

window.addEventListener('resize', adjustMainContentPadding);