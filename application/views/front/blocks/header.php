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
      height: 141px;
      position: fixed;
      padding-left: 9vw;
      padding-right: 9vw;
    }

    .navbar_section {
      display: flex;
      width: 50%;
      height: inherit;
    }

    .navbar_spacer {
      width: 100%;
      height: 160px;
    }

    .navbar_section p {
      font: normal normal medium 18px/22px Montserrat;
      letter-spacing: 0px;
      color: black;
      text-transform: uppercase;
      opacity: 1;
      padding: 0px 10px 0px 10px;
      font-weight: 600;
    }

    .nav {
      height: 50px;
      width: 100%;
      position: relative;
    }

    .nav>.nav-header {
      display: inline;
    }

    .nav>.nav-header>.nav-title {
      display: inline-block;
      font-size: 22px;
      color: #fff;
      padding: 10px 10px 10px 10px;
    }

    .nav>.nav-btn {
      display: none;
    }

    .nav>.nav-links {
      display: inline;
      float: right;
      font-size: 18px;
    }

    .nav>.nav-links>a {
      display: inline-block;
      padding: 13px 10px 13px 10px;
      text-decoration: none;
      color: #efefef;
    }

    .nav>.nav-links>a:hover {
      background-color: rgba(0, 0, 0, 0.3);
    }

    .nav>#nav-check {
      display: none;
    }

    @media (max-width:600px) {
      .nav>.nav-btn {
        display: inline-block;
        position: absolute;
        right: 0px;
        top: 0px;
      }

      .nav>.nav-btn>label {
        display: inline-block;
        width: 50px;
        height: 50px;
        padding: 13px;
      }

      .nav>.nav-btn>label:hover,
      .nav #nav-check:checked~.nav-btn>label {
        background-color: rgba(0, 0, 0, 0.3);
      }

      .nav>.nav-btn>label>span {
        display: block;
        width: 25px;
        height: 10px;
        border-top: 2px solid #eee;
      }

      .nav>.nav-links {
        position: absolute;
        display: block;
        width: 100%;
        background-color: #333;
        height: 0px;
        transition: all 0.3s ease-in;
        overflow-y: hidden;
        top: 50px;
        left: 0px;
      }

      .nav>.nav-links>a {
        display: block;
        width: 100%;
      }

      .nav>#nav-check:not(:checked)~.nav-links {
        height: 0px;
      }

      .nav>#nav-check:checked~.nav-links {
        height: calc(100vh - 50px);
        overflow-y: auto;
      }
    }
  </style>
  <header>
    <div class="navbar_ruton debug_black">
      <div class="flex_box" style="height:inherit">
        <div class="navbar_section flex_align_c debug_red">RUTON</div>
        <div class="navbar_section flex_align_c flex_c debug_blue">
          <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
            </div>
            <div class="nav-btn">
              <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
              </label>
            </div>

            <div class="nav-links">
              <a href="//github.io/jo_geek" target="_blank">Github</a>
              <a href="http://stackoverflow.com/users/4084003/" target="_blank">Stackoverflow</a>
              <a href="https://in.linkedin.com/in/jonesvinothjoseph" target="_blank">LinkedIn</a>
              <a href="https://codepen.io/jo_Geek/" target="_blank">Codepen</a>
              <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">JsFiddle</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar_spacer"></div>
  </header>
  <main>