<?php
  $sections = array('header', 'navbar', 'content', 'dash','footer_content','footer');

  foreach ($sections as $sec) {
    echo $__env->yieldContent($sec);
  }

 ?>
