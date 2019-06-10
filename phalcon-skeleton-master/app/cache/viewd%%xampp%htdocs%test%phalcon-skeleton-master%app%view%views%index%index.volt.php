<!doctype html>
<head>
    <title><?= $this->escaper->escapeHtml($strSiteTitle) ?></title>
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css" />
</head>
<body>
    
    <?php 
    	foreach ($names as $name) {
    		echo "$name<br>";
    	}
    ?>

</body>
</html>