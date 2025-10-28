<?php
function renderNewsCard($article)
{
?>
<article class="bgrid <?= $article['class'] ?? '' ?>">
    <a href="<?= htmlspecialchars($article['link']) ?>">
        <picture>
            <?php if (!empty($article['webp'])): ?>
            <source
                srcset="<?= htmlspecialchars($article['webp']) ?> 1080w"
                sizes="(max-width: 600px) 100vw, 540px"
                type="image/webp"
            />
            <?php endif; ?>
            <img
                src="<?= htmlspecialchars($article['image']) ?>"
                alt="<?= htmlspecialchars($article['title']) ?>"
                loading="lazy"
                decoding="async"
                width="1080"
                height="1080"
            />
        </picture>
    </a>
    <h5><?= htmlspecialchars($article['date']) ?></h5>
    <h3>
        <a href="<?= htmlspecialchars($article['link']) ?>">
            <?= htmlspecialchars($article['title']) ?>
        </a>
    </h3>
    <p><?= htmlspecialchars($article['excerpt']) ?></p>
</article>
<?php
}
?>
