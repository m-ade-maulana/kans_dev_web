let loader = document.getElementById("loading");

function show_loader() {
    loader.style.display = "block";
}

function hide_loader() {
    // loader.style.display = "none";
    let effect = setInterval(() => {
        loader.style.display = "none";
        // if (!loader.style.opacity) {
        //     loader.style.opacity = 1;
        // } if (loader.style.opacity > 0) {
        //     loader.style.opacity -= 0.9;
        // } else {
        //     clearInterval(effect);
        //     loader.style.display = "none";
        // }
    }, 2000);
}

