<?php
require('books.db.php');
$books = get_books();

require('components/header.php');
require('components/books-list.php');
require('components/footer.php');
?>
