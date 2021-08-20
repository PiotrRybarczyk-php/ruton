<div class="banner">
    <div class="banner_bc" style="background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);"></div>
    <div class="mask">
        <div class="flex_box flex_align_c set_height">
            <h1 class="banner_title" style="padding-right:20px;"><?= $banner->title; ?></h1>
        </div>
        <div class="white-bg"></div>
    </div>
</div>
<div class="flex_box flex_c sep_top-l sep_bot-xl">
    <div class="offer_desc tab_pad">
        <?= $subpages[2]->description; ?>
    </div>
</div>
<?php $i = 0; ?>
<?php foreach ($blog as $item) : ?>
    <?php if ($item->active == 1) : ?>
        <section>
            <?php if ($i % 2 == 0) : ?>
                <div class="flex_box flex_c sep_bot-m">
                    <div class="grid-2 gtab-1 tab_pad" style="max-width:1110px">
                        <div class="block_normal">
                            <span class="bc_square" style="max-width:1660px;height:200px;width:100%;"></span>
                            <div class="blog_block-title">
                                <span class="top_line" style="top:25px;"></span>
                                <h1><?= $item->subtitle; ?></h1>
                            </div>
                            <div class="offer_desc" style="max-width:400px;">
                                <?= textlim($item->description, 548); ?>
                            </div>
                        </div>
                        <div class="block_normal">
                            <div class="offer_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
                            <div class="flex_box"><a href="<?= base_url('wpis/') . $item->id . '/artykul'; ?>" class="btn_blog">czytaj więcej</a><i class="tab_hide" style="width:20%;"></i><span class="green_square" style="max-width:183px;"></span></div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="flex_box flex_c sep_bot-m tab_hide">
                    <span class="bc_square" style="right:10%;max-width:1200px;height:200px;width:100%;"></span>
                    <div class="grid-2 gtab-1 tab_pad" style="max-width:1110px">
                        <div class="block_normal">
                            <div class="offer_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
                            <div class="flex_box"><span class="green_square" style="max-width:183px;"></span><i class="tab_hide" style="width:20%;"></i><a href="<?= base_url('wpis/') . $item->id . '/artykul'; ?>" class="btn_blog">czytaj więcej</a></div>
                        </div>
                        <div class="block_normal">
                            <div class="blog_block-title">
                                <span class="top_line" style="right:0%;top:25px;"></span>
                                <h2><?= $item->subtitle; ?></h2>
                            </div>
                            <div class="flex_box flex_r">
                                <div class="offer_desc" style="max-width:400px;">
                                    <?= textlim($item->description, 548); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_box flex_c sep_bot-m tab_flex">
                    <div class="grid-2 gtab-1 tab_pad" style="max-width:1110px">
                        <div class="block_normal">
                            <span class="bc_square" style="max-width:1660px;height:200px;width:100%;"></span>
                            <div class="blog_block-title">
                                <span class="top_line" style="top:25px;"></span>
                                <h1><?= $item->subtitle; ?></i></h1>
                            </div>
                            <div class="offer_desc" style="max-width:400px;">
                                <?= textlim($item->description, 548); ?>
                            </div>
                        </div>
                        <div class="block_normal">
                            <div class="offer_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>)"></div>
                            <div class="flex_box"><a href="<?= base_url('wpis/') . $item->id . '/artykul'; ?>" class="btn_blog">czytaj więcej</a><i class="tab_hide" style="width:20%;"></i><span class="green_square" style="max-width:183px;"></span></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php $i++; ?>
        </section>
    <?php endif; ?>
<?php endforeach ?>