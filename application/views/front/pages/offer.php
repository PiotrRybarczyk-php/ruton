<div class="banner">
    <div class="banner_bc" style="background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);"></div>
    <div class="mask">
        <div class="flex_box flex_align_c set_height">
            <h1 class="banner_title" style="padding-right:108px;"><?= $banner->title; ?></h1>
        </div>
        <div class="white-bg"></div>
    </div>
</div>
<div class="flex_box flex_c sep_top-l sep_bot-xl">
    <div class="offer_desc tab_pad">
        <?= $subpages[0]->description; ?>
    </div>
</div>
<?php $i = 0; ?>
<?php foreach ($offer as $item) : ?>
    <?php if ($item->active == 1) : ?>
        <?php if ($i % 2 == 0) : ?>
            <section id="<?= $item->id ?>">
                <div class="flex_box flex_c sep_bot-m">
                    <div class="grid-2 gtab-1 tab_pad" style="max-width:1110px">
                        <div class="block_normal">
                            <span class="bc_square" style="max-width:491px;height:340px;width:100%;"></span>
                            <div class="offer_block-title">
                                <span class="top_line" style="top:25px;"></span>
                                <h1><?= $item->title; ?></h1>
                            </div>
                            <div class="offer_desc" style="max-width:400px;">
                                <?= textlim($item->description, 1025); ?>
                            </div>
                        </div>
                        <div class="block_normal">
                            <span class="bc_square offer_right" style="max-width:491px;height:340px;width:100%;"></span>
                            <div class="offer_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
                            <button class="btn_self" onclick="location.href = '<?= base_url() . 'kontakt?link=' . slug($item->title); ?>';">kontakt</button>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <section id="<?= $item->id ?>">
                <div class="flex_box flex_c sep_bot-m tab_hide">
                    <div class="grid-2 gtab-1 tab_pad" style="max-width:1110px">
                        <div class="block_normal">
                            <span class="bc_square offer_left" style="max-width:491px;height:340px;width:100%;"></span>
                            <div class="offer_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
                            <button class="btn_self" onclick="location.href = '<?= base_url() . 'kontakt?link=' . slug($item->title); ?>';">kontakt</button>
                        </div>
                        <div class="block_normal">
                            <span class="bc_square" style="max-width:491px;height:340px;width:100%;"></span>
                            <div class="offer_block-title">
                                <span class="top_line" style="right:0%;top:25px;"></span>
                                <h2><?= $item->title; ?></h2>
                            </div>
                            <div class="flex_box flex_r">
                                <div class="offer_desc" style="max-width:400px;">
                                    <?= textlim($item->description, 1025); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_box flex_c sep_bot-m tab_flex">
                    <div class="grid-2 gtab-1 tab_pad" style="max-width:1110px">
                        <div class="block_normal">
                            <span class="bc_square" style="max-width:491px;height:340px;width:100%;"></span>
                            <div class="offer_block-title">
                                <span class="top_line" style="top:25px;"></span>
                                <h1><?= $item->title; ?></h1>
                            </div>
                            <div class="offer_desc" style="max-width:400px;">
                                <?= textlim($item->description, 1025); ?>
                            </div>
                        </div>
                        <div class="block_normal">
                            <span class="bc_square offer_right" style="max-width:491px;height:340px;width:100%;"></span>
                            <div class="offer_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
                            <button class="btn_self" onclick="location.href = '<?= base_url() . 'kontakt?link=' . slug($item->title); ?>';">kontakt</button>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php $i++; ?>
    <?php endif; ?>
<?php endforeach; ?>
<?php if ($support->active == 1) : ?>
    <?php $prefix = ''; ?>
    <?php if ($support->tick48 == 1) $prefix = '+48 '; ?>
    <section class="sep_top-xl main_padding">
        <h1 class="ruton_title"><?= $support->subtitle; ?><span class="top_line mob_hide" style="left: 54%;"></span></h1>
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
<section class="sep_top-xl">
    <h1 class="ruton_title">
        <div class="title_offset"><i>Zaufali </i>nam<span class="top_line mob_hide" style="left: 1%;"></span></div>
    </h1>
    <div class="flex_box">
        <div class="scaler" id="slider-1">
            <?php foreach ($partner as $item) : ?>
                <?php if ($item->active == 1) : ?>
                    <div class="Slides">
                        <div class="s2_spacer"></div>
                        <div class="s2_img" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);"></div>
                        <div class="s2_desc">
                            <h1><?= $item->title; ?></h1>
                            <?= textlim($item->description, 742); ?>
                        </div>
                        <span class="bc_square" style="max-width:1514px;width:100%;height:426px;top:27%;"></span>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>

            <div class="dot_box">

            </div>
        </div>
    </div>
</section>