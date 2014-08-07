videoIdDealership=document.getElementById("VideoIdDealership");
        
function enableControls(){ 
    videoIdDealership.controls=true;
    videoIdDealership.load();
}

function disableControls(){ 
    videoIdDealership.controls=false;
    videoIdDealership.load();
}

function checkControls(){ 
    alert(videoIdDealership.controls);
} 
