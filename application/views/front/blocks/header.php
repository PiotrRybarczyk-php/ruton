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