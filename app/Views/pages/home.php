<section>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">NutsTech Blog</h1>
            <p class="lead">The blog created by Codeigniter4 </p>
            <hr class="my-4">
            <p>Home</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
</section>
<section class="blog-section">
    <?php if ($news) : ?>
        <?php foreach ($news as $newsItem) : ?>
            <h3><?php echo $newsItem['title'] ?></h3>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="text-center">No posts have been found</p>
    <?php endif; ?>
</section>