<!-- Main content -->
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Product Detail</h3>
        <table class="table table-bordered">
	    <tr><td>Name</td><td><?php echo $data->name; ?></td></tr>
        <tr><td>Category</td><td>
        <?php $category_name = $this->db->query("SELECT * FROM categories WHERE id = '$data->category_id'")->row()->name; ?>
        <?= $category_name  ?>
        </td></tr>
        <tr><td>Stok</td><td><?php echo $data->stok; ?></td></tr>
        <tr><td>Image</td><td><img src="<?= base_url() ?>uploads/<?php echo $data->image ?>" style="width:100px; height:100px"></td></tr>
        <tr><td>Deskripsi</td><td><?php echo $data->deskripsi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('books') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->