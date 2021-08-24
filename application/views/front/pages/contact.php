<script>
    var rodo_text = '<?= $settings->rodo; ?>';
    var rodo_expanded = false;
</script>
<div class="banner">
    <div class="banner_bc" style="background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);"></div>
    <div class="mask">
        <div class="flex_box flex_align_c set_height">
            <h1 class="banner_title" style="padding-right:15px;"><?= $banner->title; ?></h1>
        </div>
        <div class="white-bg"></div>
    </div>
</div>
<div class="flex_box flex_c sep_top-xl sep_bot-xl main_padding">
    <span class="bc_square" style="max-width:1240px;height:200px;width:100%;right:0px;"></span>
    <span class="bc_square tab_hide" style="max-width:156px;height:156px;width:100%;left:10%;"></span>
    <div class="grid-2 gtab-1" style="max-width:1438px;">
        <div class="contact_desc">
            <?= $contact_desc[0]->description; ?>
        </div>
        <div class="contact_desc">
            <?= $contact_desc[1]->description; ?>
        </div>
    </div>
</div>
<section>
    <div class="block_normal main_padding">
        <span class="bc_square" style="max-width:160px;height:160px;width:100%;right:10%;"></span>
        <span class="bc_square" style="max-width:947px;height:324px;width:100%;top:100%;"></span>
        <h1 class="contact_header"><?= $contact_desc[2]->subtitle; ?></h1>
    </div>
    <form action="<?= base_url(); ?>mailer/send" method="POST" id="contact-form">
        <div class="flex_box flex_c sep_top-l">
            <div class="contact_form">
                <input required class="form_input" type="text" name="subject" placeholder="Temat Wiadomości">
                <input required class="form_input" type="text" name="name" placeholder="Imię i Nazwisko">
                <input required class="form_input" type="text" name="phone" placeholder="Telefon kontaktowy">
                <input required class="form_input" type="text" name="email" placeholder="Adres e-mailowy">
                <textarea required class="form_textarea" rows="7" placeholder="Treść pytania..." name="message"></textarea>
                <div class="rodo_box">
                    <div class="flex_box">
                        <div style="width:30px;"><input type="checkbox" class="form_rodo" name="rodo1" id="rodo1">
                            <div style="width:30px;"></div>
                        </div>
                        <p class="form_rodo">
                            <in id="rodo"></in><a class="rodo_collapse" id="expand" onclick="rodo_collapse()"> Więcej</a>
                        </p>
                    </div>
                    <input type="hidden" name="rodo2" value="1">
                    <input type="hidden" name="rodo3" value="1">
                </div>
            </div>
        </div>
        <div class="flex_box flex_c sep_top-s"><button type="submit" value="Submit" class="btn_form">Wyślij Formularz</button></div>
    </form>
</section>
<section class="sep_top-xl">
    <div class="flex_box flex_c">
        <div class="custom_box-2">
            <div class="map_box">
                <iframe src="<?= $contact->map; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<?php if ($support->active == 1) : ?>
    <?php $prefix = ''; ?>
    <?php if ($support->tick48 == 1) $prefix = '+48 '; ?>
    <section class="sep_top-xl main_padding">
        <h1 class="ruton_title"><?= $support->subtitle; ?><span class="top_line" style="left: 54%;"></span></h1>
        <div class="flex_box flex_c">
            <div class="desc_4">
                <?= $support->description; ?>
            </div>
        </div>
        <div class="flex_box flex_c sep_top-m">
            <div class="call_block">
                <img class="call_icon" src="<?= base_url('assets/front/icons/call.svg'); ?>">
                <a href="tel:<?= $contact->phone2; ?>" class="call_number"><?= $prefix; ?><i><?= $contact->phone2; ?></i></a>
            </div>
        </div>
    </section>
<?php endif; ?>