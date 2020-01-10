<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Ten Hang</th>
      <th scope="col">Loai hang</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($search as $start=>$value):?>
    <tr>
    <td scope="row"><?php echo ++$start ?></td>
    <td><?php echo $value->getName() ?></td>
    <td><?php echo $value->getSectors() ?></td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>