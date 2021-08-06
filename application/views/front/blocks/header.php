<body>
  <script type="text/javascript">
    function changeLang(lang) {
      $.ajax({
        url: "<?php echo base_url(); ?>home/change/" + lang + "",
        success: function() {
          location.reload();
        }
      });
    }
  </script>

  <?php if ($_SESSION['lang'] != 'pl') : ?>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'pl',
          layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT
        }, 'google_translate_element');
      }
      jQuery('.lang-select').click(function() {
        var theLang = jQuery(this).attr('data-lang');
        jQuery('.goog-te-combo').val(theLang);
        window.location = jQuery(this).attr('href');
        location.reload();
      });
    </script>
  <?php endif; ?>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <style>
    .goog-te-banner-frame.skiptranslate {
      display: none !important;
    }

    .navbar_ruton {
      width: 100%;
      min-height: 141px;
      display: flex;
      position: fixed;
      padding-left: 9vw;
      padding-right: 9vw;
    }

    .navbar_section {
      display: flex;
      width: 50%;
      min-height: 141px;
    }

    .navbar_spacer {
      width: 100%;
      height: 160px;
    }

    .navbar_list {
      display: flex;
      align-items: center;
      overflow-y: hidden;
      width: 100%;
    }

    .navbar_list p {
      font: normal normal medium 18px/22px Montserrat;
      letter-spacing: 0px;
      color: black;
      text-transform: uppercase;
      opacity: 1;
      padding: 0px 14px 0px 14px;
      font-weight: 600;
    }

    .navbar_bars {
      width: 24px;
      height: 24px;
    }

    .navbar_logo {
      display: flex;
      align-items: center;
      width: 90%;
      height: 70px;
      margin-right: 12px;
    }

    @media(max-width: 1600px) {}

    @media(max-width: 1024px) {
      .navbar_ruton {
        display: block;
        min-height: unset;
      }

      .navbar_section {
        width: 100%;
        min-height: 40px;
      }

      .navbar_list {
        display: block;
        height: 0px;
        transition: 0.4s;
      }
    }
  </style>
  <header>
    <div class="navbar_ruton debug_black">
      <div class="navbar_section flex_align_c flex_mob"><span class="navbar_logo">RUTON</span>
        <button class="navbar-toggler navbar-toggler-right tab_block" onclick="toggle_nav()" type="button" aria-controls="myNavigation" aria-expanded="false" aria-label="Toggle navigation">
          <img class="navbar_bars" src="<?= base_url('assets/front/img/bars-solid.svg') ?>">
        </button>
      </div>
      <div class="navbar_section flex_align_c">
        <div class="navbar_list flex_c" id="navbar">
          <p>Fotowoltaika</p>
          <p>Samodzielny Montaż</p>
          <p>Poradnik</p>
          <p>Kontakt</p>
        </div>
      </div>
    </div>
    <div class="navbar_spacer"></div>
  </header>
  <main>