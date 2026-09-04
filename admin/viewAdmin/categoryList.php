<?php ob_start(); ?>
<h2>Category List</h2>
<a href="categoryAdd" class="btn btn-success mb-3">Add New Category</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="10%">ID</th>
            <th width="60%">Category Name</th>
            <th width="30%">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($arr as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td>
                <a href="categoryEdit?id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="categoryDel?id=<?= $category['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $content = ob_get_clean(); include 'viewAdmin/templates/layout.php'; ?>
