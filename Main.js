var musik = document.getElementById('musik');
var gambarmusik = document.getElementById('tombolMusik');


let newYearDay = new Date("2022-12-23");
let newYearDay2 = new Date("2022-12-25")

let $hari = document.getElementById('hari');
let $jam = document.getElementById('jam');
let $menit = document.getElementById('menit');
let $detik = document.getElementById('detik');

let $hari2 = document.getElementById('hari2');
let $jam2 = document.getElementById('jam2');
let $menit2 = document.getElementById('menit2');
let $detik2 = document.getElementById('detik2');

setInterval(function(){
    var now = new Date();
    var timeLeft=(newYearDay - now)/1000;
    var timeLeft2=(newYearDay2 - now)/1000;
    updateClock(timeLeft,timeLeft2);
},1000);

function updateClock(remainingTime,remainingTime2){
    let hari = Math.floor(remainingTime/86400);
    remainingTime -= hari * 86400;

    let jam = Math.floor(remainingTime/3600) % 24;
    remainingTime-= jam * 3600;
    
    let menit = Math.floor(remainingTime/60) % 60;
    remainingTime -= menit * 60;
    
    let detik = Math.floor(remainingTime%60);

    $hari.innerHTML = Number(hari);
    $jam.innerHTML = Number(jam);
    $menit.innerHTML = Number(menit);
    $detik.innerHTML = Number(detik);
    
    let hari2 = Math.floor(remainingTime2/86400);
    remainingTime2 -= hari2 * 86400;
    let jam2 = Math.floor(remainingTime2/3600) % 24;
    remainingTime2-= jam2 * 3600;
    let menit2 = Math.floor(remainingTime2/60) % 60;
    remainingTime2 -= menit2 * 60;
    let detik2 = Math.floor(remainingTime2%60);

    $hari2.innerHTML = Number(hari2);
    $jam2.innerHTML = Number(jam2);
    $menit2.innerHTML = Number(menit2);
    $detik2.innerHTML = Number(detik2);
}
function Number(number){
    return number < 10 ? "0" + number :number;
}
function swipeAtas(){
    document.getElementById('Pembuka').style.position = "absolute";
    document.getElementById('container').style.display = "block";
    musik.play();
    document.getElementById('Pembuka').style.top = "-1000px";

}
window.onload = function () {
    try{
        var url_string = (window.location.href);
        var url = new URL(url_string);
        var nama = url.searchParams.get("to");
        document.getElementById('namaTamu').innerText = nama;
    }catch(err){
        console.log("Terjadi masalah dengan URL")
    }
}  
function ubahLagu(){
    if(musik.paused){
        musik.play();
        gambarmusik.src="/Alat/pause.png";
    }else{
        musik.pause();
        gambarmusik.src="/Alat/play-buttton.png"
    }
}