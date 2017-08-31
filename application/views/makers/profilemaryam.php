
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
               MARYAM HASSOUNI</div></font>
                <br>
                <img src="images/MARYAM HASSOUNI.jpeg">
                <div align="left">Foto: Marc Haers</div>
                <br><br>
            <p align="justify">
<b>
                Het grote publiek kent actrice Maryam Hassouni vooral van haar rol in Dunya & Desie. Maryams carrière bestaat echter uit nog veel meer hoogtepunten: zo won ze een Emmy Award voor beste actrice voor haar rol in de telefilm Offers, speelt ze een van de hoofdrollen in de films Soof en Debiel en is ze te zien in de televisieserie Flikken Rotterdam.
</b><br><br>
                Het voorleesboek Hoekjes van geluk kan aan Maryams inmiddels indrukwekkende cv worden toegevoegd. In een beeldend verhaal laat ze pechvogel Sam in verschillende magische werelden ontdekken dat geluk overal te vinden is. Het verhaal is geïnspireerd op Maryams zoektocht naar geluk in een moeilijke periode. “Ik heb mezelf op een heel kinderlijke manier eraan herinnerd wat voor mij nou eigenlijk mijn geluksmomenten zijn geweest. Ik herinnerde me dat geluk voelt alsof je hart wordt gekieteld en ook dat ik van suikerspinnen altijd heel gelukkig werd – en nog steeds!”
                <br><br>
               Hoekjes van geluk is haar debuut als auteur, maar het schrijven zit Maryam al langer in het bloed. Een jaar voordat ze met het kinderboek begon, schreef ze haar eigen monoloog, Een Teruggedachte. Toch is het schrijven van Hoekjes van Geluk een van de meest bijzondere dingen die Maryam ooit heeft gedaan. Ze vindt het zoveel spannender dan op een set staan en acteren, omdat het zo persoonlijk is.
                <br><br>
                Met dit boek wil Maryam kinderen vertellen dat iedereen momenten kent die niet leuk zijn. “Ook al lijkt het alsof je er niet uitkomt: het komt uiteindelijk allemaal goed. Je bent niet de enige pechvogel.” Ze wil daarnaast dat iedereen zich herkent in dit verhaal, of je nu Marokkaans, Nederlands of Surinaams bent. “Ik zie dat er echt een gebrek is aan kinderboeken die een werkelijke weerspiegeling zijn van Nederland. Sam is universeel. Ieder kind moet zich in hem kunnen herkennen.”
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