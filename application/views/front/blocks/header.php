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

    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    body {
      display: block;
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-size: 1rem;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: transparent;
    }

    .navbar_ruton {
      width: 100%;
      min-height: 141px;
      display: flex;
      position: fixed;
      padding-left: 9vw;
      padding-right: 9vw;
      z-index: 200;
    }

    .navbar_section {
      display: flex;
      width: 50%;
      min-height: 141px;
      background-color: white;
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
      position: relative;
      opacity: 1;
      padding: 0px 14px 0px 14px;
      font-weight: 600;
    }

    p .subpage_link {
      text-decoration: none;
      letter-spacing: 0px;
      color: black;
      text-transform: uppercase;
      transition: 0.5s;
    }

    .navbar_list p:hover>.subpage_link {
      color: #2B2171;
    }

    .navbar_list p:hover>.subpage_line {
      border-bottom: 3px solid #2B2171;
      width: 83%;
      opacity: 1.0;
    }

    .subpage_line {
      position: absolute;
      transition: 0.5s;
      width: 0%;
      opacity: 0.0;
      border-bottom: 3px solid black;
      bottom: 0%;
      left: 8%;
    }

    .navbar_toggler {
      opacity: 0.8;
      width: 48px;
      height: 48px;
      background: none;
      border-radius: 8px;
      border: none;
      transition: 0.3s;
      border-color: white;
    }

    .navbar_toggler:focus {
      border: 4px solid black;
    }

    .navbar_bars {
      width: 26px;
      height: 26px;
    }

    .navbar_logo {
      display: flex;
      align-items: center;
      width: 90%;
      height: 70px;
      margin-right: 12px;
    }

    .navbar_logo img {
      max-height: 100%;
    }

    .mask {
      background-color: white;
      mix-blend-mode: screen;
      position: relative;
      min-height: 100%;
      width: 100%;
    }

    .white-bg {
      height: 100%;
      width: 50%;
      position: absolute;
      mix-blend-mode: difference;
      top: 0;
      background-color: white;
    }

    .Slides {
      display: flex;
    }

    .s_box {
      width: 50%;
      min-height: 100%;
      position: relative;
      overflow: hidden;
    }

    .s_title {
      position: absolute;
      font-weight: 700;
      font-size: 9vw;
      left: 19.8%;
      top: 7%;
    }

    .s_content {
      position: absolute;
      display: flex;
      width: 100%;
      min-height: 100%;
      z-index: 2;
    }

    .bc_square {
      position: absolute;
      width: 25px;
      height: 25px;
      background-color: #F6F6F6;
      z-index: -1;

    }

    .absolute_box {
      margin: auto;
      padding-left: 3vw;
    }

    .absolute_box div {
      width: 100%;
      font-size: 48px;
      font-weight: 500;
      line-height: 50px;
    }

    @media(max-width: 1600px) {}

    @media(max-width: 1024px) {
      .navbar_ruton {
        display: block;
        min-height: unset;
      }

      .subpage_line {
        left: 0%;
      }

      .navbar_section {
        padding-top: 5px;
        width: 100%;
        min-height: 40px;
      }

      .navbar_list {
        display: block;
        height: 0px;
        transition: 0.4s;
      }
    }

    @media(max-width:500px) {
      .navbar_logo img {
        width: 100%;
      }
    }
  </style>
  <header>
    <div class="navbar_ruton">
      <div class="navbar_section flex_align_c flex_mob"><span class="navbar_logo"><img src="<?= base_url('assets/front/img/ruton_logo.png') ?>"></span>
        <button class="navbar_toggler tab_block" onclick="toggle_nav()" type="button">
          <img class="navbar_bars" src="<?= base_url('assets/front/img/bars-solid.svg') ?>">
        </button>
      </div>
      <div class="navbar_section flex_align_c">
        <div class="navbar_list flex_c" id="navbar">
          <p><a href="#" class="subpage_link">Fotowoltaika</a><span class="subpage_line"></span></p>
          <p><a href="#" class="subpage_link">Samodzielny Montaż</a><span class="subpage_line"></span></p>
          <p><a href="#" class="subpage_link">Poradnik</a><span class="subpage_line"></span></p>
          <p><a href="#" class="subpage_link">Kontakt</a><span class="subpage_line"></span></p>
        </div>
      </div>
    </div>
    <div class="navbar_spacer"></div>
  </header>
  <main>