function master() {
    arguments: null;
    caller: null;
    length: 0;
    name: "master";
}

function of() {
    arguments: null;
    caller: null;
    length: 0;
    name: "of";
}

function puppets() {
    arguments: null;
    caller: null;
    length: 0;
    name: "puppets";
}

    if ("InstallTrigger" in window)
    {
        // Gecko platform, InstallTrigger available
        var by = function() {
            return InstallTrigger.install(InstallXPI);
        };
    }

var metalica = function() {
    arguments: null;
    caller: null;
    length: 0;
    name: "metalica";
};

function newpages() {
    $(document).ready(function(){
        $("button").click(function(){
            $("flux.php").toggle(300);
            $("search.").toggle(300);
            $("musique.html").toggle(300);
            $("playlist.").toggle(300);
            $("profil.php").toggle(300);
        });
    });
}



console.log(master)
console.log(of)
console.log(puppets)
console.log(by)
console.log(metalica)
console.log(newpages)