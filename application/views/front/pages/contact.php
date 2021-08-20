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
    <div class="flex_box flex_c sep_top-l">
        <div class="contact_form">
            <input class="form_input" type="text" name="1" placeholder="Temat Wiadomości">
            <input class="form_input" type="text" name="2" placeholder="Imię i Nazwisko">
            <input class="form_input" type="text" name="3" placeholder="Telefon kontaktowy">
            <input class="form_input" type="text" name="4" placeholder="Adres e-mailowy">
            <textarea required class="form_textarea" rows="7" placeholder="Treść pytania..." name="message"></textarea>
            <div class="rodo_box">
                <div class="flex_box rodo_resize">
                    <div style="width:30px;"><input type="checkbox" class="form_rodo" name="rodo1" id="rodo1"></div>
                    <p class="form_rodo"><a href="#">Polityka Prywatności</a></p>
                </div>
                <div class="flex_box flex_r rodo_resize">
                    <div style="width:30px;"><input type="checkbox" class="form_rodo" name="rodo2" id="rodo2"></div>
                    <p class="form_rodo"><a href="#">Zgoda na kontakt tel. i mail'owy</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex_box flex_c sep_top-s"><button class="btn_form">Wyślij Formularz</button></div>
</section>
<?php if ($support->active == 1) : ?>
    <?php $prefix = ''; ?>
    <?php if ($support->tick48 == 1) $prefix = '+48 '; ?>
    <section class="sep_top-xl">
        <h1 class="ruton_title"><?= $support->subtitle; ?><span class="top_line" style="left: 54%;"></span></h1>
        <div class="flex_box flex_c">
            <div class="desc_4">
                <?= $support->description; ?>
            </div>
        </div>
        <div class="flex_box flex_c sep_top-m">
            <div class="call_block flex_align_e">
                <img class="call_icon" src="<?= base_url('assets/front/icons/call.svg'); ?>">
                <p class="call_number"><?= $prefix; ?><i><?= $contact->phone2; ?></i></p>
            </div>
        </div>
    </section>
<?php endif; ?>