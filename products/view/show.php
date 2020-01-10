
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="btn btn-success" href="index.php?page=add">Thêm Mặt Hàng</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="keyword">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Ten Hang</th>
      <th scope="col">Loai hang</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($product as $start=>$value):?>
    <tr>
    <td scope="row"><?php echo ++$start ?></td>
    <td><?php echo $value->getName() ?></td>
    <td><?php echo $value->getSectors() ?></td>
    <td><a class="btn btn-success" href="index.php?page=edit&id=<?php echo $value->getId() ?>">Edit</a>
                <a href="index.php?page=delete&id=<?php echo $value->getId() ?>"
                    onclick="return confirm('Ban chac chan muon xoa khong')" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>