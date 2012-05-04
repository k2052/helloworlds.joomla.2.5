<?php             

// No direct access to this file
defined('_JEXEC') or die('Restricted access');     

require_once 'cats.php';
 
$cats = new Cats();
echo $cats->speak();