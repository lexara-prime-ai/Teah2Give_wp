const videoElement = document.querySelector('#video');
const videoPlayerElement = document.querySelector('#video-player');

function playVideo(VIDEO_URL) {
    videoElement.src = VIDEO_URL;
    videoPlayerElement.style.display = "block";
}

function stopVideo() {
    videoElement.pause();
    videoPlayerElement.style.display = "none";
}
