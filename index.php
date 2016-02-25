<? require_once 'content.php';?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><? echo $title; ?></title>
<meta name="description" content="<? echo $description;?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="1234567890" /> 
<meta property="og:type" content="website" /> 
<meta property="og:url" content="<? echo $url; ?>" /> 
<meta property="og:title" content="<? echo $title; ?>" />
<meta property="og:site_name" content="<? echo $name; ?>" /> 
<meta property="og:image" content="<? echo $url.'/img/social.png' ?>" />
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/58277627-3c21-470a-8914-fea99d477f57.css"/>
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="/img/favicon/spring.ico">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body>
	<? echo $content;?>
</body>
</html>