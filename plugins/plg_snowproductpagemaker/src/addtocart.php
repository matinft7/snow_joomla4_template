<?php
define('_JEXEC', 1);
require_once '../../../../includes/app.php';
require_once '../../../../includes/defines.php';
require_once '../../../../includes/framework.php';
use Joomla\CMS\Factory;
$orderTitle = $_POST['order-name'];
$orderPrice = $_POST['order-price'];
$orderCount = $_POST['order-count'];
$orderHash = $_POST['order-hash'];
$backUri = $_POST['back-uri'];
$productCount = $_POST['product-count'];
$hash = hash('sha256',$orderPrice.$backUri.$orderTitle.$productCount.'asdsad45');
if($hash == $orderHash){
    $session = Factory::getSession();
    $sessions = $session->getIterator();
    $cartCount = $orderCount;
    if($productCount !== 'نامحدود'){
        foreach($sessions as $key => $val){
            if(str_contains($key,'order-')){
                if($val['title'] == $orderTitle){
                    $cartCount += (int)$val['count'];
                }
            }
        }
        if($cartCount > (int)$productCount){
            echo "این تعداد محصول موجود نیست";
            die;
        }
    }
    $order = array(
        'title' => $orderTitle,
        'price' => $orderPrice,
        'count' => $orderCount
    );
    
    $session->set('order-'.rand(0,999),$order);
    die;
    echo '<script>window.location.href = "'.$backUri.'";</script>';
}
?>