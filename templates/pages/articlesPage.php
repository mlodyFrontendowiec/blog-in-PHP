<?php foreach ($data as $item):?>
<article class="article">
    <h1 class="article__title"><?php echo $item[1]?>
    </h1>
    <p class="article__content">
        <?php echo $item[2]?>
    </p>
    <a class="article__link" href="/">Czytaj więcej...</a>
</article>
<?php endforeach;
