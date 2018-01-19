<?php
# @Author: SPEDI srl
# @Date:   19-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 19-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;
?>
<section class="hero d-table" style="background-image: url(<?php echo $hero_image ?>); height: <?php echo $hero_height ?>">
  <div class="d-table-cell w-100 text-<?= $hero_align ?> align-middle hero-caption">
    <?php if($module->showtitle) : ?>
      <h1 class="hero-title text-white"><?= $module->title ?></h1>
    <?php endif; ?>
    <?php if($hero_caption) : ?>
      <?= $hero_caption ?>
    <?php endif; ?>

    <?php if($hero_button_yn) : ?>
    <a href="<?php echo $hero_button_link ?>" class="btn btn-primary no-shadow mt-3">
      <?php echo $hero_button_text ?>
    </a>
    <?php endif; ?>
  </div>
</section>
