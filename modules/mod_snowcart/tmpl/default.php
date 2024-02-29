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
use Joomla\CMS\Factory;
$siteUrl = Uri::base();
$session = Factory::getSession();
$sessions = $session->getIterator();

echo "<div class='snow-cart'>";
echo "<div id='snowcart-icon'><img src='".$siteUrl."modules/mod_snowuser/src/shopping_bag.svg' alt='cart-icon' /></div>";
echo "<table class='snow-cart-orders'>";
foreach($sessions as $key => $val){
    if(str_contains($key,'order-')){
        echo "<tr class='snow-cart-order'>";
        echo "<td>".$val['title']."</td>";
        echo "<td>".$val['count']."</td>";
        echo "<td>".strval((int)$val['price']*(int)$val['count'])."</td>";
        echo "</tr>";
    }
}
echo "</table>";
echo "</div>";