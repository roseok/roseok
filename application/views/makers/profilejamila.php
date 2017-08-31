
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
                <h2>Makers of Rose Stories</h2>
                <div class="separetor"></div>
            </div>


            <div class="hed_in1xx">
<font color="red" size="5"><div align="left">
               JAMILA WINWOOD</div></font>
                <br>
                <img src="images/bannerbg_TEMP.jpg">
                <div align="left">Foto: Marc Haers</div>
                <br><br>
            <p align="justify">
<b>
                Lange tijd was Jamila Winwood (1981) op zoek naar de gezonde levensstijl die het beste bij haar past. Ze wilde kunnen genieten van al het lekkers dat de Marokkaanse keuken te bieden heeft, en daar de beste elementen van gebruiken voor een levensstijl waarbij gezond eten en genieten hand in hand gaan. Samen met ROSE stories maakte ze het kookboek Van Tajine tot Havermout, een prachtige verzameling gezonde recepten met een Marokkaans tintje. 
</b><br><br>
                Jamila Winwood is een succesvolle health coach & lifestyle blogger. Op haar blog inspireert ze haar volgers om gezond te eten. Ze laat zien hoe je met heel veel plezier en liefde onbewerkte ingrediënten omtovert tot de lekkerste gerechten voor de mensen om je heen. Het liefst reist Jamila de hele wereld af om zich te laten inspireren door verschillende culturen en elementen daarvan te gebruiken voor het creëren van nieuwe gerechten.
                <br><br>
               Hoekjes van geluk is haar debuut als auteur, maar het schrijven zit Maryam al langer in het bloed. Een jaar voordat ze met het kinderboek begon, schreef ze haar eigen monoloog, Een Teruggedachte. Toch is het schrijven van Hoekjes van Geluk een van de meest bijzondere dingen die Maryam ooit heeft gedaan. Ze vindt het zoveel spannender dan op een set staan en acteren, omdat het zo persoonlijk is.
                <br><br>
                Het allerliefst deelt ze dat met anderen: “Mijn doel is om vrouwen te inspireren en te motiveren om een gezonde levensstijl na te streven en te genieten van het leven. Ik wil niet alleen Marokkaans-Arabische en andere etnische vrouwen een gezonde variatie van de Marokkaanse keuken laten zien, ook wil ik de Nederlandse vrouwen inspireren om te genieten van culinaire Marokkaanse aspecten. Ik geloof in goed, puur, gezond en lekker!”

 
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