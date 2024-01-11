<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<form action="<?= base_url('products/save') ?>" method="post">
        <input type="hidden" name="id" >

        <label for="name">Name:</label>
        <input type="text" name="name"  required>
        <br>

        <label for="price">Price:</label>
        <input type="number" name="price"  required>
        <br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>

        <button type="submit">Update Product</button>
    </form>
<?= $this->endSection() ?>