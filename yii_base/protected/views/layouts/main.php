<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?= Yii::app()->params['bootstrap_css']; ?>" />
	<script src="<?= Yii::app()->params['jquery']; ?>"></script>
	<script src="<?= Yii::app()->params['bootstrap_js']; ?>"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>

<body>
	<div class="container">

		<div class="container" id="page">
			<?php echo $content; ?>
		</div>

		<footer class="footer">
			Ypszi's yii base &copy; <?php echo date('Y'); ?> by Ypszi.<br/>
			All Rights Reserved.<br/>
		</footer>

	</div>
</body>
</html>
