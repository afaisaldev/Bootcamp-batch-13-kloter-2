<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DISPLAY BOOKS  
		</h3>
                </div><!-- /.box-header -->
                <div class='box-body'>

                <?php foreach ($data->result() as $row): ?>
                <div class="row">                
                
                <center><h3> Category : <?= $row->name ?> </h3></center><br>

                  <?php
                  $sqls     = "SELECT * FROM books where category_id = '$row->id'";        
                  $databook = $this->db->query($sqls);                
                  ?>

                  <?php foreach ($databook->result() as $book): ?>

                  <?php
                  if($book->stok == 0){
                    $link = 'none';
                  }else{
                    $link = '';
                  }
                  ?>

                  <div class="col-md-4">
                  <center>
                  <img class="img-responsive" src="<?= base_url() ?>uploads/<?php echo $book->image ?>" style="width:200px; height: 150px">
                  </center>
                  <center>
                    <p><?= $book->name ?></p>
                    <p>Stok : <?= $book->stok ?></p>
                  </center>
                  <center><a href="<?= base_url() ?>display/pinjam/<?= $book->id ?>" class="btn btn-primary" style="display: <?= $link ?>">Pinjam</a> 
                  <a href="<?= base_url() ?>display/kembalikan/<?= $book->id ?>" class="btn btn-success">Kembalikan</a></center>
                  </div>

                  <?php endforeach; ?>               

                </div>
                <br>
                <?php endforeach; ?>
                
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->