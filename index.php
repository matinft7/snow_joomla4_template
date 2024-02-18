<?php defined('_JEXEC') or die('Restricted access');?>
<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();

$pgId = $menu->getActive()->id;
$params = $menu->getParams($pgId);
$pgClass = $params->get('pageclass_sfx');
$pgView = $app->getRouter()->getVars()['view'];
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/snow_template_css.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/snow_<?php echo $pgClass; ?>_css.css" type="text/css" />
        <?php if($pgView == 'article') { ?>
            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/snow_article_css.css" type="text/css" />
        <?php } ?>
    </head>
    <body class="<?php echo $pgClass . " " . $pgView; ?> snow_template" id="<?php echo 'itemid-' . $pgId; ?>">
        <nav class="navbar">
            <jdoc:include type="modules" name="main_menu" style="html5" />
            <jdoc:include type="modules" name="logo" style="html5" />
        </nav>
        <main>
            <jdoc:include type="modules" name="breadcrumb" style="html5" />
            <jdoc:include type="modules" name="top_content" style="html5" />
            <div class="main">
                <jdoc:include type="modules" name="left" style="html5" />
                <div class="main_content snow_psection">
                    <jdoc:include type="component" />
                    <jdoc:include type="modules" name="main_content" style="html5" />
                </div>
                <jdoc:include type="modules" name="right" style="html5" />
            </div>
            <jdoc:include type="modules" name="bottom_content" style="html5" />
        </main>
        <footer>
            <jdoc:include type="modules" name="footer" style="html5" />
        </footer>
        <div class="copyright snow_psection">
            <p>تمامی حقوق متعلق به <?php echo $app->get('sitename'); ?> میباشد.</p>
            <p>طراحی و توسعه توسط <a href="https://github.com/matinft7" >Snow</a> </p>
        </div>
        <?php if($pgClass == 'products' && $pgView == 'article'){ ?>
            <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/snow_<?php echo $pgClass; ?>_js.js"></script>
        <?php } ?>
    </body>
</html>