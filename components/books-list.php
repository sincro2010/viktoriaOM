<div class="books">
<?php foreach($books as $id => $book): ?>
<article class="book">
    <h1 class="book-heading"><?= get_book_heading($id) ?></h1>
    <div class="book-meta">
      <div class="book-category">
        <span class="book-icon icon-tag">Категория: </span>
        <span><?= get_book_category($id) ?></span>
      </div>
      <div class="book-price">
        <span class="book-icon icon-time"><?= get_book_icon($id) ?></span>
        <span><?= get_book_price($id) ?></span>
      </div>
    </div>
    <div class="book-content">
      <figure class="book-figure">
        <img class="book-img" src="<?= get_book_img($id) ?>" alt="Замуж за коня">
        <figcaption>
          <p><?= get_book_description($id) ?></p>
        </figcaption>
      </figure>
      
      <a class="book-button" href="annotation.php?book_id=<?= $id ?>">Подробнее</a>
    </div>
  </article>
<?php endforeach; ?>
</div>

