function showHide(e) { 
    document.getElementById(e) 
    && ("none" != document.getElementById(e + "-show").style.display ? (document.getElementById(e + "-show").style.display = "none", document.getElementById(e).style.display = "block") : (document.getElementById(e + "-show").style.display = "inline", document.getElementById(e).style.display = "none")) 
}