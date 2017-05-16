<?php $__env->startSection('content'); ?>
	
	<?php $no=1; ?>
	<table id="datatable" class="table table-striped table-bordered">
       <thead>          
        	<tr class="headings">
        	<th class="column-title">No </th>
        	<th class="column-title">Nama Buku</th>
        	<th class="column-title">Penerbit</th>
        	<th class="column-title">Jumlah</th>
        	<th class="column-title">Tanggal Masuk Gudang</th>
        	<th class="column-title no-link last"><span class="nobr">Action</span>
        	</th>
       </thead>
		<tbody>
			<?php $__currentLoopData = $stokbuku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stokbuku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
              	<td><a href="#"><a href="/liblary/<?php echo e($stokbuku->slug); ?>"><p> <?php echo e($stokbuku->buku->nama_buku); ?> </p></a></a></td>
				<td><?php echo e($stokbuku->penerbit->nama_penerbit); ?></td>
				<td><span class="label label-info label-mini" style="text-align: center;"> 
					<?php echo e($stokbuku->jumlah); ?>

				</span>
				</td>
				<td><?php echo e($stokbuku->tgl_masuk_gudang); ?></td>
				<td>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-eye' style="color: white"></i>
					</button>
					<button class="edit-modal btn btn-primary btn-xs">
					    <i class='fa fa-pencil' style="color: white"></i>
					</button>
					<button class="delete-modal btn btn-danger btn-xs" value="delete">
						<form action="/list-buku/<?php echo e($stokbuku->id); ?>" method="post">
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<span class="glyphicon glyphicon-trash"></span>
						</form>
					</button>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      	</tbody>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>