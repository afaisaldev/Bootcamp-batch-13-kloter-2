<!-- Main content -->
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Create Product</h3>
                      <div class='box box-primary'>
        <form action="<?= base_url() ?>books/insert" method="post" enctype="multipart/form-data">
        <table class='table table-bordered'>
	    <tr>
        <td>Name</td>
        <td>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </td>
        <tr>
        <td>Category</td>
        <td>
            <select name="category_id" class="form-control">

            <?php foreach ($data->result() as $row): ?>                                
            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
            <?php endforeach; ?>

            </select>
        </td>
        <tr>
        <td>stok</td>
        <td>
            <input type="text" class="form-control" name="stok" placeholder="Stok">
        </td>
        <tr>
        <td>Image</td>
        <td>
            <input type="file" class="form-control" name="img">
        </td>
        <tr>
        <td>Deskripsi</td>
        <td>
            <textarea class="form-control" name="deskripsi"> </textarea>
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