let about = document.querySelector(".about");
let close = document.querySelector(".about span");
let open = document.querySelector("#about-click");

close.addEventListener("click", function() {
    about.classList.add("opacity-0");
    about.style.tansition = "0.7s all";
});

open.addEventListener("click", function() {
    if (about.classList.contains("opacity-0")) {
        about.classList.remove("opacity-0");
        about.style.tansition = "0.7s all";
    }
});
