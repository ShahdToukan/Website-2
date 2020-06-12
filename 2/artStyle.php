<?php
session_start();
include "connect.php";
include "nav.php";

?>
<!DOCTYPE html>
<html>
<head>
        <section class="types">
                    <h2> Most Famous Art Styles</h2>
                <ul class="showcase">
                    <li>
                        <figure class="art-photo">
                            <a href="info.html">
                                <img src="assets/images/futurism.jpg" alt="Futurism" >
                            </a>
                                <figcaption> Futurism</figcaption>
                            </figure>
                        <figure class="art-photo">
                                <img src="assets/images/cubism.jpg" alt="Cubism" >
                                <figcaption> Cubism </figcaption>
                            </figure>
                    </li>
                    <li>
                        <figure class="art-photo">
                             <img src="assets/images/surrealism.jpg" alt="Surrealism" >
                                <figcaption> Surrealism</figcaption>
                            </figure>
                        <figure class="art-photo">
                                <img src="assets/images/pop.jpg" alt="Pop Art" >
                                <figcaption> Pop Art</figcaption>
                            </figure>
                    </li>
                        <li>
                            <figure class="art-photo">
                                <img src="assets/images/C027D14D.jpeg" alt="Pop Art" >
                                <figcaption>Modern</figcaption>
                            </figure>
                        </li>
                    </ul>
        </section>
        <section class="section-features mt-5">
            <div class="row">
                <h2> Functions of art </h2>
                <p class="long-copy mt-5">
                    Motivated purposes of art refer to intentional, conscious actions on the part of the artists or creator. These may be to bring about political change, to comment on an aspect of society, to convey a specific emotion or mood, to address personal psychology, to illustrate another discipline, to (with commercial arts) sell a product, or simply as a form of communication.
                </p>
                <p class="long-copy mt-5">
                    -Art as a "free zone", removed from the action of the social censure. Unlike the avant-garde movements, which wanted to erase cultural differences in order to produce new universal values, contemporary art has enhanced its tolerance towards cultural differences as well as its critical and liberating functions (social inquiry, activism, subversion, deconstruction ...), becoming a more open place for research and experimentation.
                </p>
                <p class="long-copy mt-5">
                    -Art for social inquiry, subversion and/or anarchy. While similar to art for political change, subversive or deconstructivist art may seek to question aspects of society without any specific political goal. In this case, the function of art may be simply to criticize some aspect of society.
                </p>


            </div>

        </section>

        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Company<span>logo</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">Company Name © 2020</p>

                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>

            </div>

            

        </footer>
</body>
</html>