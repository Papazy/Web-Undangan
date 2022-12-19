var musik = document.getElementById('musik');
var gambarmusik = document.getElementById('tombolMusik');


let newYearDay = new Date("2023-01-07");
let newYearDay2 = new Date("2022-12-23");


let $harid = document.getElementById('harid');
let $jamd = document.getElementById('jamd');
let $menitd = document.getElementById('menitd');
let $detikd = document.getElementById('detikd');

let $hari = document.getElementById('hari');
let $jam = document.getElementById('jam');
let $menit = document.getElementById('menit');
let $detik = document.getElementById('detik');


setInterval(function(){
    var now = new Date();
    var timeLeft=(newYearDay - now)/1000;
    var timeLeft2=(newYearDay2 - now)/1000;

    updateClock(timeLeft, timeLeft2);
},1000);

function updateClock(remainingTime, remainingTime2){
    let hari = Math.floor(remainingTime/86400);
    remainingTime -= hari * 86400;
    let harid = Math.floor(remainingTime2/86400);
    remainingTime2 -= harid * 86400;

    let jam = Math.floor(remainingTime/3600) % 24;
    remainingTime-= jam * 3600;
    let jamd = Math.floor(remainingTime2/3600) % 24;
    remainingTime2-= jamd * 3600;
    
    let menit = Math.floor(remainingTime/60) % 60;
    remainingTime -= menit * 60;
    let menitd = Math.floor(remainingTime2/60) % 60;
    remainingTime2 -= menitd * 60;
    
    let detik = Math.floor(remainingTime%60);
    let detikd = Math.floor(remainingTime2%60);

    $harid.innerHTML = Number(harid);
    $jamd.innerHTML = Number(jamd);
    $menitd.innerHTML = Number(menitd);
    $detikd.innerHTML = Number(detikd);

    $hari.innerHTML = Number(hari);
    $jam.innerHTML = Number(jam);
    $menit.innerHTML = Number(menit);
    $detik.innerHTML = Number(detik);   
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
        gambarmusik.src="/webundangan/Alat/pause.png";
    }else{
        musik.pause();
        gambarmusik.src="/webundangan/Alat/play-buttton.png"
    }
}