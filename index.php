<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Irfan & Auliya</title>
    <link rel="stylesheet" href="/webundangan/Alat/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <style>
        #loader{
            position:fixed;
            width: 100%;
            height: 100vh;
            background: white;
            z-index: 2001;
            text-align: center;
            margin: auto;
            justify-content: center;
            padding-top:45vh;
        }
        #loader img{
            width:20%;
            min-width: 200px;
        }
    </style>
</head>
<body>
    <div id="loader">
        <img src="https://undangandigital.id/wp-content/uploads/2022/02/loadinglove.gif" alt="Loading">
    </div>

    
     <div id="Pembuka" style="background-size:cover;" >
        <p class="irfan ">M.Irfan</p>
        <p class="irfan">&</p>
        <p class="irfan">Auliya</p>
        <div class="bapakWrapper">
            <p class="bapak">Kepada Bapak/Ibu/Saudara/i</p>
            <p id="namaTamu">Nama Tamu</p>
            <p class="hormat" style="font-size:95%;background: none;">Tanpa Mengurangi Rasa Hormat, kami mengundang Bapak/Ibu/Saudara/i agar berkenan hadir diacara resepsi pernikahan      kami.</p>
        </div>
        <button id="icon_undangan" onclick="swipeAtas()"> 
            <div class="bg_icon_undangan">
                <img src="/icon_undangan.png" alt="">
                <span>Buka Undangan</span>
            </div>
        </button>
    </div>
    
    <audio id="musik">
        <source src="/webundangan/Alat/musik.mp3" type="audio/mp3">
    </audio>
    <img id="tombolMusik" src="/webundangan/Alat/pause.png" alt="" onclick="ubahLagu()">

    <div id="container" style="" >
        <div class="isi-teratas " data-aos="fade-in">
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="atas ">You're invited to The Wedding Of</p>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" data-aos-delay="100" class="bawah ">Irfan & Auliya</p>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"  data-aos-delay="200" class="waktu ">Sabtu, 7 Januari 2023</p>
        </div>
        <div class="isi-bawah">
            
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-family:'Playfair Display';font-size: 120%;padding: 0 9%;" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" >Dengan Memohon Rahmat Dan Ridho Dari Allah SWT. Kami Bermaksud Menyelenggarakan Acara Resepsi Pernikahan Kami</p>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-size:1.3em; margin-bottom: 10%;font-family:'Great Vibes'; font-size: 250%;">Mempelai</p>
            <br>
            <img data-aos="fade" data-aos-duration="3000" data-aos-once="true" src="/webundangan/Alat/P_Pria.png" alt="Mempelai pria" style="max-width:350px; width:50%; border:3px solid #B08E68; border-radius: 100%;box-shadow: 0px 10px 30px -5px rgb(0 0 0 / 50%);">
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-size:1.5em;margin: 0;font-family: 'Playfair Display'">Muhammad Irfan,S.ST</p>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="margin-top:0;font-family: 'Alex';font-style: italic;">Putra Bapak Rusli Raden & Ibu Maryam, S.Pd (Almh)</p>
            <img data-aos="fade" data-aos-duration="3000" data-aos-once="true" src="/webundangan/Alat/P_Wanita.png" alt="Mempelai Wanita" style="max-width:350px;width:50%; border:3px solid #B08E68; border-radius: 100%;box-shadow: 0px 10px 30px -5px rgb(0 0 0 / 50%);">
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-size:1.5em; margin: 0;font-family: 'Playfair Display';">Auliyana,A.Md</p>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="margin-top:0;font-family: 'Alex';font-style: italic;">Putri Bapak Mayor CBA Ahmad & Ibu Nurmawati</p>
            <br><br>
            <div class="kotakQuotes">
                <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-family:'Abril';font-size: 1.2em;margin: 0 10px;padding: 20px 10px"">“Dan Diantara Tanda-tanda (Kebesaran) -Nya Ialah Dia Menciptakan Pasangan-pasangan Untukmu Dari Jenismu Sendiri, Agar Kamu Cenderung Dan Merasa Tenteram Kepadanya, Dan Dia Menjadikan Diantaramu Rasa Kasih Dan Sayang. Sungguh, Pada Yang Demikian Itu Benar-benar Terdapat Tanda-tanda (Kebesaran Allah) Bagi Kaum Yang Berfikir”{ Q.S : Ar-Rum (30) : 21 }
                </p>
            </div>
        </div>
        <div class="hal4">
            <br>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-size:2em;font-family:'Playfair Display';">Insya Allah Acara Akan Dilaksanakan Pada :</p>
            <img data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" src="/webundangan/Alat/ICON cincin.png" alt="Icon Cincin" style="max-width:350px;width:40%;opacity:0.6">
            <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" style="font-size:2em;margin: 10% 0;font-family: 'Leckerli One';">Akad Nikah</p>
            <div class="wrapper">
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="50">
                    <div id="harid" class="value">00</div>
                    <div class="time-labe">Hari</div>
                </div>
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                    <div id="jamd" class="value">00</div>
                    <div class="time-labe">Jam</div>
                </div>
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="250">
                    <div id="menitd" class="value">00</div>
                    <div class="time-labe">Menit</div>
                </div>
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="350">
                    <div id="detikd" class="value">00</div>
                    <div class="time-labe">Detik</div>
                </div>
                <br><br>
                <div class="detail" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="250">
                <img src="/webundangan/Alat/kalender.png" alt="" style="display:block;max-width:5%;">
                <span style="text-align:center"> Jum'at 23 Desember 2022</span>
            </div>
            <div class="detail" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="350">
                <img src="/webundangan/Alat/jam.png" alt="" style="max-width:5%;">
                <span style="text-align:center"> Pukul : 08.40 WIB - Selesai</span>
            </div>
            <div class="detail" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="450">
                <img src="/webundangan/Alat/home.png" alt="" style="max-width:5%;">
                <span style="text-align:center"> Bertempat di :</span>
                <span style="font-size: 110%;margin-top: 5px;">Mesjid Raya Baiturrahman</span>
            </div>
            </div>
            <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" style="font-size:2em;margin: 10% 0;font-family: 'Leckerli One';">Preh Dara Baroe</p>
            <div class="wrapper">
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="50">
                    <div id="hari" class="value">00</div>
                    <div class="time-labe">Hari</div>
                </div>
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="150">
                    <div id="jam" class="value">00</div>
                    <div class="time-labe">Jam</div>
                </div>
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="250">
                    <div id="menit" class="value">00</div>
                    <div class="time-labe">Menit</div>
                </div>
                <div class="time-section" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="350">
                    <div id="detik" class="value">00</div>
                    <div class="time-labe">Detik</div>
                </div>
                <br><br>
                <div class="detail" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="250">
                <img src="/webundangan/Alat/kalender.png" alt="" style="display:block;max-width:5%;">
                <span style="text-align:center"> Sabtu, 7 Januari 2023</span>
            </div>
            <div class="detail" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="350">
                <img src="/webundangan/Alat/jam.png" alt="" style="max-width:5%;">
                <span style="text-align:center"> Pukul : 10.00 WIB - Selesai</span>
            </div>
            <div class="detail" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true" data-aos-delay="450">
                <img src="/webundangan/Alat/home.png" alt="" style="max-width:5%;">
                <span style="text-align:center"> Bertempat di :</span>
                <span style="font-size: 110%;margin-top: 5px;">Padang Tiji, Pidie, Aceh</span>
            </div>
    
       
                <iframe  data-aos="fade-in" data-aos-duration="1000" data-aos-once="true" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15889.060482907827!2d95.845935!3d5.3764866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040f32548af7cab%3A0xe774ff191b15825a!2zNcKwMjInMzkuMCJOIDk1wrA1MCc0Ny42IkU!5e0!3m2!1sid!2sid!4v1670824839009!5m2!1sid!2sid" width="90%" height="378" style="border:2px solid brown;border-radius:20px;margin-top: 5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                <div class="tombol">
                    <a href="https://goo.gl/maps/KkFZRrNTrYemQeUWA">
                        <span>Kunjungi Lokasi</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="hal6">
                <div class="imgcontainer">
                    <div class="imgwrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <img src="/webundangan/Alat/covid1.png" alt="" style="width: 100%; max-width:100px;">
                        <span>Cuci <br>Tangan  </span>
                    </div>
                    <div class="imgwrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="100">
                        <img src="/webundangan/Alat/covid2.png" alt="" style="width: 100%; max-width:100px;">
                        <span>Gunakan<br>Masker</span>
                    </div>
                    <div class="imgwrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="200">
                        <img src="/webundangan/Alat/covid3.png" alt="" style="width: 100%; max-width:100px;" >
                        <span>Jaga<br>Jarak</span>
                    </div>
                </div>

                <div class="kotakUcapan" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="font-family: 'Leckerli One';font-size: 1.5em;">Buku Tamu</p>
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">Berikan Do'a/Ucapan terbaik anda kepada kedua Mempelai</p>
                    <div class="kotakUcapanWrapper">
                        <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" style="color:white;text-align:left;margin-left:5%">Ucapan</p>
                        <form action="" spellcheck="false" method="POST">
                            <input type="text" id="nama" name="name" placeholder="Isi Nama" style="width: 90%;height:50%;font-size: 0.9em;" required><br>
                            <textarea name="t_komen" id="komentar" rows="5" placeholder="Isi Do'a Anda" style="font-family:'Poppins';font-size: 0.9em; overflow: hidden; overflow-wrap: break-word; resize: none; height: 181px; width: 90%;" required></textarea>
                            <select name="t_hadir" id="hadir" style="margin-top: 2%;width: 90%;background-color:white;font-family: 'Poppins';border-radius: 5px;" required>
                                <option value disabled selected>Konfirmasi Kehadiran</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir" >Tidak Hadir</option>
                            </select>
                            <input name="Submit" id="submitKomen" value="Kirim" type="submit">
                        </form>

                        <div id="komen" style="text-align:left; margin: auto 3%;padding:0 8px; border:2px solid #B08E68;border-radius:5px; height:400px;max-height:400px; width:95%;overflow: auto;">
                            <?php
                                $komen = fopen("komen.txt", "r+t");
                                $line_sebelumnya = "";
                                if($komen){
                                    while(($line = fgets($komen)) !== false){
                                        if($line != $line_sebelumnya){
                                            echo $line;
                                            $line_sebelumnya = $line;
                                        }
                                    }
                                };
                                fclose($komen);
    
                            ?>
                        
                        </div>

                    </div>                    
                </div>
                <div class="hadir" >
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" >Tiada Yang Dapat Kami ungkapkan Selain Rasa Terimakasih Dari Hati Yang Tulus Apabila Bapak/ Ibu / Saudara /i Berkenan Hadir Untuk Memberikan Do’a Restu Kepada Kami</p>
                </div>
                <div class="foot">
                    <p>@Copyright Mulkin Digital <br>WA: 0813-9254-6892</p>
                </div>
                
        </div> 
    </div>
                            </div>
                            </div>
                            </div>
  <script>
        let elem = document.getElementById("loader");
        

        function removeFadeOut( el, speed ) {
            var seconds = speed/1000;
            el.style.transition = "opacity "+seconds+"s ease";

            el.style.opacity = 0;
            setTimeout(function() {
                el.parentNode.removeChild(el);
            }, speed);
        }
        setTimeout(function() {
            removeFadeOut(elem, 3000);
            }, 3000);
        
    </script>
    <script src="/webundangan/Alat/Main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>


<?php

$name = "";
$mes = "";
if(isset($_POST['Submit'])){
    // print"<h1> Ur Comment has benn submitted!</h1>";
        $name = $_POST['name'];
        $mes = $_POST['t_komen'];
        if($name != ""){
            $waktu = date("H:i M d", strtotime(' + 6 hours'));
            // Get old comments
    
            $old = fopen("komen.txt", "r+t");
            $old_komen = fread($old,10240);
    
            #delete everything, write down new and old coment
            $write = fopen("komen.txt", "w+");
            $string = '<div style="background-color:#f3e3e3;padding:10px;border-radius:10px;box-shadow: 0px 10px 30px -5px rgb(0 0 0 / 50%);margin:10px auto"><span id="nama_komen" style="font-size:1-px; font-weight:700; ">'.$name.'</span> &emsp; &emsp; <span id="waktu_komen" style="font-size:12px;">'.$waktu.'</span><br><div style="margin-top:4px;border:2px solid #B08E68;border-radius: 5px; padding: 4px;font-size:12px">'.$mes."</div><br></div>\n".$old_komen;
            fwrite($write,$string);
            fclose($write);
            fclose($old);
            header("Location: /webundangan/index.php");
            echo "<meta http-equiv='refresh' content='0'>";
            die();
        }
    }
?>
