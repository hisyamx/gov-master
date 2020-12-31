    <!-- footer-28 block -->
    <section class="app-footer">
        <footer class="footer-28 py-5">
            <div class="footer-bg-layer">
                <div class="container py-lg-3">
                    <div class="row footer-top-28">
                        <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
                            <a class="navbar-brand mb-3" href="index.html">
                                <img src="{{asset('/assets')}}/images/logodprd.svg" alt="Logo DPRD" title="DPRD" style="height:35px;" />
                            </a>
                            <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
                        </div>
                        <div class="col-lg-8 row">
                            <div class="col-sm-4 col-6 footer-list-28">
                                <h6 class="footer-title-28">Link Terkait</h6>
                                <ul>
                                    <li><a href="/beranda">Beranda</a></li>
                                    <li><a href="/tentangdprd">Tentang DRPD</a></li>
                                    <li><a href="/gallery">Gallery</a></li>
                                    <li><a href="/kontak">Kontak</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-6 footer-list-28">
                                <h6 class="footer-title-28">Informasi</h6>
                                <ul>
                                    <li><a href="/agddprd">Agenda Sekretariat</a></li>
                                    <li><a href="/agddprd">Agenda DPRD</a></li>
                                    <li><a href="/agddprd">Rencana dan Laporan</a></li>
                                    <li><a href="/agddprd">Siaran Langsung</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
                                <h6 class="footer-title-28">Media Sosial</h6>
                                <ul class="social-icons">
                                    <li class="facebook"><a href="facebook.com/dprdkalimantan"><span class="fa fa-facebook"></span>DPRD Kalimantan</a></li>
                                    <li class="twitter"> <a href="twitter.com/dprdkalimantan"><span class="fa fa-twitter"></span>DPRD Kalimantan</a></li>
                                    <li class="youtube"> <a href="youtube.com/dprdkalimantan"><span class="fa fa-youtube-play"></span>DPRD Kalimantan</a></li>
                                    <li class="mail"> <a href="mailto:dprdkalimantan@gov.id"><span class="fa fa-envelope"></span>DPRD Kalimantan</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //footer-28 block -->

    <!-- Template JavaScript -->
    <script src="{{asset('/assets')}}/js/jquery-3.3.1.min.js"></script>

    <!-- theme changer js -->
    <script src="{{asset('/assets')}}/js/theme-change.js"></script>
    <!-- //theme changer js -->

    <!-- courses owlcarousel -->
    <script src="{{asset('/assets')}}/js/owl.carousel.js"></script>

    <!-- bootstrap -->
    <script src="{{asset('/assets')}}/js/bootstrap.min.js"></script>
    <!-- main -->
    <script src="{{asset('/assets')}}/js/main.js"></script>

</body>

</html>