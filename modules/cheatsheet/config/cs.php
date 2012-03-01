<?php defined('SYSPATH') OR die('No direct access allowed.');
return array
(
    // classes to exclude from sheet (lowercase!)
    'class' => array ('kodoc','kodoc_method','kodoc_property','kodoc_markdown'),
    // should data be cached (recommended, cache is real data consistent, not on time expiration)
    'cache' => TRUE,
);
