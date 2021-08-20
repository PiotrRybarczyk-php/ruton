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

    .cc-animate.cc-revoke.cc-bottom {
      transform: unset !important;
    }

    .desk_pad i {
      color: <?= $settings->first_color; ?> !important;
    }

    .top_line {
      border-top-color: <?= $settings->first_color; ?> !important;
    }

    .info_text {
      background-color: <?= $settings->first_color; ?> !important;
    }

    h1 i {
      color: <?= $settings->first_color; ?> !important;
    }

    h2 i {
      color: <?= $settings->first_color; ?> !important;
    }

    .tile_text {
      background-color: <?= $settings->first_color; ?> !important;
    }

    footer .block-2 {
      background-color: <?= $settings->first_color; ?> !important;
    }

    footer .title {
      color: <?= $settings->first_color; ?> !important;
    }

    .footer_contact a:hover {
      color: <?= $settings->first_color; ?> !important;
    }

    .btn_offer:hover {
      background-color: <?= $settings->first_color; ?> !important;
    }

    .green_square {
      background-color: <?= $settings->first_color; ?> !important;
    }

    .btn_self:hover {
      background-color: <?= $settings->first_color; ?> !important;
    }

    .btn_blog:hover {
      background-color: <?= $settings->first_color; ?> !important;
    }

    .contact_form {
      background-color: <?= $settings->first_color; ?> !important;
    }

    input.form_rodo {
      background-color: <?= $settings->first_color; ?> !important;
    }

    input.form_rodo:checked {
      border-top-color: <?= $settings->first_color; ?> !important;
      border-left-color: <?= $settings->first_color; ?> !important;
    }

    .btn_form:hover {
      background-color: <?= $settings->first_color; ?> !important;
    }

    .btn_ruton {
      background-color: <?= $settings->second_color; ?> !important;
    }

    .guide_tile:hover>.tile_text {
      background-color: <?= $settings->second_color; ?> !important;
    }

    .guide_button {
      background-color: <?= $settings->second_color; ?> !important;
    }

    .block-2 .f-content a:hover {
      color: <?= $settings->second_color; ?> !important;
    }

    .btn_self {
      background-color: <?= $settings->second_color; ?> !important;
    }

    a.btn_blog {
      background-color: <?= $settings->second_color; ?> !important;
    }

    .btn_form {
      background-color: <?= $settings->second_color; ?> !important;
    }
  </style>
  <header>
    <div class="navbar_ruton">
      <div class="navbar_section flex_align_c flex_mob"><a href="<?= base_url(); ?>" class="navbar_logo"><img src="<?= base_url('uploads/') . $logo->photo; ?>"></a>
        <button class="navbar_toggler tab_block" onclick="toggle_nav()" type="button">
          <img class="navbar_bars" src="<?= base_url('assets/front/img/bars-solid.svg') ?>">
        </button>
      </div>
      <div class="navbar_section flex_align_c">
        <div class="navbar_list flex_c" id="navbar">
          <p><a href="<?= base_url('oferty') ?>" class="subpage_link<?php if ($cp == 'oferty') echo ' active'; ?>"><?= $subpages[0]->title; ?></a><span class="subpage_line"></span></p>
          <p><a href="<?= base_url('montaz') ?>" class="subpage_link<?php if ($cp == 'montaz') echo ' active'; ?>"><?= $subpages[1]->title; ?></a><span class="subpage_line"></span></p>
          <p><a href="<?= base_url('poradnik') ?>" class="subpage_link<?php if ($cp == 'poradnik') echo ' active'; ?>"><?= $subpages[2]->title; ?></a><span class="subpage_line"></span></p>
          <p><a href="<?= base_url('kontakt') ?>" class="subpage_link<?php if ($cp == 'kontakt') echo ' active'; ?>"><?= $subpages[3]->title; ?></a><span class="subpage_line"></span></p>
        </div>
      </div>
    </div>
    <div class="navbar_spacer"></div>
  </header>
  <main>