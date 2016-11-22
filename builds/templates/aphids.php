<div class="container-fluid" >
    <!--    MODAL FOR PHOTOS-->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/purpleAphid.mp4" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/purpleAphid1.mov" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/purpleAphid2.mov" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="/micropics/builds/images/Microscope Photos/Frog/Tadpole1.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="/micropics/builds/images/Microscope Photos/Frog/Tadpole2.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="/micropics/builds/images/Microscope Photos/Frog/Tadpole3.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <!--                <p id="caption"></p>-->
            </div>

            <div class="column">
                <span class="demo" onclick="currentSlide(1)">1</span>
            </div>

            <div class="column">
                <span class="demo" onclick="currentSlide(2)">2</span>
            </div>

            <div class="column">
                <span class="demo" onclick="currentSlide(3)">3</span>
            </div>

            <div class="column">
                <span class="demo" onclick="currentSlide(4)">4</span>
            </div>
            <div class="column">
                <span class="demo" onclick="currentSlide(5)">5</span>
            </div>

            <div class="column">
                <span class="demo" onclick="currentSlide(6)">6</span>
            </div>
        </div>
    </div>
    <!--    -->
    <div class="row">
        <div class="hidden-xs col-sm-3" style="position: fixed; float:left;">
            <ul class="categories">
                <h2>Categories</h2>
                <li ui-sref="amphibians"><a><h5>Amphibians</h5></a></li>
                <li ng-click="dropdown2=!dropdown2"><a><h5>Bugs <span class="caret"></span></h5></a></li>
                <ul ng-show="dropdown2">
                    <li ui-sref="aphids"><a>Aphids</a></li>
                    <li><a>Bees</a></li>
                    <li><a>Caterpillars</a></li>
                    <li><a>Centipede</a></li>
                    <li><a>Ladybug</a></li>
                    <li><a>Moth</a></li>
                    <li><a>Spiders</a></li>
                    <li><a>Ticks</a></li>
                    <li><a>Unknown</a></li>
                </ul>
                <li><a><h5>Human <span class="caret"></span></h5></a></li>
                <li><a><h5>Micro-invertebrates<span class="caret"></span></h5></a></li>
                <li><a><h5>Macro-invertebrates<span class="caret"></span></h5></a></li>
                <li><a><h5>Plants<span class="caret"></span></h5></a></li>
                <li><a><h5>Random<span class="caret"></span></h5></a></li>
                <li><a><h5>Sea Life<span class="caret"></span></h5></a></li>
            </ul>
        </div>
        <div class="col-sm-9" style="float:right;">
            <!--Featured Photo-->
            <div class="col-xs-12 col-sm-10 ">
                <span class="photo-of-day">Amphibians |  Foothill Yellow-legged Frog</span>
                <div class="main-img">
                    <img src="/micropics/builds/images/logos/LogoWhite.png" height="55px" style="position:absolute; right:0;margin:8px 42px 0 0">
                    <!--                    <img src="/micropics/builds/images/Microscope Photos/Frog/Froglet1.jpg" width="100%">-->
                    <video width="100%" height="auto" controls>
                        <!--                        <source src="" type="video/mp4">-->
                        <source src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/greenbugs2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="description">
                    <strong> Description:</strong> This frog was found in Santa Cruz in Northern California, and is most-likely a
                    <strong> Foothill Yellow-legged Frog</strong>.
                    Measured at 1.2in in size, appears to be a juvenile. The photos below are of the same species of frog but as a tadpole with both front and hind legs and a tadpole with no legs.
                    For more photos and videos of this frog <a>click here</a>.
                </div>
            </div>
            <!-- Your share button code -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5812f025935d1de8"></script>
            <!--            <a href="https://twitter.com/share" data-show-count="false"><img class="twitter-logo" src="/micropics/builds/images/Twitter_logo_initial.png"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->
            <!--            <br>-->
            <!--            <a href="http://www.facebook.com/sharer.php?u=www.micro-pics.com&t=title"><img class="facebook-logo" src="/micropics/builds/images/facebook-logo.png"></a>-->
        </div>
    </div>
    <div class="row">
        <div class="hidden-xs col-sm-3"></div>
        <!--Featured Photo-->
        <div class="col-sm-9">
            <h3 class="more-photos">More Photos</h3>
            <div class="col-xs-12 col-sm-4" data-aos="flip-up">
                <div class="photo-box" onclick="openModal();currentSlide(1)">
                    <img src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/purpleAphid.mp4"
                         width="100%">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4" data-aos="flip-up">
                <div class="photo-box"  onclick="openModal();currentSlide(2)">
                    <img src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/purpleAphid1.mov"
                         width="100%">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4" data-aos="flip-up">
                <div class="photo-box"  onclick="openModal();currentSlide(3)">
                    <img src="/micropics/builds/images/Microscope Photos/Bugs/Aphids/purpleAphid2.mov"
                         width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" hidden-xs col-sm-3"></div>
        <div class="col-sm-9">
            <div class="col-xs-12 col-sm-4" data-aos="flip-up">
                <div class="photo-box"  onclick="openModal();currentSlide(4)">
                    <img src="/micropics/builds/images/Microscope Photos/Frog/Tadpole1.jpg"
                         width="100%">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4" data-aos="flip-up">
                <div class="photo-box"  onclick="openModal();currentSlide(5)">
                    <img src="/micropics/builds/images/Microscope Photos/Frog/Tadpole2.jpg"
                         width="100%">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4" data-aos="flip-up">
                <div class="photo-box"  onclick="openModal();currentSlide(6)">
                    <img src="/micropics/builds/images/Microscope Photos/Frog/Tadpole3.jpg"
                         width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="hidden-xs col-sm-3"></div>
        <div class="col-xs-12 col-sm-9">
            <h2 class="spider-title">Amphibians Population Mapping</h2>
            <img src="/micropics/builds/images/informationals/amphibiansLocation.png" width="100%">
            <div class="did-you-know">
                <h2>Did you know?</h2>
                <p><strong>Some frogs don't have a tadpole stage!</strong>
                    <br>
                    "Although the vast majority of frogs and toads go through the tadpole stage, there are exceptions to every rule and there are several families of frogs in with direct development from egg to froglet.
                    In some frogs the eggs are carried by the mother until froglets emerge.
                    One such frog is the very bizarre looking, surinam toad, Pipa pipa, in which fertilized eggs are rolled onto the frog’s back where they become enclosed in tissue, and develop under the frog’s skin, until little froglets emerge at the end of the cycle."
                </p>
            </div>
        </div>
    </div>
</div>

