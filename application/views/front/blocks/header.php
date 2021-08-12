<body id="body">
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
      <div class="navbar_section flex_align_c flex_mob"><a href="<?= base_url(); ?>" class="navbar_logo"><img src="<?= base_url('assets/front/img/ruton_logo.png') ?>"></a>
        <button class="navbar_toggler tab_block" onclick="toggle_nav()" type="button">
          <img class="navbar_bars" src="<?= base_url('assets/front/img/bars-solid.svg') ?>">
        </button>
      </div>
      <div class="navbar_section flex_align_c">
        <div class="navbar_list flex_c" id="navbar">
          <p><a href="<?= base_url('oferty') ?>" class="subpage_link<?php if ($cp == 'oferty') echo ' active'; ?>">Fotowoltaika</a><span class="subpage_line"></span></p>
          <p><a href="<?= base_url('montaz') ?>" class="subpage_link<?php if ($cp == 'montaz') echo ' active'; ?>">Samodzielny Montaż</a><span class="subpage_line"></span></p>
          <p><a href="<?= base_url('poradnik') ?>" class="subpage_link<?php if ($cp == 'poradnik') echo ' active'; ?>">Poradnik</a><span class="subpage_line"></span></p>
          <p><a href="<?= base_url('kontakt') ?>" class="subpage_link<?php if ($cp == 'kontakt') echo ' active'; ?>">Kontakt</a><span class="subpage_line"></span></p>
        </div>
      </div>
    </div>
    <div class="navbar_spacer"></div>
  </header>
  <main>