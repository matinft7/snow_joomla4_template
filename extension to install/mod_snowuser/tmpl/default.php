<?php
/**
 * @package    mod_snowuser
 *
 * @author     Snow <matinft27@gmail.com>
 * @copyright  [Snow all rights reserved]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

$user = JFactory::getUser();
if(empty($user->name)){
    echo "<a href='index.php/login'>ورود و ثبت نام</a>";
}else{
    echo "<a href='index.php/logout'>".$user->name."</a>";
}