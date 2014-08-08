divIdMenuVideo=document.getElementById("DivIdMenuVideo");
divIdMenuVideoHolder=document.getElementById("DivIdMenuVideoHolder");

videoId = document.getElementById("VideoId");
divIdLogo = document.getElementById("DivIdLogo");

buttonIdPlay = document.getElementById("ButtonIdPlay");
buttonIdMute = document.getElementById("ButtonIdMute");
buttonIdSkip = document.getElementById("ButtonIdSkip");
//buttonIdfullScreen = document.getElementById("ButtonIdfullScreen");

rangeIdVolumeBar = document.getElementById("RangeIdVolumeBar");
//rangeIdSeekBar = document.getElementById("RangeIdSeekBar");

videoId.oncanplaythrough= function() {
    if(videoId.canPlayType('video/mp4'+';codecs="'+'avc1.42E01E, mp4a.40.2'+'"')){
        videoId.play();
        fadeOut(divIdLogo,4);
        fadeIn(divIdMenuVideo,2);
        fadeIn(divIdMenuVideoHolder,2);
        goBackLeft(divIdMenuVideo,2);
        goBackLeft(divIdMenuVideoHolder,2);
    }
};

function videoLoad(){ 
    divIdMenuVideo.style.right = -200 + "px";
    divIdMenuVideoHolder.style.right = -200 + "px";
}

function enableControls(){ 
    videoId.controls=true;
    videoId.load();
}

function disableControls(){ 
    videoId.controls=false;
    videoId.load();
}

function checkControls(){ 
    alert(videoId.controls);
} 

function updateVolume(){
    if(videoId.volume>2/3){
        buttonIdMute.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">s</div></div>";
    }else{
        if(videoId.volume>1/3){
            buttonIdMute.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">t</div></div>";
        }else{
            if(videoId.volume>0){
                buttonIdMute.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">u</div></div>";
            }else{
                buttonIdMute.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">v</div></div>";
            }
        }
    }
        
} 

window.onload = function(){
    videoLoad();
    // Event listener for the play/pause button
    buttonIdPlay.addEventListener("click", function() {
        if (videoId.paused == true) {
                // Play the video
                videoId.play();

                // Update the button text to 'Pause'
                buttonIdPlay.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">r</div></div>";
        } else {
                // Pause the video
                videoId.pause();

                // Update the button text to 'Play'
                buttonIdPlay.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">p</div></div>";
        }
    });


    // Event listener for the mute button
    buttonIdMute.addEventListener("click", function() {
        if (videoId.muted == false) {
                // Mute the video
                videoId.muted = true;

                // Update the button text
                buttonIdMute.innerHTML = "<div id=\"DivIdNeon\"><div id=\"DivIdIcon\">w</div></div>";
        } else {
                // Unmute the video
                videoId.muted = false;

                // Update the button text
                updateVolume();
        }
    });
    
    // Event listener for the mute button
    buttonIdSkip.addEventListener("click", function() {
        fadeOut(videoId,4);
        audioFadeOut(videoId,4);
        fadeOut(divIdMenuVideo,2);
        fadeOut(divIdMenuVideoHolder,2);
        goRight(divIdMenuVideo,2);
        goRight(divIdMenuVideoHolder,2);
    });


    videoId.addEventListener("ended", function() {
        fadeOut(videoId,4);
        audioFadeOut(videoId,4);
        fadeOut(divIdMenuVideo,2);
        fadeOut(divIdMenuVideoHolder,2);
        goRight(divIdMenuVideo,2);
        goRight(divIdMenuVideoHolder,2);
    });
//    // Event listener for the full-screen button
//    buttonIdfullScreen.addEventListener("click", function() {
//        if (videoIdDealership.requestFullscreen) {
//                videoIdDealership.requestFullscreen();
//        } else if (videoIdDealership.mozRequestFullScreen) {
//                videoIdDealership.mozRequestFullScreen(); // Firefox
//        } else if (videoIdDealership.webkitRequestFullscreen) {
//                videoIdDealership.webkitRequestFullscreen(); // Chrome and Safari
//        }
//    });


//    // Event listener for the seek bar
//    rangeIdSeekBar.addEventListener("change", function() {
//        // Calculate the new time
//        var time = videoIdDealership.duration * (rangeIdSeekBar.value / 100);
//
//        // Update the video time
//        videoIdDealership.currentTime = time;
//    });


//    // Update the seek bar as the video plays
//    videoIdDealership.addEventListener("timeupdate", function() {
//        // Calculate the slider value
//        var value = (100 / videoIdDealership.duration) * videoIdDealership.currentTime;
//
//        // Update the slider value
//        rangeIdSeekBar.value = value;
//    });

    // Event listener for the volume bar
    rangeIdVolumeBar.addEventListener("change", function() {
        // Update the video volume
        videoId.volume = rangeIdVolumeBar.value;
        updateVolume();
    });

//    // Pause the video when the seek handle is being dragged
//    rangeIdSeekBar.addEventListener("mousedown", function() {
//        videoIdDealership.pause();
//    });
//
//    // Play the video when the seek handle is dropped
//    rangeIdSeekBar.addEventListener("mouseup", function() {
//        videoIdDealership.play();
//    });
}

function fadeIn(element,time){
    fade(element,time,0,100);
}

function fadeOut(element,time){
    fade(element,time,100,0);
}

function audioFadeIn(element,time){
    audioFade(element,time,0,100);
}

function audioFadeOut(element,time){
    audioFade(element,time,100,0);
}

function fade(element,time,initial,end){
    var increment = 0;
    element.style.display = "block";
    if(initial < end){
        increment = 1;
    }
    if(initial > end){
        increment = -1;
    }

    var opacity = initial;

    if(opacity == end){
        if(end == 0){
            element.style.display = "none";
        }
    }

    var interval = setInterval(
        function(){
            if((opacity == end)){
                if(end == 0){
                    element.style.display = "none";
                }
                clearInterval(interval);
            }else {
                opacity += increment;
                element.style.opacity = opacity/100;
                element.style.filter = "alpha(opacity="+opacity+")";
            }
        },time * 10);
}

function audioFade(element,time,initial,end){
    var increment = 0;
    if(initial < end){
        increment = 1;
    }
    if(initial > end){
        increment = -1;
    }

    var volume = initial;

    if(volume == end){
        if(end == 0){
            element.style.display = "none";
            element.pause();
        }
    }

    var interval = setInterval(
        function(){
            if((volume == end)){
                if(end == 0){
                    element.style.display = "none";
                    element.pause();
                }
                clearInterval(interval);
            }else {
                volume += increment;
                element.volume = volume/100;
            }
        },time * 10);
}

function goUp(element,time){
    goVertical(element,time,0,200,true);
}

function goDown(element,time){
    goVertical(element,time,0,200,false);
}

function goRight(element,time){
    goHorizontal(element,time,0,200,true);
}

function goLeft(element,time){
    goHorizontal(element,time,0,200,false);
}

function goBackLeft(element,time){
    goHorizontal(element,time,-100,0,false);
}

function goVertical(element,time,initial,end,top){
    var increment = 1;

    var vertical = initial;

    var interval = setInterval(
        function(){
            if((vertical == end)){
                clearInterval(interval);
            }else {
                vertical += increment;
                if(top){
                    element.style.bottom = vertical + "px";
                }else{
                    element.style.top = vertical + "px";
                }
            }
        },time * 10);
}

function goHorizontal(element,time,initial,end,right){
    var increment = 1;

    var horizontal = initial;

    var interval = setInterval(
        function(){
            if((horizontal == end)){
                clearInterval(interval);
            }else {
                horizontal += increment;
                if(right){
                    element.style.right = -horizontal + "px";
                }else{
                    element.style.right = horizontal + "px";
                }
            }
        },time * 10);
}
