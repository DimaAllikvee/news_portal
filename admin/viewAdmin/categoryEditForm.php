<?php ob_start(); ?>
<h2>Edit Category</h2>
<form action="categoryEditResult?id=<?= $detail['id'] ?>" method="POST">
    <div class="form-group">
        <label>Category Name:</label>
        <input type="text" name="name" class="form-control" value="<?= $detail['name'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="categoryAdmin" class="btn btn-default">Cancel</a>
</form>
<?php $content = ob_get_clean(); include 'viewAdmin/templates/layout.php'; ?>
