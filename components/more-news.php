<?php
function renderMoreNews($currentArticleId = null)
{
    // Load all news articles
    $allArticles = include __DIR__ . '/../data/news-articles.php';

    // Get the 20 latest articles
    $latestArticles = array_slice($allArticles, 0, 20);

    // Exclude current article if ID is provided
    if ($currentArticleId !== null) {
        $latestArticles = array_filter($latestArticles, function ($article) use ($currentArticleId) {
            return !isset($article['id']) || $article['id'] !== $currentArticleId;
        });
    }

    // Shuffle to randomize
    shuffle($latestArticles);

    // Get only 3 articles
    $randomArticles = array_slice($latestArticles, 0, 3);

    // Render the section
    ?>
    <div class="row section-head">
        <div class="twelve columns">
            <h1>Other News and Events</h1>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <div id="blog-wrapper" class="bgrid-third mob-bgrid-whole group">
                <?php foreach ($randomArticles as $article): ?>
                    <article class="bgrid <?= htmlspecialchars($article['class'] ?? '') ?>">
                        <a href="<?= htmlspecialchars($article['link']) ?>">
                            <picture>
                                <?php if (!empty($article['webp'])): ?>
                                <source
                                    srcset="<?= htmlspecialchars($article['webp']) ?> 1080w"
                                    sizes="(max-width: 600px) 100vw, 540px"
                                    type="image/<?= htmlspecialchars($article['image_type'] ?? 'webp') ?>"
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
                                <?= $article['title'] ?>
                            </a>
                        </h3>
                        <p><?= htmlspecialchars($article['excerpt']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <br>
    <a class="button stroke" href="../../news.html">More News</a>
<?php
}
?>
