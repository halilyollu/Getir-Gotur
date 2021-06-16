<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    
    <meta charset="UTF-8">
    <title>Anasayfa | GetirGötür</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/clock.js">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossoring="anonymous"></script>
    <script src="js/slider.js"></script>
    <script src="js/clock.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    
    <section id="iletisim">
        
        <div class="container">
            <h3 id="h3iletisim">İletişim ve Sipariş</h3>
                
                <form action="iletisim.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>
                        
                        <textarea name="mesaj" id="mesaj" cols="30" placeholder="Mesajınızı Veya Siparişinizi Yazınız" rows="10" required class="form-control"></textarea>
                        
                        <input type="submit" value="Gönder">
                    </div>
                    
                    <div id="adres">
                        <h4 id="adresbaslik">Adres : </h4>
                        <p class="adresp">Güzelhisar Mahallesi</p>
                        <p class="adresp">Kıbrıs Caddesi</p>
                        <p class="adresp">Erkul Apartmanı No:51</p>
                        <p class="adresp">0507 513 5929</p>
                        <p class="adresp">Email : hlyollu@gmail.com</p>
                    </div>
                </div>
                </form>
                
                <footer>
                    <div id="copyright">2021 | Tüm Hakları Saklıdır</div>
                    
                    <div id="socialfooter">
                    <a href="https://www.instagram.com/halil.yll/" target="_blank"><i class="fab fa-instagram social"></i></a>
                    <a href="mailto:hlyollu@gmail.com" target="_blank"><i class="fab fa-google social"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=905075135929" target="_blank"><i class="fab fa-whatsapp social"></i></a>
                    </div>
                </footer>
        </div>
    </section>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>

<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    
    $ekle="INSERT INTO siparis (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    
    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız Başarı İle Gönderilmiştir')</script>";
    }
    
    else{
        echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu')</script>";
    }
}
?>
