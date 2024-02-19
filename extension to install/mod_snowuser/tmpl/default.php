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
    echo "<a href='".$siteUrl."index.php/profile'>".$user->name."</a>";
}