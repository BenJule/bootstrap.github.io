<?php require_once("config.php"); ?>
<?php require_once("functions.php"); ?>

<?php 
    $page = isset($_GET["page"]) ? $_GET["page"] : "index";
    $pc   = getPage($page);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title><?php echo $website_title; ?></title>
		<meta charset="<?php echo $website_charset; ?>" />
		<?php include('config/css.php'); ?>
	</head>
	<body>

		<?php echo $pc; ?>
		<?php include('footer.php'); ?>

	</body>
</html>