<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mater layout</title>
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

</head>
<body>
<section>
<div class="container">
    <?php include(APPPATH.'Views/includes/header.php')?>
    <div class="card p-3">
    <?= $this->renderSection('content') ?>
    </div>
    <?php include(APPPATH.'Views/includes/footer.php')?>
</div>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</section>



</body>
</html>