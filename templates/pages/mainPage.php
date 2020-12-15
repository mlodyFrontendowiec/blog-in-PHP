<article class="article">
    <h1 class="article__title">Welcome to my blog</h1>
    <p class="article__content">
        Hello, My name is Paul. I am interseted in frontend and backend development. In this project I am using such
        technolgies as HTML, SASS, JavaScript, PHP. Wait for more content :)
    </p>

</article>
<?php foreach ($data as $item):?>
<article class="article">
    <h1 class="article__title"><?php echo htmlentities($item[1])?>
    </h1>
    <p class="article__content">
        <?php echo htmlentities($item[2])?>
    </p>
    <a class="article__link" href="/">Read more...</a>
</article>
<?php endforeach;
