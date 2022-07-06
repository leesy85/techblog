<div class="container">
    <h1>Create new post</h1>
    <?php if ($_POST) : ?>
        <?php echo \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form action="/blog/create" method="POST">
        <div class="form-group">
            <label for="title">
                <strong>Title : </strong>
            </label>
            <input type="text" name="title" id="title" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">
                <strong>Body : </strong>
            </label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>