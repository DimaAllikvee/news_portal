<?php ob_start(); ?>
<h2>Add Category</h2>
<form action="categoryAddResult" method="POST">
    <div class="form-group">
        <label>Category Name:</label>
        <input type="text" name="name" class="form-control" required autofocus>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    <a href="categoryAdmin" class="btn btn-default">Cancel</a>
</form>
<?php $content = ob_get_clean(); include 'viewAdmin/templates/layout.php'; ?>
