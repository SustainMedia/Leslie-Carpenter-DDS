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

$(document).ready(function() {
    $("#header-placeholder").load("./assets/components/header.html");
    setTimeout(setActiveNavItem, 100);
});

$(document).ready(function() {
    $("#footer-placeholder").load("./assets/components/footer.html");
});