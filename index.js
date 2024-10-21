//  Scroll-to-Top Button
window.onscroll = function() {
    const scrollTopBtn = document.getElementById("scrollTop");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
};


document.getElementById("scrollTop").onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};


// scroll-triggered animations
window.addEventListener('scroll', function() {
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(element => {
        const position = element.getBoundingClientRect().top;
        if (position < window.innerHeight - 150) {
            element.classList.add('show');
        }
    });
});

//  form validation
const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
    const name = form.elements['name'].value;
    const email = form.elements['email'].value;
    const message = form.elements['message'].value;
    
    if (!name || !email || !message) {
        alert('All fields are required!');
        event.preventDefault();
    }
});





