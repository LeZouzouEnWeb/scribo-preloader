document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("load", function () {
        let chgt = document.getElementById("chgt");

        // chgt.style.display = "none";
        fadeOutAndIn(chgt, 500, 1000);

        window.setTimeout(function () {
            chgt.innerHTML = "";
        }, 3000);
    });
});

function fadeInAndOut(element, delay, duration) {
    element.style.opacity = 0;
    let start = null;

    function step(timestamp) {
        if (!start) start = timestamp;
        let progress = timestamp - start;
        if (progress < delay) {
            element.style.opacity = 0;
        } else if (progress < delay + duration) {
            let opacityProgress = (progress - delay) / duration;
            element.style.opacity = opacityProgress;
        } else {
            element.style.opacity = 1;
            return;
        }
        window.requestAnimationFrame(step);
    }

    window.requestAnimationFrame(step);
}

function fadeOutAndIn(element, delay, duration) {
    element.style.opacity = 1;
    let start = null;

    function step(timestamp) {
        if (!start) start = timestamp;
        let progress = timestamp - start;
        if (progress < delay) {
            element.style.opacity = 1;
        } else if (progress < delay + duration) {
            let opacityProgress = 1 - ((progress - delay) / duration);
            element.style.opacity = opacityProgress;
        } else {
            element.style.opacity = 0;
            return;
        }
        window.requestAnimationFrame(step);
    }

    window.requestAnimationFrame(step);
}
