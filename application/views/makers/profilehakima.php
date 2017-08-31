
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
               HAKIMA ELOUARTI</div></font>
                <br>
                <img src="images/HAKIMA ELOUARTI.jpg">
                <div align="left">Foto: Marc Haers</div>
                <br><br>
            <p align="justify">
<b>
                De veelzijdige Hakima Elouarti (1977) vertelt verhalen voor tv, theater en film. Voor ROSE stories vertelt ze het verhaal van de avontuurlijke Mootje. Ze is geboren en getogen in de Amsterdamse Kolenkit-buurt en studeerde Film- en Televisiewetenschappen aan de Universiteit van Amsterdam. De filosofische kant van de studie sprak haar het meest aan: “Film leert je heel veel over het leven.”
</b><br><br>
               Na haar studie gaat Hakima aan de slag als regieassistent en verzorgt ze scriptcontinuïteit voor producties als Waar is het paard van Sinterklaas? en de tv-serie Shouf Shouf. Ze komt terecht in Kind en Kleur, het scenariocoachingstraject van het Mediafonds, waar de focus ligt op de ontwikkeling van kindertelevisie. Hieruit komt haar korte kinderfilm Mina Moes voort, die zowel op het Cinekid kindermediafestival als bij de NPO op televisie wordt vertoond. Hakima stroomt door naar een coachingstraject voor toneelschrijven aan het MC Theater. Haar stuk De wereld van karton wordt geselecteerd voor het Hollandse Nieuwe Festival. 
                <br><br>
               In Hakima’s werk staat het verhaal altijd voorop: ze weet haar publiek te boeien met stukken waarin jonge personages met een niet-westerse achtergrond de hoofdrol spelen, zonder dat die achtergrond het daadwerkelijke verhaal van de personages overstemt. Mede door Hakima’s eigen achtergrond zijn verschillende culturen in haar verhalen een vanzelfsprekendheid: het is een natuurlijke en authentieke manier van storytelling, die zij als geen ander beheerst.
                <br><br>
               “Mootje is het eerste prentenboek dat ik schrijf. Spannend, het is voor mij een nieuwe manier van verhalen vertellen en meteen een vrij persoonlijk project: ik put veel uit mijn eigen jeugdervaringen. Ik ben opgegroeid in een gezin met negen kinderen, dus het was bij ons thuis altijd lekker druk. Heel gezellig, maar je bent geen moment alleen. Even op mezelf zijn was er eigenlijk nooit bij. En dat is zo belangrijk: tijd om na te denken, om te reflecteren, om even weg te dromen! Onze heldin Mootje, een soort Oosterse Pippi Langkous, wil dat graag en ik denk dat dit een behoefte is die heel universeel en herkenbaar is, uit welke leeftijdscategorie en cultuur je ook komt. Eigenlijk schuilt er een Mootje in ons allemaal.”
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