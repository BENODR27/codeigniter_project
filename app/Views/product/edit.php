<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<form action="<?= base_url('products/update') ?>" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $product['name'] ?>" required>
        <br>

        <label for="price">Price:</label>
        <input type="number" name="price" value="<?= $product['price'] ?>" required>
        <br>

        <label for="description">Description:</label>
        <textarea name="description" required><?= $product['description'] ?></textarea>
        <br>

        <button type="submit">Update Product</button>
    </form>
<?= $this->endSection() ?>