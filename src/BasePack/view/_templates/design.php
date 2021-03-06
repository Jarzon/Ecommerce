<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<title>Title</title>
		<meta name="description" content="">

        <link rel="icon" type="image/png" href="/img/icon.png">
        <link href="/css/main.css" rel="stylesheet">
        <?= $this->section('css') ?>
	</head>
	<body>
        <?= $this->insert('sections/menu', 'BasePack')?>

        <main>
            <?= $this->section('default') ?>
        </main>

        <footer>

        </footer>

        <script src="/js/main.js"></script>
        <?= $this->section('js') ?>

        <?=(isset($_getToolbar) AND $this->insert('toolbar', 'PrimPack'))?>
	</body>
</html>
