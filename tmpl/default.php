<?php
/**
 * @version    1.0.x
 * @package    SP Soft Background Image Module
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;
?>
<section class="hero" style="background-image: url(<?php echo $hero_image ?>); height: <?php echo $hero_height ?>px">
  <div class="container">
    <?php if($hero_title != '' OR $hero_caption != '') : ?>
    <div class="card hero__caption animated slideInLeft">
      <div class="card-block">
        <h3 class="card-title"><?php echo $hero_title ?></h3>
        <p class="card-text"><?php echo $hero_caption ?></p>
        <?php if($hero_button_yn) : ?>
        <a href="<?php echo $hero_button_link ?>" class="btn btn-primary page-scroll">
          <?php echo $hero_button_text ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
