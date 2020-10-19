<?php
require('books.db.php');



$books = get_books();
$id = $_GET['book_id'];
$page = intval($_GET['page']) ?:1; 

$book_heading = get_book_heading($id);
$book_icon = get_book_icon($id);
$book_img = get_book_img($id);
$book_price = get_book_price($id);
$book_category = get_book_category($id);
$book_description = get_book_description($id);
$book_chapters = get_book_chapters($id);





$limit = 1; 

$offset = ($page - 1) * $limit;

$chapters_on_page = array_slice($book_chapters, $offset, $limit, true);

$chapters_quantity = count($book_chapters);

$pages = $chapters_quantity / $limit;


require('components/header.php');
require('components/breadcrumbs.php');
require('components/reader-block.php');
require('components/footer.php');

?>
