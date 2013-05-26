<?php

require_once '../vendor/autoload.php';
use \Michelf\Markdown;

$text = file_get_contents('../sponsorship_prospectus.md');
$my_html = Markdown::defaultTransform($text);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>True North PHP Sponsorship Prospectus</title>
		<link rel="stylesheet" href="css/sponsorship_prospectus.css">
	</head>
	<body>
		<div class="container">
			<?php echo $my_html; ?>
		</div>
	</body>
</html>
