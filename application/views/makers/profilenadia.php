
<style>
.hed_in1xx{
width: 60%;

    align-items: center;
    align-self: center;
margin: 10px auto;
/*margin-left: 20px;*/
text-align: center;
display : block;
vertical-align: top;

}

.containerx{
width: 100%;
text-align: center;
display : inline-block;
vertical-align: top;
}
</style>
<br><br>
<section id="special" class="special sections">
    <div class="container">
        <div class="row">
            <div class="head_title text-center wow slideInLeft" data-wow-duration="1.5s">
                <h2>Makers of Rose stories</h2>
                <div class="separetor"></div>
            </div>


            <div class="hed_in1xx">
<font color="red" size="5"><div align="left">
               NADIA ZEROUALI</div></font>
                <br>
                <img src="images/NADIA ZEROUALI.jpg">
                <div align="left">Foto: Marc Haers</div>
                <br><br>
            <p align="justify">
<b>
                Het leven van Nadia (1975) draait om eten en drinken: thuis met familie en vrienden, op haar werk als culinair professional en tijdens haar reizen, waar ze inspiratie opdoet en heerlijke ingrediënten en gerechten ontdekt. ROSE stories wilde dan ook dolgraag met Nadia samenwerken voor het kookboek Melk & Dadels – 100 geheime recepten van Marokkaanse moeders.
</b><br><br>
                Opgegroeid in een groot Marokkaans gezin in het oosten van het land stond Nadia als kind al veel in de keuken. Na studies aan de Hotelschool en in de marketing en communicatie, heeft zij zich in de loop der jaren ontwikkeld tot een veelgevraagd expert in de Mediterrane en Arabische keuken. Uit passie voor de Arabische keuken zijn er in de loop der jaren vijf Arabia-kookboeken geboren, die Nadia samen met hartsvriendin Merijn Tol samenstelde. Wellicht ken je haar ook uit bladen als de VIVA en delicious. Bovendien is ze geregeld te zien op televisie, onder andere bij 24Kitchen. 
                <br><br>
              “Melk & Dadels is een project dat heel dicht bij mij staat. Omdat ik zelf Marokkaanse ben, ken ik de meeste tradities en gebruiken (en niet te vergeten: de taal!), waardoor ik heel ontspannen met de twintig trotse Melk & Dadels-moeders kon meekoken.

Ik heb veel respect voor deze vrouwen: ze hebben moeder- en vaderland achter zich gelaten op zoek naar een betere toekomst voor hun kinderen. Ze zijn altijd positief gebleven en elke dag heerlijk blijven koken! Koken voor je kinderen is in hun ogen geen verwennerij maar een vanzelfsprekendheid, een daad van liefde.
                <br><br>
                Daarnaast zijn de moeders erg creatief in de keuken: ze roeien met de riemen die ze hebben. Ook als ze niet alle juiste ingrediënten voorhanden hebben, weten ze er altijd iets bijzonders met een Marokkaans tintje van te maken.

Aan Melk & Dadels werken was voor mij één groot feest en bovendien heel erg leerzaam. Ik hoop dat onze lezers even enthousiast zijn: deze verhalen zijn te speciaal en dit culinaire erfgoed is te mooi om verloren te laten gaan.”
            </p>
            </div>
            <br><br>

                






</section>



<div class="row">
                <div class="copyright_text_area">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single_footer text-right wow zoomIn" data-wow-duration="2s">
                            <a href="https://www.facebook.com/theworldofrosestories/" class="fa fa-facebook" target="frame1"></a>
                            <a href="https://twitter.com/theworldofrose/" class="fa fa-twitter" target="frame1"></a>
                            <!--                            <a href="#" class="fa fa-snapchat-ghost" target="frame1"></a>-->
                            <a href="https://www.instagram.com/theworldofrosestories/" class="fa fa-instagram" target="frame1"></a>
                            <a href="#" class="fa fa-pinterest" target="frame1"></a>

                            <a href="#" class="fa fa-youtube" target="frame1"></a>
                            <!-- <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p> -->
                        </div>
                    </div>

                    <div class="w3-container" class="col-sm-12">
                        <button onclick="topFunction()" id="myBtn" title="Go to top" class="w3-button w3-xlarge w3-circle w3-red w3-card-4"
                                style="float:right;
                                            position: relative;
                                            bottom: 133px;">up
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </footer>


<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
    }
    window.onscroll = function() {scrollFunction()};
    // add function for scrollup
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<!-- STRAT SCROLL TO TOP -->
<!-- <button type="button" class="btn btn-link">Link</button> -->
<!-- <div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>

</div> -->

<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->






<script type="text/javascript" src="js/jquery/jquery.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript" src="js/nivo-lightbox/nivo-lightbox.min.js"></script>

<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>



<script type="text/javascript" src="js/jquery-easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/wow/wow.min.js"></script>
</body>
</html>s