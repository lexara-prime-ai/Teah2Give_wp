function openSideMenu() {
    document.getElementById('side-menu').style.width = '250px';
    document.querySelector('.side-nav-links').style.display = 'block';
}

function closeSideMenu() {
    document.getElementById('side-menu').style.width = '0';
    document.querySelector('.side-nav-links').style.display = 'none';
}

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
