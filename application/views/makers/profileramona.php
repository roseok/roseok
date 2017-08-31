
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
                RAMONA TREFFERS</div></font>
                <br>
                <img src="images/RAMONA TREFFERS.jpg">
                <div align="left">Foto: Amena Khan</div>
                <br><br>
            <p align="justify">
<b>
                Illustrator Ramona Treffers is voor ROSE stories aan de slag gegaan om Hoekjes van geluk tot leven te brengen. Haar werk zit vol dromerige en magische illustraties, waarin kleur en licht vaak een belangrijke rol spelen. Normaal werkt Ramona vooral aan illustraties voor animatiefilms en games. Het maken van een boek is echt weer iets anders, vindt ze. “Je moet niet alleen rekening houden met het verhaal an sich, maar ook met het feit dat er tekst in jouw illustraties worden geplaatst.”
</b><br><br>
                Treffers herkent zich enorm in het verhaal van Sam in Hoekjes van geluk. Het gevoel van een beetje ‘bleh’ thuiskomen, om vervolgens op zoek te gaan naar fijne plekjes en je fantasie er helemaal op loslaten. Ze vond het als kind ook leuk om fantasiewerelden te creëren. In feite doet Ramona dat nog steeds met het illustreren. Dat vindt ze ook het leuke eraan: alles kan.
                <br><br>
                Ramona’s creatieve proces begint meestal met het maken van enkele schetsen in haar schetsboek. “Gewoon wat ideeën uitwerken, vooral wat betreft de karakters. Zo ben ik voor Hoekjes van Geluk eerst begonnen met een schets van Sam. Ik had wel een beetje een idee hoe hij eruit moest komen te zien –  een stoer jongetje en een echte onderzoeker die graag op expeditie gaat – maar in de praktijk is het vaak 300 keer tekenen, uitgummen en nog een keer tekenen.”
                <br><br>
                Naast Hoekjes van Geluk werkt(e) Ramona aan diverse animatiefilms zoals Vrije Vogel (2016) en Camouflage (2019). Ze studeerde in 2012 als illustrator af aan de AKV St. Joost in Breda, waar zij een nominatie voor de Sint Joostpenning ontving voor haar afstudeerproject De Weg Terug. In de toekomst hoopt Ramona verder te kunnen met zowel het illustreren voor animatiefilms en games als voor kinderboeken.
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
</html>