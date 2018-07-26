<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "news".
 *
 * Auto generated 24-05-2017 17:06
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'News system',
  'description' => 'Versatile news extension, based on extbase & fluid. Editor friendly, default integration of social sharing and many other features',
  'category' => 'fe',
  'author' => 'Georg Ringer',
  'author_email' => 'typo3@ringerge.org',
  'state' => 'stable',
  'uploadfolder' => true,
  'clearCacheOnLoad' => 1,
  'author_company' => '',
  'version' => '5.3.3',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.9.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'dd_googlesitemap' => '2.0.5-2.99.99',
      'rx_shariff' => '7.0.0-7.99.99',
    ),
  ),
  'createDirs' => NULL,
  'clearcacheonload' => true,
);

