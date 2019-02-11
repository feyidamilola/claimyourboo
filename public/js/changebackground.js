$(function() {
    var body = document.querySelector("body");
    var backgrounds = [
        "url(../img/bg1.png)",
        "url(../img/bg3.jpg)",
        "url(../img/bg4.jpg)",
        "url(../img/bg5.jpg)"
    ];
    var current = 0;

    function nextBackground() {
        // body.css(
        //     "background",
        //     backgrounds[(current = ++current % backgrounds.length)]
        // );
        body.style.background =
            backgrounds[(current = ++current % backgrounds.length)];
        body.style.transition = "0.7s all";
        setTimeout(nextBackground, 5000);
    }
    setTimeout(nextBackground, 1000);
    body.style.background = backgrounds[0];
});
