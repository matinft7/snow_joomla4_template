# Snow Joomla4 Tempalte
it's a simple joomla4 template with the structure below :
## navbar section :
```
<nav class="navbar">
  <jdoc:include type="modules" name="main_menu" style="html5" />
  <jdoc:include type="modules" name="logo" style="html5" />
</nav>
```
so you can have the website logo and main menu on your navigation you can edit it and add more!
notice : 
in the example below you are adding a Joomla module in your template
- name attr is a key for putting your modules in this section
- style attr is for telling Joomla the render the module wiht HTML5 style
<br>`<jdoc:include type="modules" name="mod-name" style="html5" />`

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
rendered result :
<br>|website breadcrum|
<br>|modules in top_content part|
<br>|left|main|right|
<br>|bottom_content|
## footer:
```
<footer>
  <jdoc:include type="modules" name="footer" style="html5" />
</footer>
````
