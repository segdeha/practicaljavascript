<?php

// prepare main content
$content = file_get_contents('pages/' . $vars['page']);
$content = Markdown($content);
$content = SmartyPants($content);

// prepage comments
$comments = '';

?>
<article>
    <?= $content ?>
<?php /*
    <section id="comments">
        <?= $comments ?>
    </section>
*/ ?>

<?php if (isset($nav['next']) || isset($nav['previous'])): ?>
    <nav id="topics">
        <ul>
            <li><?php if (isset($nav['previous'])): ?><?php /* &#171; */ ?><a href="/<?= $nav['previous']['uri'] ?>"><?= $nav['previous']['label'] ?></a><?php endif; ?></li>
            <li><?php if (isset($nav['next'])): ?><a href="/<?= $nav['next']['uri'] ?>"><?= $nav['next']['label'] ?></a><?php /* &#187; */ ?><?php endif; ?></li>
        </ul>
    </nav>
<?php endif; ?>
</article>
