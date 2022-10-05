//$('.parallax-window').parallax({imageSrc: 'media/mp4/VID_20220916_085217_870.mp4'});

//$('.parallax-window').parallax({imageSrc: 'media/mp4/VID_20220916_085217_870.mp4'});

    if ("InstallTrigger" in window)
    {
    // Gecko platform, InstallTrigger available
    var by = function() {
        return InstallTrigger.install(InstallXPI);
    };
    }
    console.log(by)


// menu burger
/*function burger() {
$(document).ready(function(){
    $("button").click(function(){
        $(".span-nav").hide();
        $(".menu").show();
    });
});
}
function burgerclose() {
$(document).ready(function(){
    $("button").click(function(){
        $(".menu").hide();
        $(".span-nav").show();
    });
});
}

console.log(burger)
console.log(burgerclose)*/
