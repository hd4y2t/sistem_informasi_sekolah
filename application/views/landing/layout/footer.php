<!-- footer -->

<?php foreach ($profil->result() as $row) { ?>
    <footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5 pb-4">
            <div class="container pt-md-4">
                <div class="row footer-top-29">
                    <div class="col-md-5 footer-list-29 pe-xl-5">
                        <h6 class="footer-title-29">Kontak</h6>
                        <p class="mb-2 pe-xl-5">Alamat : <?= $row->alamat ?>
                        </p>
                        <p class="mb-2">Nomor Telp : <a href="tel:<?= $row->telepon ?>"><?= $row->telepon ?></a></p>
                        <p class="mb-2">Email : <a href="mailto:<?= $row->email ?>"><?= $row->email ?></a></p>
                    </div>
                    <div class="col-md-2 col-4 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Tentang</h6>
                            <li><a href="<?= base_url('home/pendidik') ?>">Tenaga Pendidik</a></li>
                            <li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
                            <li><a href="<?= base_url('home/pengumuman') ?>">Pengumuman</a></li>
                            <li><a href="<?= base_url('home/alumni') ?>">Alumni</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-4 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Hak Akses</h6>
                            <li><a href="<?= base_url('home/login_admin') ?>">Admin</a></li>
                            <li><a href="<?= base_url('home/login_guru') ?>">Guru</a></li>
                            <li><a href="<?= base_url('home/login_siswa') ?>">Siswa</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- //footer -->
<?php } ?>

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
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
<!-- //move top -->

<!-- common jquery plugin -->
<script src="<?= base_url('') ?>assets/template/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- for services carousel slider -->
<script src="<?= base_url('') ?>assets/template/js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-three').owlCarousel({
            loop: true,
            stagePadding: 20,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    })
</script>
<!-- //for services carousel slider -->

<!-- theme switch js (light and dark)-->
<script src="<?= base_url('') ?>assets/template/js/theme-change.js"></script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="<?= base_url('') ?>assets/template/js/bootstrap.min.js"></script>
<!-- //bootstrap -->
<!-- //Js scripts -->
</body>

</html>