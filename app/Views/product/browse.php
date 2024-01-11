<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<a class="btn btn-primary" href="add">Add</a>
   <table class="table">
    
  <thead>
    <tr>
      <th >id</th>
      <th >name</th>
      <th >price</th>
      <th >Actions</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($products as $product): ?>
<tr>
      <th ><?= $product['id'] ?></th>
      <td><?= $product['name'] ?></td>
      <td><?= $product['price'] ?></td>
      <td >
        
          <a class="btn btn-primary" href="edit/<?= $product['id'] ?>">Edit</a>
      <a class="btn btn-primary " href="delete/<?= $product['id'] ?>">Delete</a> 
    </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
  
<?= $this->endSection() ?>