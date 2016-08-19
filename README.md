# LocalStoreWebSite

Useage

edit html and add tag

Demo
```html
<h2 class="title"><span class="company">CompanyName</span></h2>
<div class="sortblock">	
	<h3 class="sort">
		<a class="sorttxt">SortName</a>
	</h3>
	<div class="label">CopyLabel：<input class="copytext" value="CopyText" readonly="true" /></div>
	<h3 class="sort">
		<a class="sorttxt">WebSite</a>
	</h3>
	<a target="_blank" href="http://www.baidu.com" class="link baidu">baidu</a>
</div>
```

config favicon.ico in head style and use in body class.
link class style bg icon is default: ![icon](https://ss0.bdstatic.com/k4oZeXSm1A5BphGlnYG/icon/6000.png)

```css
.baidu{
	background-image:url(http://www.baidu.com/favicon.ico);
}
```
```html
<a target="_blank" href="http://www.baidu.com" class="link baidu">百度一下</a>
```