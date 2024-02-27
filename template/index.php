<?php defined('_JEXEC') or die('Restricted access');?>
<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();

$pgId = $menu->getActive()->id;
$params = $menu->getParams($pgId);
$pgClass = $params->get('pageclass_sfx');
$pgClasses = explode(" ",$pgClass);
$pgView = $app->getRouter()->getVars()['view'];

$params = $app->getTemplate(true)->params;
$cssOpt = $params->get('css_opt', 0);
$logo = $params->get('logo',0);
$fav = $params->get('fav',0);
?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if($cssOpt) { ?>
            <?php
               $globalCss = file_get_contents("http://localhost/".$this->baseurl."/templates/".$this->template."/css/snow_template_css.css");
               $pageCss = "";
               foreach($pgClasses as $class) {
                   $pageCss .= file_get_contents("http://localhost/".$this->baseurl."/templates/".$this->template."/css/snow_".$class."_css.css");
               }
               if($pgView == 'article') {
                   $pageCss .= file_get_contents("http://localhost/".$this->baseurl."/templates/".$this->template."/css/snow_article_css.css");
               }
            ?>
            <style>
                <?php echo ":root{"; ?>
                <?php echo "--mainColor: ".$params->get('main_color',0).";"; ?>
                <?php echo "--secColor: ".$params->get('sec_color',0).";"; ?>
                <?php echo "--textColor: ".$params->get('text_color',0).";"; ?>
                <?php echo "--transition: ".$params->get('transition',0).";"; ?>
                <?php echo "--shadow: ".$params->get('shadow',0).";"; ?>
                <?php echo "--radius: ".$params->get('radius',0).";"; ?>
                <?php echo "--snow: #f8f8ff;"; ?>
                <?php echo "--snowLink: #3f8da0;"; ?>
                <?php echo "}"; ?>
                <?php echo "@font-face {" ?>
                <?php echo "font-family: ".$params->get('font',0).";" ?>
                <?php echo "src: url('".$params->get('font_url')."');"?>
                <?php echo "}"; ?>
                <?php echo "*{ font-family: ".$params->get('font',0)."; }" ?>
                <?php echo $globalCss." ".$pageCss; ?>
            </style>
        <?php } else { ?>
            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/snow_template_css.css" type="text/css" />
            <?php foreach($pgClasses as $class) { ?>
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/snow_<?php echo $class; ?>_css.css" type="text/css" />
            <?php } ?> 
            <?php if($pgView == 'article') { ?>
                <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/snow_article_css.css" type="text/css" />
            <?php } ?>
        <?php } ?>
        <link rel="icon" type="image/png" href="<?php echo explode('#',$fav)[0]; ?>" >
    </head>
    <body class="<?php echo $pgClass . " " . $pgView; ?> snow_template" id="<?php echo 'itemid-' . $pgId; ?>">
        <nav class="navbar">
            <jdoc:include type="modules" name="main_menu" style="html5" />
            <div class="nav-content">
                <div class="logo">
                    <img src="<?php echo explode('#',$logo)[0]; ?>" alt="site-logo" />
                </div>
                <jdoc:include type="modules" name="nav_icons" style="html5" />
            </div>
        </nav>
        <main>
            <jdoc:include type="modules" name="breadcrumb" style="html5" />
            <jdoc:include type="modules" name="top_content" style="html5" />
            <div class="main">
                <jdoc:include type="modules" name="left" style="html5" />
                <div class="main_content snow_psection">
                    <jdoc:include type="component" />
                    <jdoc:include type="message" />
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
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/snow_template_js.js"></script>
        <?php if($pgClass == 'products' && $pgView == 'article'){ ?>
            <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/snow_<?php echo $pgClass; ?>_js.js"></script>
        <?php } ?>
    </body>
</html>