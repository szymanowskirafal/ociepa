<?php include('global/include-function.php'); ?>
<html>
<head>   
    <?php head(); //implementacja funkcji head() z pliku functions.php ?>
</head>
<body>
    <?php menuShow(); //implementacja funkcji menuShow() z pliku functions.php ?>
    
    <span class="contener">
        
<?php
        //--------------- fullBackground() ---------------//
        $type = 'video';
        $background = 'ncncnc.mp4';
        $tittle = 'SOLIDNE HALE NAMIOTOWE';
        fullBackground($type, $background, $tittle);
//--------------------------------------------------------------------------------------
        
        //--------------- textWithIcon() ---------------//
        $text = 'Firma Grupa Ociepa jest częścią firmy Ociepa, ktora istnieje na rynku od 15 lat i ma na swoim koncie zrealizaowanych kilkadziesiąt inwestycji, cieszy się rownież sporym uznaniem wśrod licznej grupy swoich klientow.';
        $textButton = 'Więcej o firmie Grupa Ociepa';
        $linkButton = 'o-nas.php';
        textWithIcon($text, $textButton, $linkButton);
//--------------------------------------------------------------------------------------
        
        //--------------- creativeContener() ---------------//
        $bigText = 'Czym zajmuje się Grupa Ociepa?';
        $smallText = 'Specjalizujemy się w budowie obiektów na bazie konstrukcji stalowych. Naszym klientom oferujemy hale namiotowe izolowane i nieizolowane spersonalizowane do indywidualnych potrzeb. Specjalizujemy się w budowie obiektów na bazie konstrukcji stalowych. Naszym klientom oferujemy hale namiotowe izolowane i nieizolowane spersonalizowane do indywidualnych potrzeb.';
        $link = 'o-nas.php';
        $linkText = 'Zobacz nasze realizacje';
        $image = 'images/contener2.jpg';
        $orientation = 'L';
        creativeContener($bigText, $smallText, $link, $linkText, $image, $orientation);
//--------------------------------------------------------------------------------------
       
?>
        
        <span class="twoContenerAutoHeight">
            <span id="counter">
                <section class="counter-value" data-count="7">0</section>
                lata na rynku
            </span>
            <span id="counter">
                <section class="counter-value" data-count="17">0</section>
                zrealizowanych inwestycji
            </span>
            <span id="counter">
                <section class="counter-value" data-count="5940">0</section>
                m2 wybudowanych obiektow
            </span>
        </span>
        
        
        <span class="sliderBigImage">
            <span class="slider fade" style="background-image: url(images/contener4-left1.jpg);">
                <div>Hale izolowane</div>
            </span>
            <span class="slider fade" style="background-image: url(images/contener4-right1.jpg);">
                <div>Hale nieizolowane</div>
            </span>
            <span class="slider fade" style="background-image: url(https://th.bing.com/th/id/R.ad2ecb1e1ad945955533a7e79352bb5f?rik=Hh7TeynC0okKGw&pid=ImgRaw&r=0);">
                <div>Generalne wykonastwo</div>
            </span>
            <span class="slider fade" style="background-image: url(images/contener-grey-oferta.jpg);">
                <div><a href="projekty.php" style="color: white;">Projekty</a></div>
            </span>
        </span>
        
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("slider");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}
              slides[slideIndex-1].style.display = "block";
              setTimeout(showSlides, 3000);
            }
        </script>

        <span class="contener5"  data-aos="fade-up">
            Skontaktuj się z nami i uzyskaj bezpłatną wyceną swojej inwestycji oraz wszelką pomoc związaną z jej realizacją.
        </span>
        
<?php 
        
        //implementacja funkcji contenerGrey() z pliku functions.php ze zmiennymi nadanymi
        $contenerGrey_tittle = 'Jesteśmy dla Ciebie';
        $contenerGrey_text = 'Specjalizujemy się w budowie obiektów na bazie konstrukcji stalowych. Naszym klientom oferujemy hale namiotowe izolowane i nieizolowane spersonalizowane do indywidualnych potrzeb.';
        $contenerGrey_bottom = 'Poznaj naszą ofertę';
        $contenerGrey_link = 'Poznaj naszą ofertę';
        $contenerGrey_image = 'contener-grey-index.jpg';
        contenerGrey($contenerGrey_tittle, $contenerGrey_text, $contenerGrey_bottom, $contenerGrey_link, $contenerGrey_image);
        
        footer(); //implementacja funkcji footer() z pliku functions.php 
        
?>
    </span>
    
    
    
    
    
    
    
    
    
    
    
    
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    
    //--------------- pojawianie się elementow ---------------//
    AOS.init({
          offset: 400,
          duration: 500
      });
    
    
    
    //--------------- odliczanie ---------------//
    
    var a = 0;
    $(window).scroll(function() {

      var oTop = $('#counter').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {
              duration: 3000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }

            });
        });
        a = 1;
      }

    });
            
</script>
</body>
</html>