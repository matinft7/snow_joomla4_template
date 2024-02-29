<?php
/**
 * @package    mod_snowcart
 *
 * @author     Snow <matinft27@gmail.com>
 * @copyright  [Snow all rights reserved]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;
$siteUrl = Uri::base();
echo "<a id='snowcart-icon' href='".$siteUrl."index.php/cart'><img src='".$siteUrl."modules/mod_snowuser/src/shopping_bag.svg' alt='cart-icon' /></a>";