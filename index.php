<!DOCTYPE html>
<html lang="tr">
<head>
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
    
    <section id="menu">
        <div id="logo">Getir|Götür</div>
        <nav>
            <a href="index.php"><i class="fas fa-home ikon"></i> Anasayfa</a>
            <a href="iletisim.php" target="_blank"><i class="fas fa-headphones-alt ikon"></i>İletişim ve Sipariş</a>
            <a href="panelgiris.php" target="_blank"><i class="fas fa-user-tie ikon"></i>Panel</a>
        </nav>
    </section>
    
    <section id="anasayfa">
        <div id="black">            
        </div>
        
    <div id="icerik">
        <h2>Getir|Götür</h2>
        <hr width=300 align=left>
        <p>Daha ucuz, daha sağlıklı, daha kolay bir alışveriş</p>  
        <div class="clock"></div>  
    </div>
        
    </section>
    
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Siz siparişinizi verin <br> Biz getirelim</h5>
            </div>
            
            <div id="sag">
                <span>Ö</span>
                <p id="psag">zellikle son dönemde yaşadğımız Covid-19 salgını hayatımızı felç etmiş durumda. İster istemez kalabalık ortamlarda girmeye çekinir olduk. Alışveriş yaptığımız marketler ve pazarlar da bu kalabalık ortamlardan ikisi sadece. Biz de en azından bu alanda sizlere kolaylık sağlamak istiyoruz.</p>
            </div>
            
        <div class="slider" id="slider">
            <a class='active' href="#"><img src="img/tarla2.jpg" alt="" /></a>
            <a href="#"><img src="img/tarla3.jpg" alt="" /></a>
            <a href="#"><img src="img/tarla4.jpg" alt="" /></a>
            <a href="#"><img src="img/tarla5.jpg" alt="" /></a>
        </div>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
            <filter id="lessblur"><feGaussianBlur stdDeviation="1"/></filter>
            <filter id="blur"><feGaussianBlur stdDeviation="5"/></filter>
            <filter id="noblur"><feGaussianBlur stdDeviation="0"/></filter>
        </svg>
        
        <p id="pson">Evinizde oturduğunuz yerden sebzelerinizi daha ucuza ve daha risksiz bir şekilde almanız mümkün. Size kendi mahsulümüz olan ürünlerimizi getiriyoruz. Hem de sizi yormadan!</p>    
        </div>
    </section>
    
    <section id="urunler">
        <div class="container">
            <h3>Ürünler</h3>
            
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.4>
                    <img src="img/marul.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">MARUL</h5>
                    <p class="cardp">Siparişinizi verdiğinizde tarlamızdan taze topladığımız marulu temizleyip yıkayıp evinize kadar getiriyoruz.</p>
                </div>
                
                <div class="card item" data-merge=1.4>
                    <img src="img/enginar.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">ENGİNAR</h5>
                    <p class="cardp">Siparişinizi verdiğinizde tarlamızdan taze topladığımız enginarı evinize kadar getiriyoruz.</p>
                </div>
                
                <div class="card item" data-merge=1.4>
                    <img src="img/so%C4%9Fan.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">SOĞAN</h5>
                    <p class="cardp">Siparişinizi verdiğinizde tarlamızdan taze topladığımız soğanı evinize kadar getiriyoruz.</p>
                </div>
                
                <div class="card item" data-merge=1.4>
                    <img src="img/domates.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">DOMATES</h5>
                    <p class="cardp">Siparişinizi verdiğinizde tarlamızdan taze topladığımız domatesi evinize kadar getiriyoruz.</p>
                </div>
                
                <div class="card item" data-merge=1.4>
                    <img src="img/biber.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">BİBER</h5>
                    <p class="cardp">Siparişinizi verdiğinizde tarlamızdan taze topladığımız biberi evinize kadar getiriyoruz.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">EKİP</h3>
            
            <div class="sutun-sol-sag">
                <img src="img/mehmetcan.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Mehmetcan KELEK</h4>
                <p class="ekipp">Tepeköy'de kendimize ait tarlamızda ekip diktiğimiz mahsulleri burada halka açarak daha sağlıklı ve hesaplı alışveriş imkanı sunuyoruz.</p>
                
                <div class="ekip-ikon">
                    <a href="https://www.instagram.com/mehmetcan_kelek/" target="_blank"><i class="fab fa-instagram social"></i></a>
                    <a href="mailto:mehmetcankelek009@gmail.com" target="_blank"><i class="fab fa-google social"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=905378700235" target="_blank"><i class="fab fa-whatsapp social"></i></a>
                </div>
            </div>
                       
            <div class="sutun">
                <img src="img/halil.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Halil YOLLU</h4>
                <p class="ekipp" style="font-size: 18px;">Siteyi yapan tasarlayan kişiyim. Ben ve arkadaşlarım buradan size hizmet vermekteyiz. Olası bir web sitesi işi ya da sorularınızda bana aşağıdaki sosyal medya hesaplarından ulaşabilirsiniz.</p>
                
                <div class="ekip-ikon">
                    <a href="https://www.instagram.com/halil.yll/" target="_blank"><i class="fab fa-instagram social"></i></a>
                    <a href="mailto:hlyollu@gmail.com" target="_blank"><i class="fab fa-google social"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=905075135929" target="_blank"><i class="fab fa-whatsapp social"></i></a>
                </div>
            </div>
            
             <div class="sutun-sol-sag">
                <img src="img/musa.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Musa AVCI</h4>
                <p class="ekipp" style="font-size: 15px;">Veterinerlik okumaktayım. Hayvancılıkla uğraşanlar sorunlarını aşağıdaki whatsapp kutucuğundan ya da sosyal medya kutucuklarından iletebilirler. İleride yapacağım ilaç üzerine hizmete de yine buradan ulaşabilirsiniz.</p>
                
                <div class="ekip-ikon">
                    <a href="https://www.instagram.com/musa.avciii/" target="_blank"><i class="fab fa-instagram social"></i></a>
                    <a href="mailto:musa99avci@gmail.com"><i class="fab fa-google social" target="_blank"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=905300737209" target="_blank"><i class="fab fa-whatsapp social"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <a href="#menu"><i class="fas fa-chevron-circle-up" id="up"></i></a>
    </footer>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>