<?php
include_once 'header.php';
$productManager = new ProductManager();


$page = isset($_GET['page']) ? $_GET['page'] : null;
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : null;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-light">
            <?php
            switch ($page) {
                case "add":
                    $productManager->add();
                    break;
                case "edit":
                    $productManager->edit();
                    break;
                case "delete":
                    $productManager->delete();
                    break;
                default:
                    $productManager->index();
            }
            switch ($keyword) {
            case "search":
                $productManager->seacrh();
                break;
            }
            ?>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>