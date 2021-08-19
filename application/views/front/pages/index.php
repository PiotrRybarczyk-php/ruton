<div class="flex_box sep_bot-xl">
    <div class="fader" id="slider-1">
        <?php foreach ($slider as $item) : ?>
            <?php if ($item->active == 1) : ?>
                <div class="Slides" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);">
                    <div class="mask">
                        <h1 class="s_title"><?= $item->title; ?></h1>
                        <div class="white-bg"></div>
                    </div>
                    <div class="s_content">
                        <div class="s_box"></div>
                        <div class="s_box">
                            <span class="bc_square" style="width:400px;height:360px;top:48%;left:-13%"></span>
                            <span class="bc_square mob_hide" style="width:128px;height:128px;top:2%;left:66%"></span>
                            <div class="absolute_box" style="width:min-content;height:360px;top:48%;">
                                <div class="sep_top-m" style="text-transform:uppercase;min-height:135px;"><?= $item->subtitle; ?></div>
                                <div class="flex_box flex_c sep_top-l" style="max-width:320px;"><a href="<?= $item->link; ?>"><button class="btn_ruton"><?= $item->button; ?></button></a></div>
                            </div>
                        </div>
                    </div>
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
        <div class="box_1 mob_hide" style="background-image:url(<?= base_url('uploads/') . $s1->photo; ?>);"></div>
        <div class="box_2">
            <span class="bc_square" style="width:400px;height:360px;top:12%;left:-1%"></span>
            <span class="bc_square mob_hide" style="width:74px;height:74px;top:-1%;left:385px"></span>
            <div class="block_normal desk_pad qa_fade">
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
            <div class="block_normal ruton_tile sep_bot-l">
                <span class="bc_square" style="width:83%;height:100%;"></span>
                <span class="tile_circle">
                    <img class="circle_icon" src="<?= base_url('uploads/') . $item->photo; ?>">
                </span>
                <div class="content">
                    <span class="top_line"></span>
                    <h1><?= $item->title; ?></h1>
                    <?= $item->description; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section>
    <div class="grid-3 gtab-2 sep_top-xl main_padding">
        <div class="block_normal desk_pad no_margin tab_size-2 qa_fade">
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
                    <div class="info_item">
                        <div class="info_bc" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);"></div>
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
    <h1 class="ruton_title"><i>Kim</i> Jesteśmy?<span class="top_line" style="left: 44%;"></span><span class="bc_square" style="width:61vw;height:340px;top:40px;right:0px"></span></h1>
    <div class="block_normal ruton_padding">
        <div class="grid-2 gtab-1 sep_top-m">
            <div class="flex_box flex_mob">
                <div class="desc_3">
                    <p>Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede.</p>
                </div>
            </div>
            <div class="flex_box flex_mob">
                <div class="desc_3">
                    <p>Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede.</p>
                </div>
            </div>
            <div class="flex_box flex_mob">
                <div class="desc_3-img1" style="background-image:url(<?= base_url('assets/front/img/bloke-helmet.jpg'); ?>);"></div>
            </div>
            <div class="flex_box flex_mob">
                <div class="desc_3-img2" style="background-image:url(<?= base_url('assets/front/img/weird-house.jpg'); ?>);"></div>
            </div>
        </div>
    </div>
</section>
<section class="sep_top-xl">
    <h1 class="ruton_title"><i>Wsparcie</i><span class="top_line" style="left: 54%;"></span></h1>
    <div class="flex_box flex_c">
        <div class="desc_4">
            <p>Dla naszych klientów - tych, którzy zdecydują się na montaż z naszą ekipą lub którzy zrobili zakupy w naszym sklepie - mamy specjalną linię telefoniczną ze wsparciem technicznym.</p>
        </div>
    </div>
    <div class="flex_box flex_c sep_top-m">
        <div class="call_block flex_align_e">
            <img class="call_icon" src="<?= base_url('assets/front/icons/call.svg'); ?>">
            <p class="call_number">+48 <i>123 456 789</i></p>
        </div>
    </div>
</section>
<section class="sep_top-xl">
    <h1 class="ruton_title">
        <div class="title_offset"><i>Zaufali </i>nam<span class="top_line" style="left: 1%;"></span></div>
    </h1>
    <div class="flex_box">
        <div class="scaler" id="slider-2">
            <div class="Slides">
                <div class="s2_spacer"></div>
                <div class="s2_img" style="background-image:url(<?= base_url('assets/front/img/panels2.jpg'); ?>);"></div>
                <div class="s2_desc">
                    <h1>Lorem ipsum dolor sit amet mi facilisis enim.</h1>
                    <p>Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede.</p>
                </div>
                <span class="bc_square" style="max-width:1514px;width:100%;height:426px;top:27%;"></span>
            </div>
            <div class="Slides">
                <div class="s2_spacer"></div>
                <div class="s2_img" style="background-image:url(<?= base_url('assets/front/img/panels2.jpg'); ?>);"></div>
                <div class="s2_desc">
                    <h1>Lorem ipsum dolor sit amet mi facilisis enim.</h1>
                    <p>Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede.</p>
                </div>
                <span class="bc_square" style="max-width:1514px;width:100%;height:426px;top:27%;"></span>
            </div>
            <div class="Slides">
                <div class="s2_spacer"></div>
                <div class="s2_img" style="background-image:url(<?= base_url('assets/front/img/panels2.jpg'); ?>);"></div>
                <div class="s2_desc">
                    <h1>Lorem ipsum dolor sit amet mi facilisis enim.</h1>
                    <p>Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede.</p>
                </div>
                <span class="bc_square" style="max-width:1514px;width:100%;height:426px;top:27%;"></span>
            </div>
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
                <span class="top_line"></span>
                <div class="sep_top-l">
                    <p>Jesteśmy</p>
                    <p><i>blisko</i> ciebie</p>
                    <div class="desc_5 sep_top-m">
                        <p>Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_box-2">
            <div class="map_box"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.6720013395557!2d16.174381315963842!3d51.20669524046529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f0d628b86c7af%3A0xe609f38f2e447933!2sFabryczna%2022%2C%2059-220%20Legnica!5e0!3m2!1spl!2spl!4v1628680267190!5m2!1spl!2spl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        </div>
    </div>
</section>
<section class="sep_top-xl">
    <span class="bc_square tab_hide" style="max-width:1200px;width:100%;height:340px;top:370px;left:180px;"></span>
    <div class="grid-3 gtab-2 main_padding">
        <div class="block_normal desk_pad tab_size-2" style="margin-left:unset;">
            <span class="top_line"></span>
            <div class="sep_top-l">
                <p>Z Naszego</p>
                <p><i>Poradnika</i></p>
            </div>
            <div class="guide_img mob_hide" style="background-image:url(<?= base_url('assets/front/img/panel_alpha.png'); ?>);">

            </div>
        </div>
        <div class="guide_box size-2">
            <div class="guide_1">
                <div class="guide_bc" style="background-image:url(<?= base_url('assets/front/img/house-row.jpg'); ?>)"></div>
                <h1>Lorem ipsum dolor sit amet mi facilisis enim.</h1>
                <div class="guide_desc">Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum. Nam pellentesque tincidunt, risus tortor, fermentum augue. Sed eros. Sed aliquet ultrices posuere, odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per conubia nostra, per conubia nostra, per conubia nostra, per inceptos hymenaeos. Curabitur feugiat lectus lectus, eu condimentum sit amet libero mollis ac, varius nunc ac pede. Lorem ipsum dolor sit amet mi facilisis enim. Etiam nibh. Maecenas consequat, metus at ligula. Vivamus vitae metus. Morbi mauris ac turpis nec nunc eget tellus. Quisque urna. Suspendisse est. Nunc viverra a, hendrerit sollicitudin mi. Fusce commodo tincidunt mi, eu pulvinar felis, consequat lorem a leo sed est. Aliquam erat volutpat. Praesent justo. Vestibulum elit porttitor vel, ipsum.</div>
            </div>
            <div class="guide_2">
                <div class="guide_tile">
                    <div class="tile_pic" style="background-image:url(<?= base_url('assets/front/img/bulb.jpg'); ?>)"></div>
                    <div class="tile_text">LOREM IPSUM DOLOR SIT AMET</div>
                </div>
                <div class="guide_tile">
                    <div class="tile_pic" style="background-image:url(<?= base_url('assets/front/img/calc.jpg'); ?>)"></div>
                    <div class="tile_text">LOREM IPSUM DOLOR SIT AMET</div>
                </div>
                <a href="#" class="guide_button">
                    <span class="arrow" style="background-image:url(<?= base_url('assets/front/icons/arrow-right.svg'); ?>)"></span>
                    Sprawdź wszystkie nasze porady
                </a>
            </div>
        </div>
    </div>
</section>