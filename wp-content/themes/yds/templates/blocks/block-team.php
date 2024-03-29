<?php
$spacer_top = (get_field('spacing_top_team')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_team')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$text_align = strtolower('text-'.get_field('text_align_team'));
$title = get_field('title_team');
$text = get_field('text_team');
$background = get_field('background_team');
$repeater = get_field('repeater_team');
$amount = get_field('number_of_columns_team');

?>
<div class="block b-team <?php if($background): ?><?php endif; ?> <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row flex-column <?= $text_align; ?> mb-4  d-block d-lg-none">
            <div class="col">
                <?php if($title): ?>
                    <h3><?= $title; ?></h3>
                <?php endif; ?>

                <?php if($text): ?>
                    <p><?= $text; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row text-center">
            <?php foreach($repeater as $column): ?>
                <?php if($amount == '2'): ?><div class="b-team-content col-6 col-md-6"><?php endif; ?>
                <?php if($amount == '3'): ?><div class="b-team-content col-6 col-md-4"><?php endif; ?>
                <?php if($amount == '4'): ?><div class="b-team-content col-6 col-md-6 col-lg-3"><?php endif; ?>
                    <div class="block-background h-100 py-4 py-md-5 px-3 px-md-4">
                        <?= wp_get_attachment_image($column['repeater_image_team'], 'block-team', false, array("title" => get_the_title($column['repeater_image_team']), 'class' => 'img-fluid mb-3')); ?>

                        <?php if($column['repeater_title_team']): ?>
                            <h5 class="mb-2"><?= $column['repeater_title_team']; ?></h5>
                        <?php endif; ?>

                        <?php if($column['repeater_text_team']): ?>
                            <p class="m-0"><?= $column['repeater_text_team']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>