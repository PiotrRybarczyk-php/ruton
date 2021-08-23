<div class="banner">
    <div class="banner_bc" style="background-image:url(<?= base_url('uploads/') . $banner->photo; ?>);"></div>
    <div class="mask">
        <div class="flex_box flex_align_c set_height">
            <h1 class="banner_title" style="padding-right:108px;"><?= $banner->title; ?></h1>
        </div>
        <div class="white-bg"></div>
    </div>
</div>
<div class="banner_cover"></div>
<div class="flex_box flex_c sep_top-l sep_bot-xl">
    <div class="offer_desc tab_pad">
        <?= $subpages[1]->description; ?>
    </div>
</div>
<?php $i = 0; ?>
<?php foreach ($offer as $item) : ?>
    <?php if ($item->active == 1) : ?>
        <?php if ($i % 2 == 0) : ?>
            <section>
                <div class="flex_box flex_c sep_bot-m">
                    <span class="bc_square" style="max-width:1660px;height:340px;width:100%;right:0%;"></span>
                    <div class="block_normal main_padding">
                        <div class="grid-3 gtab-2">
                            <div class="block_normal tab_size-2">
                                <div class="self_block-title">
                                    <span class="top_line" style="top:25px;"></span>
                                    <h1><?= $item->title; ?></h1>
                                </div>
                                <div class="offer_desc self_pad-l">
                                    <?= textlim($item->description, 520); ?>
                                </div>
                            </div>
                            <div class="block_normal size-2 self_pad-r">
                                <div class="self_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);"></div>
                                <span class="green_square" style="max-width:480px;"></span>
                                <button class="btn_self">kontakt</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <section>
                <div class="flex_box flex_c sep_bot-m tab_hide">
                    <span class="bc_square" style="max-width:1660px;height:340px;width:100%;left:0%;"></span>
                    <div class="block_normal main_padding">
                        <div class="grid-3 gtab-2">
                            <div class="block_normal size-2 self_pad-r">
                                <div class="self_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);float:right;"></div>
                                <span class="green_square" style="max-width:480px;float:right;"></span>
                                <div class="flex_box flex_mob_e" style="float:right;"><button class="btn_self">kontakt</button></div>
                            </div>
                            <div class="block_normal tab_size-2">
                                <div class="self_block-title">
                                    <span class="top_line" style="top:25px;right:0px;"></span>
                                    <h1 style="max-width:unset;"><?= $item->title; ?></h1>
                                </div>
                                <div class="offer_desc self_pad-l">
                                    <?= textlim($item->description, 520); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex_box flex_c sep_bot-m tab_flex">
                    <span class="bc_square" style="max-width:1660px;height:340px;width:100%;right:0%;"></span>
                    <div class="block_normal main_padding">
                        <div class="grid-3 gtab-2">
                            <div class="block_normal tab_size-2">
                                <div class="self_block-title">
                                    <span class="top_line" style="top:25px;"></span>
                                    <h1><?= $item->title; ?></h1>
                                </div>
                                <div class="offer_desc self_pad-l">
                                    <?= textlim($item->description, 520); ?>
                                </div>
                            </div>
                            <div class="block_normal size-2 self_pad-r">
                                <div class="self_pic" style="background-image:url(<?= base_url('uploads/') . $item->photo; ?>);"></div>
                                <span class="green_square" style="max-width:480px;"></span>
                                <button class="btn_self">kontakt</button>
                            </div>
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
                <a href="tel:<?= $contact->phone2; ?>" class="call_number"><?= $prefix; ?><i><?= $contact->phone2; ?></i></a>
            </div>
        </div>
    </section>
<?php endif; ?>