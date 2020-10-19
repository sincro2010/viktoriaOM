<div class="annotation">

<div class="annotation-block annotation-card">

     <div class="annotation-features annotation-card-picture">
         <img class="book-img" src="<?= $book_img ?>" alt="<?= $book_heading ?>">
     </div>

     <div class="annotation-features  annotation-card-subs">
         <div class="book-meta">
             <h2 class="book-heading"><?= $book_heading ?></h2>
             <div class="book-category">
                 <span class="icon-tag">Категория: </span>
                 <span><?= $book_category ?></span>
             </div>
         </div>
         <div class="book-price">
             
             <button class="book-button"><?= $book_icon ?> <?= $book_price ?></button>

             <div class="book-icon">
             <a href="reader.php?book_id=<?= $id ?>&page=1">Читать</a>
             </div>
         </div>
     </div>

     <div class="annotation-features annotation-card-stats">
         <div class="book-raiting">
             <span>Рейтинг:</span>
             <button class="heart" type="button"><span class="likes-number">9</span></button>
         </div>
             <time datetime="2019-12-22">Публикация: 22 декабря 2019</time>
         <div class="add-to-library">
             <a href="#">Добавить в библиотеку</a>        
         </div>
     </div>
         
     
 </div>

<section class="annotation-block  annotation-text">
     <h2 class="book-heading">Аннотация к книге "<?= $book_heading ?>"</h2>
     <p><?= $book_description ?></p>
 </section>


 <section class="annotation-block  comment-block">
     <h2 class="book-heading">Комментарии</h2>
     <ol class="comment-list">
         <li class="user-comment">Коту понравилась книга</li>
         
     </ol>
     <form action="http://127.0.0.1:5500/annotation.php?book_id=<?= $id ?>" method="post" class="comment-form">
         <div class="comment-inner">
             <label class="comment-label" for="comment-input">Ваш комментарий</label>
             <input type="text" class="comment-field" placeholder="Комментарий" required id="comment-input">
         </div>
         <button class="comment-submit-button" type="submit">Отправить</button>
     </form>
 </section>
   <?= $result ?>
</div>

