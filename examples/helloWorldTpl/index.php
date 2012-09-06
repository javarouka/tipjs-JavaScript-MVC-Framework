<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<title>tipJS.com - Javascript MVC Framework Hello World Example (with HTML Template)</title>
<script src="/tipJS/tipJS/tipJS-MVC-1.17.js"></script>
<script>
window.onload = function(){
	var input="input value";
	tipJS.loadApp(["helloWorldTpl"],input);
};
</script>
</head>
<body>
<a href="/tipJS/examples/helloWorldTpl/define.js" target="_blank">define.js</a><br/>
<a href="/tipJS/examples/helloWorldTpl/controllers/hello.js" target="_blank">controllers/hello.js</a><br/>
<a href="/tipJS/examples/helloWorldTpl/templates/helloWorld.tpl" target="_blank">templates/helloWorld.tpl</a><br/>
    <div id="contents"></div>
    <input type="button" value="click me"
    onclick="tipJS.action('helloWorldTpl.hello','tipJS.com')"/>
</body>
</html>