
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
                <h2>FILM & TV & Youtube</h2>
                <div class="separetor"></div>
            </div>


            <div class="hed_in1xx">
<font color="red" size="5"><div align="left">
                MY HIJAB, MY BUSINESS</div></font>
                <br>
                <img src="images/AmenaRoomPic-1100x733.jpg">
                <div align="left">Foto: Amena Khan</div>
                <br><br>
            <p align="justify">
<b>
                ROSE stories heeft in samenwerking met de NTR en Moslim Omroep een documentaire geproduceerd over de ultieme storytellers van deze tijd: vloggers. Populairder dan popsterren, geraffineerder dan topmodellen en invloedrijker dan glossy’s: vloggers zijn de supersterren van de nieuwe generatie. YouTube en Instagram zijn hun domein en creativiteit hun kapitaal.
</b><br><br>
                My Hijab, My Business focust zich op het persoonlijke en professionele leven van een drietal populaire mode- en beauty-vloggers: Amena Khan, Nura Afia en Ikram Aqantos.  Ze zijn jonge, hijab-dragende vrouwen die allen geld verdienen met hun eigen video’s. Hun YouTube-kanalen lijken simpele hobby’s van jonge modepopjes, maar in werkelijkheid schuilt er een grote commerciële organisatie achter, die van vlogging een miljoenen-business maakt.
                <br><br>
                Deze unieke documentaire, gemaakt door een all women crew, vertelt specifiek het verhaal van vrouwelijke vloggers die een hijab dragen. Hoe beïnvloedt de hijab hun online business en hoe plaatsen zij zich met dit kenmerk in de (online) wereld van mode en beauty?
                <br><br>
                De drie vloggers ontvouwen zich als onafhankelijke, echte ondernemers, invloedrijke trendsetters met miljoenen volgers, soms ondersteund door de grootste sponsors uit de wereld van fashion en beauty. Hoe is het hen gelukt om een online imperium op te bouwen? Hoe ziet hun dagelijks leven eruit? Hoe verdienen ze hun geld? Wat zijn hun idealen? Waarom kiezen ze voor een leven in de schijnwerpers? En hoe denkt hun omgeving hierover?
            </p>
            </div>
            <br><br>

                <?php   foreach($res as $row):?>
                    <div class="hed_in1xx">

                <?=$row->youtube_titel?>
                <br><br>
                <iframe width="400" height="300" src=<?=$row->youtube_link?> frameborder="0" allowfullscreen></iframe>

                <br><br>
                <?=$row->youtube_discription?>
                <br>
            </div>
                    <hr width="100%" align="center">

                <?php        endforeach;?>






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