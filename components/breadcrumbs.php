<div class="breadcrumbs">
		<a href="index.php">Главная</a>
		<a class="active" href="annotation.php?book_id=<?= $id ?>"><?= $book_heading ?></a>
		<a href="">
		<?= empty($page) ? ' ' : $book_chapters[$page-1]['chapter-title'] ?></a>
	  </div>