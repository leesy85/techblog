<section>
    <?php
    $session = \Config\Services::session();
    ?>
    <?php if (isset($session->success)) : ?>
        <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
            <?php echo $session->success; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
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
            <h3><a href="/blog/<?php echo $newsItem['slug']; ?>"><?php echo $newsItem['title'] ?></a></h3>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="text-center">No posts have been found</p>
    <?php endif; ?>
</section>