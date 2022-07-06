<section>
    <div class="container">
        <article class="blog-post">
            <h1><?php echo $post['title']; ?></h1>
            <div class="details">
                <?php if ($post['created_at']) : ?>
                    Posted on: <?php echo date('M d Y', strtotime($post['created_at'])) ?> by <a href="#">leesy85</a>
                <?php else : ?>
                    Posted by <a href="#">leesy85</a>
                <?php endif; ?>
                <p><?php echo $post['body']; ?></p>
            </div>
        </article>
    </div>
</section>