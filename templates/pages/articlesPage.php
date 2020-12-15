<?php foreach ($data as $item):?>
<article class="article">
    <h1 class="article__title"><?php echo htmlentities($item[1])?>
    </h1>
    <p class="article__content">
        <?php echo htmlentities($item[2])?>
    </p>
    <a class="article__link" href="/">Czytaj więcej...</a>
</article>
<?php endforeach;
