<!-- Main content -->
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Edit Product</h3>
                      <div class='box box-primary'>
        <form action="<?= base_url() ?>books/update" method="post" enctype="multipart/form-data">
        <table class='table table-bordered'>
        <input type="hidden" name="id" value="<?= $data->id ?>">
	    <tr>
        <td>Name</td>
        <td>
            <input type="text" class="form-control" name="name" value="<?= $data->name ?>">
        </td>
        <tr>
        <td>Category</td>
        <td>
            <select name="category_id" class="form-control">
            <?php $category_name = $this->db->query("SELECT * FROM categories WHERE id = '$data->category_id'")->row()->name; ?>
            <option value="<?php echo $data->id; ?>"><?php echo $category_name; ?></option>

            <?php foreach ($cmb->result() as $row): ?>                                
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
            <?php endforeach; ?>

            </select>
        </td>
        <tr>
        <td>stok</td>
        <td>
            <input type="text" class="form-control" name="stok" value="<?= $data->stok ?>">
        </td>
        <tr>
        <td>Image</td>
        <td>
            <input type="file" class="form-control" name="img" value="<?= $data->image ?>">
        </td>
        <tr>
        <td>Deskripsi</td>
        <td>
            <textarea class="form-control" name="deskripsi"> <?= $data->deskripsi ?> </textarea>
        </td>
	    <tr>
        <td colspan='2'><button type="submit" class="btn btn-primary">Save</button> 
	      <a href="<?php echo site_url('books') ?>" class="btn btn-default">Cancel</a>
        </td>
      </tr>
	
    </table>
    </form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->