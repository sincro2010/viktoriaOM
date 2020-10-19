<div class="reader">
   
        <div class="controls">
        <div class="settings contents">
            <label><span>Оглавление:</span>
         
                <select name="content" class="select">
               <option value="">Выберите главу</option>
                <?php foreach($book_chapters as $n => $book_chapter): ?>
                <option class="option" value="reader.php?book_id=<?= $id ?>&page=<?= $n+1 ?>"><?= $book_chapter['chapter-title'] ?></option>
            <?php endforeach; ?>
                </select>
                
            </label>
        </div>

        <div class="settings size">
            <label> <span>Размер текста: (<output name="pixels" class="pixels">14</output>px )</span>
                <input name="sizesetting" class="size-setting" type="range" min="8" max="48" step="1" value="14">
                
            </label>          
        </div>
    </div>

        <div class="paginator">
            <ul>
                <li class="prev">
                    <a href="/reader.php?book_id=<?= $id ?>&page=<?= $page - 1 ?>">Назад</a>
                </li>
                <?php for ($i = 1; $i <= $pages; $i = $i + 1): ?>
                <li class="page">
                    <a href="/reader.php?book_id=<?= $id ?>&page=<?= $i ?>" class="<?= $i === $page ? 'current' : '' ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>   
                <li><span class="hellip <?= $pages < 7 ? 'display-none' : '' ?>">&hellip;</span></li>


                <li class="next">
                    <a href="/reader.php?book_id=<?= $id ?>&page=<?= $page < $pages ? $page + 1 : $page ?>">Вперёд</a>
                </li>
            </ul>
        </div>
       
        <article class="chapter-content">
            <div class="container">
            <?= $book_chapter_title ?>
                    <h3 class="book-heading"><?= $book_chapters[$page-1]['chapter-title'] ?></h3>
                    <p><?= $book_chapters[$page-1]['chapter-content'] ?></p>
            </div>
        </article>
    </div>