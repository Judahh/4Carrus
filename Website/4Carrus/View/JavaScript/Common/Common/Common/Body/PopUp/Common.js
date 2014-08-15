function blanketSize(popUpDivId) {
    var viewPortHeight;
    var blanketHeight;
    if (typeof window.innerWidth != 'undefined') {
        viewPortHeight = window.innerHeight;
    } else {
        viewPortHeight = document.documentElement.clientHeight;
    }
    
    if ((viewPortHeight > document.body.parentNode.scrollHeight) && (viewPortHeight > document.body.parentNode.clientHeight)) {
        blanketHeight = viewPortHeight;
    } else {
        if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
            blanketHeight = document.body.parentNode.clientHeight;
        } else {
                        blanketHeight = document.body.parentNode.scrollHeight;
        }
    }
    var blanket = document.getElementById('DivIdBlanket');
    blanket.style.height = blanketHeight + 'px';
    var popUpElement = document.getElementById(popUpDivId);
    var popUpElementHeight=blanketHeight/2-150;//150 is half popup's height
    popUpElement.style.top = popUpElementHeight + 'px';
}

function windowPosition(popUpDivId) {
    var viewPortWidth;
    var windowWidth;
    if (typeof window.innerWidth != 'undefined') {
        viewPortWidth = window.innerHeight;
    } else {
        viewPortWidth = document.documentElement.clientHeight;
    }
    if ((viewPortWidth > document.body.parentNode.scrollWidth) && (viewPortWidth > document.body.parentNode.clientWidth)) {
        windowWidth = viewPortWidth;
    } else {
        if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
            windowWidth = document.body.parentNode.clientWidth;
        } else {
            windowWidth = document.body.parentNode.scrollWidth;
        }
    }
    var popUpElement = document.getElementById(popUpDivId);
    windowWidth=windowWidth/2-150;//150 is half popup's width
    popUpElement.style.left = windowWidth + 'px';
}

function popup(windowname) {
    blanketSize(windowname);
    windowPosition(windowname);
    toggle('DivIdBlanket');
    toggle(windowname);		
}
