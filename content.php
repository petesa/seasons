<?
	$texts = fopen('texts.csv','r');
	
	$lang = $_GET['lang'] == 'es' ? 1 : 0;
	$l_iso = $_GET['lang'] == 'es'?'es':'en';

	while (false !== ($row = fgetcsv($texts, 5000,',','\''))) {
		$text[] = $row[$lang];
	}

	fclose($texts);
	
	$url = 'seasons/';
	$title = $text[0]; /* <--- Hay que hacer que esto cambie en cada página*/
	$name = $text[0];
	$description = $text[1];
	$sorry_too_old = $text[2];
	$noscript = $text[3];
	$e_404 = $text[4];
    $legales = '<p class="legales"><a href="/'.$l_iso.'/about">'.$text[5].'</a></p>';
	$about = $text[6];
    /*$every_page = array_slice($text, 6, 1);

    for($i = 0; $i<$every_page; $i++){
        $pages.= '<section id="p'.($i+1).'"></section>';
    }*/
    $pages = $text[7];

	if(!isset($_GET['error'])){
		$content = $pages;
	}else
		$content = '<div id="404" class="container nogo">'.$e_404.$legales.'</div>';
    
    $content = '<!--[if lte IE 7]>
						<div id="unsupported" class="container nogo">'.
							$sorry_too_old.
							'<ul>
								<li>
									<a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Mozilla Firefox</a>
								</li>
								<li>
									<a href="https://www.opera.com/download" target="_blank">Opera Browser</a>
								</li>
								<li>
									<a href="https://www.google.com/chrome/browser/" target="_blank">Google Chrome</a>
								</li>
							</ul>
						</div>
					<![endif]-->
					<!--[if gte IE 8]><!-->
						<noscript>
							<div id="noscript" class="container nogo">
								'.$noscript.'
							</div>
						</noscript>'.$content.
                        '<!--<![endif]-->';