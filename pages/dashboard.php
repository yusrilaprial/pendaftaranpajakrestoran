<div class="row">
    <?php
    $sql = $conn->query("SELECT * FROM informasi");
    while ($data = $sql->fetch_array()) {
    ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="administrator/modules/informasi/uploads/<?php echo $data['info']; ?>" style="height: 300px;">
                <div class="card-body">
                    <p class="card-text"><?php echo substr($data['deskripsi'], 0, 50); ?> [...]</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="./?m=./pages&p=detail_info&id=<?php echo $data['id_info']; ?>" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>

</div>