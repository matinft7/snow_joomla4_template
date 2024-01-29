# Snow Joomla4 Tempalte
it's a simple joomla4 template with the structure below :
## navbar section :
```
<nav class="navbar">
            <jdoc:include type="modules" name="main_menu" style="html5" />
            <jdoc:include type="modules" name="logo" style="html5" />
</nav>
```
## main section : 
```
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
```
## footer:
```
<footer>
            <jdoc:include type="modules" name="footer" style="html5" />
</footer>
````
