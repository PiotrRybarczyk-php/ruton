</main>
<footer>

</footer>
<script type="text/javascript" src="<?= assets(); ?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lc_lightbox.lite.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lightbox.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/qanim.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/quavosh-slider.js"></script>
<?php if ($cp == 'kontakt') : ?><script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script> <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>

<script>
    var navbar_on = false;

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
            element.style.height = "160px";

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