<?php $temp_photo = ''; ?>
<div class="flex_box sep_bot-xl">
    <div class="fader" id="slider-1">
        <?php foreach ($slider as $item) : ?>
            <?php if (!empty($item->photo_webp)) $temp_photo = $item->photo;
            else $temp_photo = $item->photo; ?>
            <?php if ($item->active == 1) : ?>
                <div class="Slides lazy" data-bg="url(<?= base_url('uploads/') . $temp_photo; ?>)">
                    <div class="mask">
                        <h1 class="s_title"><?= $item->title; ?></h1>
                        <div class="white-bg"></div>
                    </div>
                    <div class="s_content">
                        <div class="s_box"></div>
                        <div class="s_box">
                            <span class="bc_square mob_hide" style="width:400px;height:360px;top:48%;left:-13%"></span>
                            <span class="bc_square mob_block" style="width:92px;height:108px;top:48%;left:0%"></span>
                            <span class="bc_square mob_hide" style="width:128px;height:128px;top:2%;left:66%"></span>
                            <div class="absolute_box" style="width:min-content;height:360px;top:48%;">
                                <div class="sep_top-m" style="text-transform:uppercase;min-height:135px;"><?= $item->subtitle; ?></div>
                                <div class="flex_box flex_c sep_slider" style="max-width:320px;"><a class="mob_hide" href="<?= $item->link; ?>"><button class="btn_ruton"><?= $item->button; ?></button></a></div>
                            </div>
                        </div>
                    </div>
                    <a class="mob_block s_mob_button" href="<?= $item->link; ?>"><button class="btn_ruton"><?= $item->button; ?></button></a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>

        <div class="dot_box">

        </div>

    </div>
</div>
<section>
    <div class="temp_flex main_padding sep_top-xl">
        <?php if (!empty($s1->photo_webp)) $temp_photo = $s1->photo;
        else $temp_photo = $s1->photo; ?>
        <div class="box_1 mob_hide lazy" data-bg="url(<?= base_url('uploads/') . $temp_photo; ?>)"></div>
        <div class="box_2">
            <span class="bc_square" style="width:400px;height:360px;top:12%;left:-1%"></span>
            <span class="bc_square mob_hide" style="width:74px;height:74px;top:-1%;left:385px"></span>
            <div class="block_normal desk_pad">
                <span class="top_line"></span>
                <div class="sep_top-s">
                    <?= $s1->title; ?>
                    <div class="desc_1 sep_top-m">
                        <?= $s1->description; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-3 gtab-2 gmob-1 sep_top-xl main_padding">
        <?php foreach ($tiles1 as $item) : ?>
            <div class="block_normal ruton_tile sep_bot-l hov_tile1" onclick="location.href = '<?= base_url() . 'oferty#' . $item->offer_id ?>';">
                <?php if ($item->id % 2 != 0) : ?><span class="bc_square" style="width:83%;height:100%;"></span><?php endif; ?>
                <span class="tile_circle">
                    <img class="circle_icon" src="<?= base_url('uploads/') . $item->photo; ?>">
                </span>
                <div class="content">
                    <span class="top_line"></span>
                    <h1><?= $item->title; ?></h1>
                    <?= textlim($item->description, 200); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section>
    <div class="grid-3 gtab-2 sep_top-xl main_padding">
        <div class="block_normal desk_pad no_margin tab_size-2">
            <span class="top_line"></span>
            <span class="bc_square" style="width:90vw;height:340px;top:-20px;left:67px;"></span>
            <div class="sep_top-s">
                <?= $s2->title; ?>
                <div class="desc_2 sep_top-m">
                    <?= $s2->description; ?>
                </div>
            </div>
        </div>
        <div class="block_normal size-2">
            <div class="info_2 grid-4 gtab-2 gmob-1">
                <?php foreach ($tiles2 as $item) : ?>
                    <?php if (stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false) $temp_photo = $item->photo_webp;
                    else $temp_photo = $item->photo; ?>
                    <div class="info_item hov_tile2" onclick="location.href = '<?= base_url() . 'montaz#' . $item->offer_id ?>';">
                        <div class="info_bc lazy" data-bg="url(<?= base_url('uploads/') . $temp_photo; ?>)"></div>
                        <div class="info_text">
                            <p><?= $item->title; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="sep_top-xl">
    <h1 class="ruton_title"><?= $s3[0]->title; ?><span class="top_line mob_hide" style="left: 44%;"></span><span class="bc_square" style="width:61vw;height:340px;top:40px;right:0px"></span></h1>
    <div class="block_normal ruton_padding">
        <div class="grid-2 gtab-1 sep_top-m">
            <div class="flex_box flex_mob">
                <div class="desc_3">
                    <?= $s3[0]->description; ?>
                </div>
            </div>
            <div class="flex_box flex_mob">
                <div class="desc_3">
                    <?= $s3[1]->description; ?>
                </div>
            </div>
            <div class="flex_box flex_mob">
                <div class="desc_3-img1 lazy" data-bg="url(<?= base_url('uploads/') . $s3[0]->photo; ?>)"></div>
            </div>
            <div class="flex_box flex_mob">
                <div class="desc_3-img2 lazy" data-bg="url(<?= base_url('uploads/') . $s3[1]->photo; ?>)"></div>
            </div>
        </div>
    </div>
</section>
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
        <div class="scaler" id="slider-2">
            <?php foreach ($partner as $item) : ?>
                <?php if ($item->active == 1) : ?>
                    <div class="Slides">
                        <div class="s2_spacer"></div>
                        <div class="s2_img lazy" data-bg="url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
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
<section class="sep_top-xl">
    <div class="custom_flex sep_top-xl main_padding">
        <div class="custom_box-1">
            <span class="bc_square tab_hide" style="max-width:639px;width:100%;height:340px;left:600px;"></span>
            <div class="block_normal desk_pad no_margin tab_size-2">
                <span class="top_line mob_hide"></span>
                <div class="sep_top-l">
                    <span class="top_line mob_block" style="top:45px;"></span>
                    <?= $s4->title; ?>
                    <div class="desc_5 sep_top-m">
                        <?= $s4->description; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_box-2">
            <div class="map_box lazy" data-bg="url(<?= base_url('uploads/') . $s4->photo; ?>)">
                <!-- <iframe src="<?= $contact->map; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
        </div>
    </div>
</section>
<?php
$entries = array();
$entries[0] = array_key_last($blog);
$i = 0;
for ($i; $i < count($blog); $i++) {
    if ($s5->entry_main == $blog[$i]->id) $entries[0] = $i;
    if ($s5->entry_1 == $blog[$i]->id) $entries[1] = $i;
    if ($s5->entry_2 == $blog[$i]->id) $entries[2] = $i;
}
?>
<section class="sep_top-xl">
    <span class="bc_square tab_hide" style="max-width:1200px;width:100%;height:340px;top:370px;left:180px;"></span>
    <div class="grid-3 gtab-2 main_padding">
        <div class="block_normal desk_pad tab_size-2" style="margin-left:unset;">
            <span class="top_line mob_hide"></span>
            <div class="sep_top-l">
                <span class="top_line mob_block" style="top:45px;"></span>
                <?= $s5->title; ?>
            </div>
            <div class="guide_img mob_hide lazy" data-bg="url(<?= base_url('uploads/') . $s5->photo; ?>)">

            </div>
        </div>
        <div class="guide_box size-2">
            <div class="guide_1">
                <div class="guide_bc lazy" data-bg="url(<?= base_url('uploads/') . $blog[$entries[0]]->photo; ?>)"></div>
                <h1><?= $blog[$entries[0]]->subtitle; ?></h1>
                <div class="guide_desc"><?= textlim($blog[$entries[0]]->description, 1130); ?></div>
            </div>
            <div class="guide_2">
                <a href="<?= base_url() . 'wpis/' . $blog[$entries[1]]->id . '/artykul'; ?>" class="guide_tile">
                    <div class="tile_pic lazy" data-bg="url(<?= base_url('uploads/') . $blog[$entries[1]]->photo; ?>)"></div>
                    <div class="tile_text"><?= textlim($blog[$entries[1]]->title, 32); ?></div>
                </a>
                <a href="<?= base_url() . 'wpis/' . $blog[$entries[2]]->id . '/artykul'; ?>" class="guide_tile">
                    <div class="tile_pic lazy" data-bg="url(<?= base_url('uploads/') . $blog[$entries[2]]->photo; ?>)"></div>
                    <div class="tile_text"><?= textlim($blog[$entries[2]]->title, 32); ?></div>
                </a>
                <a href="<?= base_url('poradnik') ?>" class="guide_button">
                    <span class="arrow" style="background-image:url(<?= base_url('assets/front/icons/arrow-right.svg'); ?>)"></span>
                    <?= $s5->button; ?>
                </a>
            </div>
        </div>
    </div>
</section>