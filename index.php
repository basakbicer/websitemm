<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>

<body>

    <section id="menu">
        <div id="logo">Paylaştıkça</div>
        <nav>
            <a href=""><i class="fas fa-home ikon"></i>Anasayfa</a>
            <a href=""><i class="fas fa-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fas fa-graduation-cap ikon"></i>Eğitimler</a>
            <a href=""><i class="fas fa-map-pin ikon"></i>İletişim</a>

        </nav>

    </section>

    <section id="anasayfa">
        <div id="black">

        </div>

        <div id="icerik">
            <h2>Paylaştıkça</h2>
            <hr width="300" align="left">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit laboriosam aliquam, maiores architecto
                earum voluptates, hic illum quibusdam velit perferendis deleniti reiciendis debitis atque ex mollitia
                amet
                cum! Sed, obcaecati!</p>
        </div>
    </section>

    <section id="hakkimizda">

        <h3>Hakkımızda</h3>

        <div id="container">
            <div id="sol">
                <h5 id="h5sol">Lorem cnkdfkcfmwaşw nkankcçq knşlfşqwflşq</h5>
            </div>

            <div id="sag">
                <span>L</span>
                <p id="sagp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta labore, saepe
                    earum iure enim molestias amet impedit id perspiciatis quasi quisquam. Ipsam, aliquid sint eaque
                    tempora laborum temporibus magnam.</p>
            </div>

            <img src="img/about.jpg" alt="" class="img-fluid mt100">

            <p id="pson">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur ea hic soluta at, nulla
                voluptatum nesciunt reiciendis! Quidem nulla dolorem illo, nisi officiis fugit blanditiis doloremque,
                quia illum nemo consequatur.
            </p>
        </div>



    </section>

    <section id="fotograflar">
        <div class="container">
            <h3>Eğitimler</h3>

            <div class="owl-carousel owl-theme">


                <div class="card item" data-merge=1.5>
                    <img src="img/fotoğraflar/gül.JPG" alt="" class="img-fluid">
                    <h5 class="baslikcard">html5 ve css3 eğitimi</h5>
                    <p class="cardp">Gül
                    </p>
                </div>


                <div class="card item" data-merge=1.5>
                    <img src="img/fotoğraflar/saklıkent.JPG" alt="" class="img-fluid">
                    <h5 class="baslikcard">html5 ve css3 eğitimi</h5>
                    <p class="cardp">Saklıkent
                    </p>
                </div>


                <div class="card item" data-merge=1.5>
                    <img src="img/fotoğraflar/saldagölü.JPG" alt="" class="img-fluid">
                    <h5 class="baslikcard">html5 ve css3 eğitimi</h5>
                    <p class="cardp">Salda Gölü
                    </p>
                </div>




            </div>
        </div>
    </section>



    </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>


            <form action="index.php" method="POST">
                <div id="iletisimopak">
                    <div id="formgrup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="mail adresiniz" required class="form-control">
                            <input type="text" name="Konu" placeholder="Konu başlığı" required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" cols="30" placeholder="Mesaj giriniz" rows="10" required
                            class="form-control"></textarea>

                        <input type="submit" value="Gönder">
                    </div>
                    <div id="adres">

                        <h4 id="adresbaslik">Adres : </h4>
                        <p class="adresp">Mehmet akif ersoy mah.</p>
                        <p class="adresp">Akyıldıuz cad</p>
                        <p class="adresp">oğuz bey sokak no:123</p>
                        <p class="adresp">0212 389 99 99</p>
                        <p class="adresp">email:zjanx@gmail.com</p>



                    </div>
                </div>
            </form>

            <footer>

                <div id="copyright">2022 tüm hakları saklıdır</div>
                <div id="socialfooter">
                    <a href="#"><i class="fab fa-brands fa-linkedin social"></i></a>
                    <a href="#"><i class="fab fa-brands fa-twitter social"></i></a>
                    <a href="#"><i class="fab fa-brands fa-github social"></i></a>
                </div>

                <a href="#menu">
                    <i class="fas fa-angle-up" id="up"></i>
                </a>
            </footer>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>

    <script src="owl/script.js"></script>
</body>

</html>

<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"],))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES
    ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)==TRUE)
    {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir.')</script>"; 
    }

    else{
        echo "<script>alert('Mesajınız gönderilirken hata oluştu.')</script>";
    }



}





?>