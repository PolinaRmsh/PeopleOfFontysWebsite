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

$(document).ready(function(){
    $("#search_text").keypress(function(e){
        if (e.which == 13){
            search();
        }
    });
});