var scripts = [
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js',
    'https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js',
]

document.addEventListener('DOMContentLoaded', function() {
    loadScripts(scripts);
}, false);

function loadScripts(scripts) {
    let time = 0;
    scripts.forEach(element => {
        time += 50;
        setTimeout(function () {
            let script  = document.createElement('script');
            script.type  = 'text/javascript';
            script.src  = element;
            document.getElementsByTagName('body')[0].appendChild(script);
        }, time);
    });
}