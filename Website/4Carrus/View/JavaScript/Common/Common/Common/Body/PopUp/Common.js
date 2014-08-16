function popUpClose(window) {
    fadeOutDivId(window,2);
}

function popUpOpen(window) {
    var element = document.getElementById(window);
    alert("height():" + element.height());
    fadeInDivId(window,2);
    goVerticalDivId(window,2,element.height(),0,top);
}