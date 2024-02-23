<?php
use Joomla\CMS\Plugin\CMSPlugin;
defined('_JEXEC') or die;

class plgContentSnowProductPageMaker extends CMSPlugin {
    
    public function onContentAfterDisplay($context, &$article, &$params, $page = 0) {
        if ($context === 'com_content.article' && $page == 0) {
            $categoryId = $article->catid;
            if ($categoryId == $this->params->get('target_category_id')) {
                $article->text .= '<div class="snow-addtocart-container">
                <div class="snow-addtocart-ordercount">
                <span id="cart-plus">+</span>
                <input type="number" value="0" id="order-count"/>
                <span id="cart-minus">-</span>
                </div>
                <span class="snow-addtocart">اضافه به سبد خرید</span>
                </div>';
            }
        }
        
        return '';
    }
}
?>