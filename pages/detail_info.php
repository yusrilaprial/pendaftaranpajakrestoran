<?php 
$sql = $conn->query("SELECT * FROM informasi WHERE id_info = $_GET[id]");
$data = $sql->fetch_array();
?>

<div class="card mb-4 box-shadow">
<div class="card-body">
<img class="card-img-top" src="administrator/modules/informasi/uploads/<?php echo $data['info']; ?>" style="width: fit-content;
float: left;  padding-right: 20px; max-width: 100%;">
<p class="card-text"><?php echo $data['deskripsi']; ?></p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="./" class="btn btn-sm btn-outline-secondary">Back</a>
            </div>
        </div>
</div>
</div>