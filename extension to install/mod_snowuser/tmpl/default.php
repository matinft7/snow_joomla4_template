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
use Joomla\CMS\Uri\Uri;
$siteUrl = Uri::base();
$user = JFactory::getUser();

if(empty($user->name)){
    echo "<a href='".$siteUrl."index.php/login'><img src='".$siteUrl."modules/mod_snowuser/src/account_circle.svg' alt='account-icon' /></a>";
}else{
    echo "<div class='snow-user'>";
    echo "<span id='snow-user-show'>".$user->name."</span>";
    echo "<div class='snow-user-menu'>";
    echo "<a href='".$siteUrl."index.php/profile'>پروفایل</a>";
    echo "<a href='".$siteUrl."index.php/logout'>خروج</a>";
    echo "</div>";
    echo "</div>";
}