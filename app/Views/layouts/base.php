<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base layout</title>
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

</head>
<body>
<?php include(APPPATH.'Views/includes/header.php')?>
    <div class="card p-3">
    <?= $this->renderSection('content') ?>
    </div>
    <?php include(APPPATH.'Views/includes/footer.php')?>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>