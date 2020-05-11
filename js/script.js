//HERO TYPE WRITEE ---------------------------------

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 100;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 300;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};



//Sticky Header
window.onscroll = function() { myFunction() };

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
};

console.log("javascript linked");




//AOS
AOS.init({
    offset: -180
});

//API
function getApi() {
    console.log("calling api");
    var xhr = $.get(`https://graph.instagram.com/me/media?fields=id,media_type,media_url&access_token=IGQVJVMUwzWGMxUE1PQVBmMFI3NlVBc1gxNHk0X3pQaDZA6TVBtdjIzOHlNbGd4amJVZATEyMFN1U1lxU2RVNDdZAYk1RcWE1aG9iQS0tZAGh3ajU0c3JxZA2l1NXhYS1hoNzFrbHNpMGdn`);

    xhr.done(function(res) {
        // console.log(res); 
        let instaData = res.data

        let container = document.getElementById('api')

        for (let insta of instaData) {
            console.log(insta);
            if (insta.media_type == 'IMAGE') {
                let imgTag = document.createElement('img')
                imgTag.setAttribute('src', insta.media_url)
                container.appendChild(imgTag)
            } else {
                let videoTag = document.createElement('video')
                    // let videoControl = document.setAttribute('name','control')
                    // videoTag.appendChild(videoControl)
                videoTag.setAttribute('src', insta.media_url)
                container.appendChild(videoTag)
            }
        }
    });
};

getApi();