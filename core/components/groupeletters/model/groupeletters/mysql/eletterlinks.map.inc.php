<?php
$xpdo_meta_map['EletterLinks']= array (
  'package' => 'groupeletters',
  'version' => '1.1',
  'table' => 'eletter_links',
  'fields' => 
  array (
    'newsletter' => NULL,
    'url' => NULL,
    'type' => 'link',
  ),
  'fieldMeta' => 
  array (
    'newsletter' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => true,
    ),
    'url' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'type' => 
    array (
      'dbtype' => 'set',
      'precision' => '\'link\',\'image\'',
      'phptype' => 'string',
      'null' => true,
      'default' => 'link',
    ),
  ),
);
