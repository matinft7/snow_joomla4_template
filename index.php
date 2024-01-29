<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/moon_template_css.css" type="text/css" />
    </head>
    <body>
        <nav class="navbar">
            <jdoc:include type="modules" name="main_menu" style="html5" />
            <jdoc:include type="modules" name="logo" style="html5" />
        </nav>
        <main>
            <jdoc:include type="modules" name="breadcrumb" style="html5" />
            <jdoc:include type="modules" name="top_content" style="html5" />
            <div class="main">
                <jdoc:include type="modules" name="left" style="html5" />
                <div class="main_content">
                    <jdoc:include type="component" />
                    <jdoc:include type="modules" name="main_content" style="html5" />
                </div>
                <jdoc:include type="modules" name="right" style="html5" />
            </div>
            <jdoc:include type="modules" name="bottom_content" style="html5" />
        </main>
        <jdoc:include type="modules" name="footer" style="html5" />
    </body>
</html>