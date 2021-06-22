function submitBooking() {
    if (window.confirm("Make sure your data is filled in correctly")) {
        window.alert("Success Booking");
    } else {
        window.alert("Failed Booking");
    }
}
if (localStorage.getItem('theme') == 'light') {
    setTheme(true);
}

function setTheme(isLight) {
    if (isLight) {
        document.body.setAttribute('id', 'lightMode');
        localStorage.setItem('theme', 'light');
        document.getElementById('destination').src = 'assets/images/destinasi-light.png';
    } else {
        document.body.setAttribute('id', '');
        localStorage.removeItem('theme');
        document.getElementById('destination').src = 'assets/images/destinasi.jpg';
    }
}

gsap.from("#head-text", {
    opacity: 0,
    duration: 2,
    x: 0,
    y: 100
})
gsap.from("#head-desc", {
    opacity: 0,
    duration: 2,
    x: 0,
    y: -100
})
gsap.from("#btn-get-started", {
    opacity: 0,
    duration: 2,
    x: 0,
    y: 100
})
function about(){
    gsap.from('#title-about', {
        opacity: 0,
        duration:2,
        x:0,
        y:-100
    })
    gsap.from('#img-logo', {
        opacity: 0,
        duration:2,
        x:0,
        y:-100
    })
    gsap.from('.p-about', {
        opacity: 0,
        duration:2,
        x:0,
        y:-100
    })
}
function home() {
    gsap.from("#head-text", {
        opacity: 0,
        duration: 2,
        x: 0,
        y: 100
    })
    gsap.from("#head-desc", {
        opacity: 0,
        duration: 2,
        x: 0,
        y: -100
    })
    gsap.from("#btn-get-started", {
        opacity: 0,
        duration: 2,
        x: 0,
        y: 100
    })
}

function destination() {
    gsap.from("#destination", {
        opacity: 0,
        duration: 2,
        x: 0,
        y: 100
    })
}

function PackageTravel() {
    gsap.from(".card", {
        opacity: 0,
        duration: 2,
        x: 0,
        y: 100
    })
    gsap.from("#cardPackage", {
        opacity: 0,
        duration: 2,
        x: 0,
        y: -100
    })
}

