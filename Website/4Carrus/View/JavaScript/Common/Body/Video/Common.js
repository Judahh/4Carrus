videoIdDealership = document.getElementById("VideoIdDealership");
buttonIdPlay = document.getElementById("ButtonIdPlay");
buttonIdMute = document.getElementById("ButtonIdMute");
buttonIdSkip = document.getElementById("ButtonIdSkip");
buttonIdfullScreen = document.getElementById("ButtonIdfullScreen");
rangeIdSeekBar = document.getElementById("RangeIdSeekBar");
rangeIdVolumeBar = document.getElementById("RangeIdVolumeBar");
        
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

window.onload = function(){
    // Event listener for the play/pause button
    buttonIdPlay.addEventListener("click", function() {
        if (videoIdDealership.paused == true) {
                // Play the video
                videoIdDealership.play();

                // Update the button text to 'Pause'
                buttonIdPlay.innerHTML = "Pause";
        } else {
                // Pause the video
                videoIdDealership.pause();

                // Update the button text to 'Play'
                buttonIdPlay.innerHTML = "Play";
        }
    });


    // Event listener for the mute button
    buttonIdMute.addEventListener("click", function() {
        if (videoIdDealership.muted == false) {
                // Mute the video
                videoIdDealership.muted = true;

                // Update the button text
                buttonIdMute.innerHTML = "Unmute";
        } else {
                // Unmute the video
                videoIdDealership.muted = false;

                // Update the button text
                buttonIdMute.innerHTML = "Mute";
        }
    });


    // Event listener for the full-screen button
    buttonIdfullScreen.addEventListener("click", function() {
        if (videoIdDealership.requestFullscreen) {
                videoIdDealership.requestFullscreen();
        } else if (videoIdDealership.mozRequestFullScreen) {
                videoIdDealership.mozRequestFullScreen(); // Firefox
        } else if (videoIdDealership.webkitRequestFullscreen) {
                videoIdDealership.webkitRequestFullscreen(); // Chrome and Safari
        }
    });


    // Event listener for the seek bar
    rangeIdSeekBar.addEventListener("change", function() {
        // Calculate the new time
        var time = videoIdDealership.duration * (rangeIdSeekBar.value / 100);

        // Update the video time
        videoIdDealership.currentTime = time;
    });


    // Update the seek bar as the video plays
    videoIdDealership.addEventListener("timeupdate", function() {
        // Calculate the slider value
        var value = (100 / videoIdDealership.duration) * videoIdDealership.currentTime;

        // Update the slider value
        rangeIdSeekBar.value = value;
    });

    // Pause the video when the seek handle is being dragged
    rangeIdSeekBar.addEventListener("mousedown", function() {
        videoIdDealership.pause();
    });

    // Play the video when the seek handle is dropped
    rangeIdSeekBar.addEventListener("mouseup", function() {
        videoIdDealership.play();
    });

    // Event listener for the volume bar
    rangeIdVolumeBar.addEventListener("change", function() {
        // Update the video volume
        videoIdDealership.volume = rangeIdVolumeBar.value;
    });
}
