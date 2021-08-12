</main>
<footer>
    <div class="block-1">
        <h1 class="title"><span class="top_line"></span>kontakt</h1>
        <div class="f-content">
            <a href="<?= base_url(); ?>" class="navbar_logo" style="margin-right:0px;"><img src="<?= base_url('assets/front/img/ruton_logo.png') ?>"></a>
            <div class="footer_contact">
                <p>ulica, kod miasto</p>
                <p>tel. <a href="#">+48 500 500 500</a></p>
                <p>email. <a href="#">test@test.com</a></p>
            </div>
        </div>
    </div>
    <div class="block-2">
        <div class="grid-12">
            <div class="f-content size-3 mob_size-6">
                <h1>Ważne Informacje</h1>
                <a href="#">pliki cookies</a><br>
                <a href="#">polityka rodo</a><br>
                <a href="#">kontakt</a>
            </div>
            <div class="f-content size-6">
                <h1>Oferta:</h1>
                <a href="#">FOTOWOLTAIKA Z MONTAŻEM</a><br>
                <a href="#">DO SAMODZIELNEGO MONTAŻU</a><br>
                <a href="#">PORADNIK</a>
            </div>
            <div class="f-content size-3 mob_size-12">
                <h1>Nasze Media:</h1>
                <a href="#"><img class="social_icon" src="<?= base_url('assets/front/icons/fb.svg'); ?>"></a><br>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?= assets(); ?>js/jquery-3.4.1.min.js"></script>
<!-- <script type="text/javascript" src="<?= assets(); ?>js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="<?= assets(); ?>dist/owl.carousel.min.js"></script> -->
<script type="text/javascript" src="<?= assets(); ?>js/lc_lightbox.lite.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lightbox.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/qanim.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/quavosh-slider.js"></script>
<?php if ($cp == 'kontakt') : ?><script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script> <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

<?php
$slider = 0;
if ($cp == 'main') {
    $slider = 2;
} elseif ($cp == 'oferty') {
    $slider = 1;
}
?>

<script>
    var navbar_on = false;

    function set_size() {
        if (window.screen.width > 1024) {
            var body = document.getElementById('body');
            var h = body.getBoundingClientRect().height;
            var m = (h * 1.0) / 0.75;
            var value = Math.round(-1 * (m - h));
            var text = value.toString() + "px";
            body.style.marginBottom = text;
        }

    }
    window.onload = function() {
        //put here all library functions
        quavosh_slider(<?= $slider; ?>);
        qanim();
        set_size();
    };

    function reset_bar() {
        document.getElementById('navbar').style.removeProperty('height');

    }
    window.onresize = reset_bar;
    grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {
            action: 'homepage'
        }).then(function(token) {

        });
    });

    function toggle_nav() {
        var element = document.getElementById('navbar');
        if (navbar_on == false) {
            navbar_on = true;
            element.style.height = "172px";

        } else {
            navbar_on = false;
            element.style.height = "0px";
        }
    }
</script>
<!-- <script>
    window.addEventListener("load", function() {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "<?= $settings->first_color; ?>",
                    "text": "#000"
                },
                "button": {
                    "background": "#eee",
                    "text": "#1C2331!important"
                }
            },
            "type": "opt-out",
            "content": {
                "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
                "dismiss": "Rozumiem",
                "deny": "",
                "allow": "Rozumiem",
                "link": "Czytaj więcej...",
                "href": "<?php echo base_url(); ?>uploads/<?= $settings->privace;  ?>"
            }
        })
    });
</script> -->
<?php if ($cp == 'kontakt') : ?>

    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?= $settings->captcha ?>', {
                action: 'homepage'
            }).then(function(token) {

            });
        });
    </script>
    <script type="text/javascript">
        $('#contact-form').submit(function(event) {
            event.preventDefault();
            var email = $('#email').val();

            grecaptcha.ready(function() {
                grecaptcha.execute('<?= $settings->captcha ?>', {
                    action: 'mailer/send'
                }).then(function(token) {
                    $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                    $('#contact-form').unbind('submit').submit();
                });;
            });
        });
    </script>
<?php endif; ?>

</body>

</html>