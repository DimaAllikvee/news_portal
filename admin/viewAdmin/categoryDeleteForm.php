<?php ob_start(); ?>
<h2>Delete Category</h2>
<div class="alert alert-danger">
    <p>Are you sure you want to delete category <strong><?= $detail['name'] ?></strong>?</p>
</div>
<form action="categoryDelResult?id=<?= $detail['id'] ?>" method="POST">
    <button type="submit" class="btn btn-danger">Yes, Delete</button>
    <a href="categoryAdmin" class="btn btn-default">Cancel</a>
</form>
<?php $content = ob_get_clean(); include 'viewAdmin/templates/layout.php'; ?>
