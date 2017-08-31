
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
               ROSA VITALIE</div></font>
                <br>
                <img src="images/ROSA VITALIE.jpg">
                <div align="left">Foto: Marc Haers</div>
                <br><br>
            <p align="justify">
<b>
                Rosa Vitalie (1980) is een geboren en getogen Amsterdamse, waar ze in een bont gezelschap opgroeide en een liefde ontwikkelde voor andere culturen. Haar passie en talent voor creatie, illustratie en mooi beeld kwamen tot wasdom tijdens haar opleiding Grafisch & Typografisch Ontwerp aan de Koninklijke Academie van Beeldende Kunsten in Den Haag. Sinds haar afstuderen in 2004 heeft Rosa voor veel verschillende klanten gewerkt in de commerciële en non-profit sector. Voor ROSE stories is ze zowel verantwoordelijk voor de illustraties van Mootje, als voor de vormgeving van het voorleesboek Hoekjes van geluk en de kookboeken Melk & Dadels en Maancake & Jasmijn.
</b><br><br>
                Over de jaren heen heeft Rosa een voorkeur ontwikkeld voor opdrachten waarmee ze het bewustzijn voor de schoonheid van dieren, planten en culturen kan versterken. De laatste jaren illustreert Rosa regelmatig voor het NRC Handelsblad. Ze verzorgde de illustraties voor het boek En de mens speelt met de tijd van Allerd Stikkers over het ontstaan van het heelal, het leven en het bewustzijn. Bij ROSE stories heeft Rosa de vormgeving van Melk & Dadels – 100 geheime recepten van Marokkaanse moeders op zich genomen, alsmede van het Chinese vervolg erop. Daarnaast heeft ze de tekst van Maryam Hassouni en de illustraties van Ramona Treffers samengebracht in de vormgeving van het voorleesboek Hoekjes van geluk. Naast deze prettige samenwerking is Rosa één van de vrouwen achter Mootje.
                <br><br>
              Rosa over Mootje: “Ik heb een relatie met een man uit Zuid-Duitsland. Dat klinkt heel dichtbij, maar de cultuurverschillen kunnen soms enorm zijn. We wonen samen met ons kindje in Amsterdam en ik zie de blijdschap die hij voelt als hij zijn eigen cultuur herkent in de winkel, in boeken, in het dagelijks leven. Hij deelt dat dan ook maar al te graag met ons! De behoefte om je kinderen een stukje van jezelf mee te geven heeft ieder mens, je kunt dat eigenlijk niet ontkennen. Daarom vind ik Mootje zo’n belangrijk project: je achtergrond en roots zijn prachtig, ik hoop dat zoveel mogelijk kinderen dat meekrijgen.”
                <br><br>
                
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