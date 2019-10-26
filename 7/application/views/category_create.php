<!-- Main content -->
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Create Category</h3>
                      <div class='box box-primary'>
        <form action="<?= base_url() ?>category/insert" method="post">
        <table class='table table-bordered'>
	    <tr>
        <td>Name</td>
        <td>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </td>
	    <tr>
        <td colspan='2'><button type="submit" class="btn btn-primary">Save</button> 
	      <a href="<?php echo site_url('category') ?>" class="btn btn-default">Cancel</a>
        </td>
      </tr>
	
    </table>
    </form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->