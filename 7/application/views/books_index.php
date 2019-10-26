<!-- Main content -->
<section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>BOOKS  <?php echo anchor('books/create','Create',array('class'=>'btn btn-primary btn-sm'));?>
		</h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
            <th>Image</th>
		        <th>Name</th>
            <th>Category</th>
            <th>stok</th>
            <th>deskripsi</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            ?>
            <?php foreach ($data->result() as $row): ?>
              
            <tr>
		    <td><?php echo ++$start ?></td>
		    <td><img src="<?= base_url() ?>uploads/<?php echo $row->image ?>" style="width:100px; height:100px"></td>
        <td><?php echo $row->name ?></td>
            <td>
            <?php $category_name = $this->db->query("SELECT * FROM categories WHERE id = '$row->category_id'")->row()->name; ?>
            <?= $category_name  ?>
            </td>
            <td><?php echo $row->stok ?></td>
            <td><?php echo $row->deskripsi ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('books/read/'.$row->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('books/edit/'.$row->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('books/delete/'.$row->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->