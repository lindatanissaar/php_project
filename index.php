<?php
/**
 * Created by PhpStorm.
 * User: Linnu
 * Date: 17.02.2017
 * Time: 23:12
 */
// create template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR.'template.php';
// and use it
// create an empty template object
$tmpl = new template();
// set the file name for template
$tmpl->file = 'main.html';
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
// load template file content
$tmpl->loadFile();
// control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';
?>