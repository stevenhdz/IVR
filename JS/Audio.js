function main1() {
    var play = document.getElementById('play');
    var pause = document.getElementById('pause');
}

window.onload = music;

function music() {
    var audio = document.createElement('audio');
    audio.setAttribute('src', 'Cancion/one.mp3');
    document.getElementById("play").addEventListener("click", function() {
        audio.play();
    });
    document.getElementById("pause").addEventListener("click", function() {
        audio.pause();
    });
};