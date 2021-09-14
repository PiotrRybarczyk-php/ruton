<div class="banner">
    <div class="banner_bc" style="background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);"></div>
    <div class="mask">
        <div class="flex_box flex_align_c set_height">
            <h1 class="banner_title"><?= $article->title; ?></h1>
        </div>
        <div class="white-bg"></div>
    </div>
</div>
<div class="block_normal sep_top-l main_padding">
    <div class="art_block-title">
        <span class="top_line" style="top:0px;"></span>
        <h1><?= $article->subtitle; ?></h1>
        <span class="bc_square" style="width:100%;height:340px;top:50%;"></span>
    </div>
    <div class="block_normal" style="top:-80px;">
        <div class="grid-3 gtab-2">
            <div class="offer_desc art_pad-l tab_size-2 sep_top-xl" style="position:relative;">
                <h2 class="number_article"><i>numer <?= $article->id; ?></i></h2>
                <?= $article->description; ?>
            </div>
            <div class="block_normal size-2 self_pad-l">
                <div class="art_pic" style="background-image:url(<?= base_url('uploads/') . $article->photo; ?>);"></div>
                <span class="green_square" style="max-width:480px;"></span>
                <div class="grid-2 gmob-1 sep_top-l">
                    <div class="offer_desc" style="max-width:400px;">
                        <?= textlim($article->description_2, 550); ?>
                    </div>
                    <div class="offer_desc just_m" style="max-width:400px;">
                        <?= textlim($article->description_3, 550); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-3 gmob-2 art_pad-l">
        <div class="art_pic size-2" style="background-image:url(<?= base_url('uploads/') . @$photos[0]->photo; ?>)"></div>
        <div class="art_pic-2 just_m mob_size-2" style="background-image:url(<?= base_url('uploads/') . @$photos[1]->photo; ?>)"></div>
    </div>
</div>
<div class="flex_box flex_c main_padding sep_top-xl sep_bot-xl"><a href="<?= base_url('poradnik'); ?>" class="btn_blog">wróc</a></div>
<section class="sep_top-xl">
    <div class="flex_box">
        <div class="fader" id="slider-1">
            <?php
            $i = 0;
            $size_of = count($blog);
            ?>
            <?php for ($i; $i < count($blog); $i++) : ?>
                <?php if ($blog[$i]->active == 1) : ?>
                    <div class="Slides slider_padding">
                        <div class="grid-3 gtab-2 gmob-1">
                            <div class="flex_box flex_c md_padding">
                                <div class="block_normal" style="max-width:404px;">
                                    <span class="green_square mob_hide" style="max-width:183px;"></span>
                                    <div class="art_pic-2" style="background-image:url(<?= base_url('uploads/') . $blog[$i]->photo; ?>)"></div>
                                    <div class="slider_box_title">
                                        <h1><span class="top_line" style="top:0px;"></span><?= $blog[$i]->subtitle; ?></h1>
                                    </div>
                                    <div class="offer_desc">
                                        <?= textlim($blog[$i]->description, 550); ?>
                                    </div>
                                    <a href="<?= base_url('wpis/') . $blog[$i]->id . '/artykul'; ?>" class="btn_blog">czytaj więcej</a>
                                </div>
                            </div>
                            <?php if ($blog[($i + 1) % $size_of]->active == 1) : ?>
                                <div class="flex_box flex_c md_padding mob_hide">
                                    <div class="block_normal" style="max-width:404px;">
                                        <span class="green_square" style="max-width:183px;"></span>
                                        <div class="art_pic-2" style="background-image:url(<?= base_url('uploads/') . $blog[($i + 1) % $size_of]->photo; ?>)"></div>
                                        <div class="slider_box_title">
                                            <h1><span class="top_line" style="top:0px;"></span><?= $blog[($i + 1) % $size_of]->subtitle; ?></h1>
                                        </div>
                                        <div class="offer_desc">
                                            <?= textlim($blog[($i + 1) % $size_of]->description, 550); ?>
                                        </div>
                                        <a href="<?= base_url('wpis/') . $blog[($i + 1) % $size_of]->id . '/artykul'; ?>" class="btn_blog">czytaj więcej</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($blog[($i + 2) % $size_of]->active == 1) : ?>
                                <div class="flex_box flex_c md_padding tab_hide">
                                    <div class="block_normal" style="max-width:404px;">
                                        <span class="green_square" style="max-width:183px;"></span>
                                        <div class="art_pic-2" style="background-image:url(<?= base_url('uploads/') . $blog[($i + 2) % $size_of]->photo; ?>)"></div>
                                        <div class="slider_box_title">
                                            <h1><span class="top_line" style="top:0px;"></span><?= $blog[($i + 2) % $size_of]->subtitle; ?></h1>
                                        </div>
                                        <div class="offer_desc">
                                            <?= textlim($blog[($i + 2) % $size_of]->description, 550); ?>
                                        </div>
                                        <a href="<?= base_url('wpis/') . $blog[($i + 2) % $size_of]->id . '/artykul'; ?>" class="btn_blog">czytaj więcej</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
            <div class="dot_box" style="display:none;">
            </div>
        </div>
    </div>
</section>