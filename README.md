# Snow Joomla4 Tempalte
## Settings :
### CSS opt
if enable it css snow template will get css codes from files and load it in <style></style> tag so we have less content loading and page loading will be faster.
### Webp Generator 
if enable it snow template module overrides will convert images to .webp format.
### Style tab
you can add fonts, colors, padding, shadow, radius and etc. as css var.
## (Updates!) Styling Optimized :
now we have snow_template_css.css that use for your global css classes and when you make a joomla menu you should make a sperated file name snow_menuClass_css.css that you should set a class to your menu and write your menu styles in it and this make the site load faster because of smaller css files.<br>
example:<br>
you set home class to the main page of your website then you shoud make a snow_home_css.css in css folder and write styles in it.<br>
you set blog class to the blog of your website then you shoud make a snow_home_css.css in css folder and write styles in it.<br>
## (Updates!) Webp Images :
now artivle category modules convert images to webp.
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
