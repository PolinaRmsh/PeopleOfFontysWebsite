function search() {
    var names = document.getElementsByClassName("user");
    var searchTerm = document.getElementById("search_text").value;
    var i;
    if (!searchTerm || !searchTerm.match("([a-z]+'[a-z]+)|([a-z]+-[a-z]+)|([a-z]+)")){
        for (i = 0; i < names.length; i++){
            names[i].style.display = "block";
        }
    }
    else{
        for (i = 0; i < names.length; i++){
            names[i].style.display = "block";
            var currentName = names[i].children[1].children[0].innerHTML;
            if (!currentName.toLowerCase().includes(searchTerm.toLowerCase())){
                names[i].style.display = "none";
            }
        }
    }
}

//get me to work
function enterCheck(e){
    if (e.keyCode == 13 || e.which == 13){
        console.log("lol");
    }
}