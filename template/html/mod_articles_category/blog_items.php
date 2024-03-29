<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   (C) 2020 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;

?>
<?php foreach ($items as $item) : ?>
<li>
    <?php
    $img_data = json_decode($item->images);
    $img = explode("#",$img_data->image_intro)[0];
    $alt = $img_data->image_intro_alt;

    $tplParams = JFactory::getApplication()->getTemplate(true)->params;
    $webpGen = $tplParams->get('webp_gen', 0);
    if($webpGen){
        if(!file_exists($img.'.webp')){
            $jpg = imagecreatefromstring(file_get_contents($img));
            $webp = imagewebp($jpg,$img.'.webp',5);
            imagedestroy($jpg);
        }
        $img .= '.webp';
    }
    ?>
    <div class="snow_template_blog_heading">
    <img src="<?php echo $img; ?>" alt="<?php echo $alt; ?>" width="380px" height="200px" loading="lazy" />
    <?php if ($params->get('link_titles') == 1) : ?>
        <?php $attributes = ['class' => 'mod-articles-category-title ' . $item->active]; ?>
        <?php $link = htmlspecialchars($item->link, ENT_COMPAT, 'UTF-8', false); ?>
        <?php $title = htmlspecialchars($item->title, ENT_COMPAT, 'UTF-8', false); ?>
        <?php echo HTMLHelper::_('link', $link, $title, $attributes); ?>
    <?php else : ?>
        <?php echo $item->title; ?>
    <?php endif; ?>
    </div>
    <div class="snow_template_blog_content">

    <?php if ($item->displayHits) : ?>
        <span class="mod-articles-category-hits">
            (<?php echo $item->displayHits; ?>)
        </span>
    <?php endif; ?>

    <?php if ($params->get('show_author')) : ?>
        <span class="mod-articles-category-writtenby">
            <?php echo "نویسنده : " . $item->displayAuthorName; ?>
        </span>
    <?php endif; ?>

    <?php if ($item->displayCategoryTitle) : ?>
        <span class="mod-articles-category-category">
            (<?php echo $item->displayCategoryTitle; ?>)
        </span>
    <?php endif; ?>

    <?php if ($item->displayDate) : ?>
        <span class="mod-articles-category-date"><?php echo "تاریخ انتشار : " . $item->displayDate; ?></span>
    <?php endif; ?>

    <?php if ($params->get('show_tags', 0) && $item->tags->itemTags) : ?>
        <div class="mod-articles-category-tags">
            <?php echo LayoutHelper::render('joomla.content.tags', $item->tags->itemTags); ?>
        </div>
    <?php endif; ?>

    <?php if ($params->get('show_introtext')) : ?>
        <p class="mod-articles-category-introtext">
            <?php echo $item->displayIntrotext; ?>
        </p>
    <?php endif; ?>

    <?php if ($params->get('show_readmore')) : ?>
        <p class="mod-articles-category-readmore">
            <a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
                <?php if ($item->params->get('access-view') == false) : ?>
                    <?php echo Text::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
                <?php elseif ($item->alternative_readmore) : ?>
                    <?php echo $item->alternative_readmore; ?>
                    <?php echo HTMLHelper::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
                        <?php if ($params->get('show_readmore_title', 0)) : ?>
                            <?php echo HTMLHelper::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
                        <?php endif; ?>
                <?php elseif ($params->get('show_readmore_title', 0)) : ?>
                    <?php echo Text::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
                    <?php echo HTMLHelper::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
                <?php else : ?>
                    <?php echo Text::_('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
                <?php endif; ?>
            </a>
        </p>
    <?php endif; ?>
    </div>
</li>
<?php endforeach; ?>
