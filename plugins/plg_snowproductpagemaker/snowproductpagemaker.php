<?php
use Joomla\CMS\Plugin\CMSPlugin;
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;

class plgContentSnowProductPageMaker extends CMSPlugin {
    
    public function onContentAfterDisplay($context, &$article, &$params, $page = 0) {
        if ($context === 'com_content.article' && $page == 0) {
            $categoryId = $article->catid;
            if ($categoryId == $this->params->get('target_category_id')) {
                $uri = Uri::base();
                $backUri = $uri.'index.php/products/'.$article->alias;
                $action = $uri."plugins/content/snowproductpagemaker/src/addtocart.php";
                $orderTitle = $article->title;
                $fields = $article->jcfields;
                $orderPrice = '';
                $productCount = '';
                foreach ($fields as $field){
                    if($field->name == 'price'){
                        $orderPrice = $field->value;
                    }else if($field->name == 'pcount'){
                        $productCount = $field->value;
                    }
                }
                $hash = hash('sha256',$orderPrice.$backUri.$orderTitle.$productCount.'asdsad45');
                $article->text .= '<form method="post" action="'.$action.'"class="snow-addtocart-container">
                <div class="snow-addtocart-ordercount">
                <span id="cart-plus">+</span>
                <input type="number" name="order-count" value="1" id="order-count"/>
                <input type="hidden" name="order-name" value="'.$orderTitle.'" />
                <input type="hidden" name="order-price" value="'.$orderPrice.'" />
                <input type="hidden" name="order-hash" value="'.$hash.'" />
                <input type="hidden" name="back-uri" value="'.$backUri.'" />
                <input type="hidden" name="product-count" value="'.$productCount.'" />
                <span id="cart-minus">-</span>
                </div>
                <input type="submit" class="snow-addtocart" value="اضافه به سبد خرید">
                </form>';
            }
        }
        
        return '';
    }
}
?>