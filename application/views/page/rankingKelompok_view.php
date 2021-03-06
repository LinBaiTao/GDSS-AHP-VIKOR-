<div class="row">
	<ol class="breadcrumb">
		<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<!--li class="active">Icons</li-->
	</ol>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Hasil Perankingan Kelompok</h1>
	</div>
</div><!--/.row-->

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Daftar Hasil Perankingan Kelompok</div>
			<div class="panel-body">

				<?php if ($this->session->flashdata('error')) { ?>
				<div role="alert" class="alert bg-danger">
					<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> <?php echo $this->session->flashdata('error'); ?><span class="glyphicon glyphicon-remove"></span></a>
				</div>
				<?php } ?>

				<?php if ($this->session->flashdata('success')) { ?>
				<div role="alert" class="alert bg-success">
					<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg> <?php echo $this->session->flashdata('success'); ?><span class="glyphicon glyphicon-remove"></span></a>
				</div>
				<?php } ?>

				<?php if ($rank->num_rows() > 0) { ?>
				<table class="display" id="table-style" cellspacing="0" width="100%" border="1">
				    <thead>
					    <tr>
					    	<th>Ranking</th>
					        <th>Alternatif</th>
					        <th>Point</th>
					    </tr>
				    </thead>
				    
				    <tbody>
				    	<?php foreach ($rank->result() as $value) { ?>
				    		<tr>
				    			<td><?php echo $value->rkUrutan; ?></td>
				    			<td><?php echo $value->altKaryawanKode ?></td>
				    			<td><?php echo $value->rkPoint; ?></td>
				    		</tr>
				    	<?php } ?>				    		
				    </tbody>
				</table>
			</div>
			
				
			<?php }else{ ?>
				<?php if ($role == '0') { ?>
				<a class="btn btn-danger" href="<?php echo site_url('hasil/hitungRankingKelompok/') ?>">Hitung Hasil Perankingan Kelompok</a>					
				<?php }else{ ?>
				<div role="alert" class="alert bg-warning">
					<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"/></svg> Hasil Belum Di Proses Oleh Admin <a class="pull-right" href="#"><span class="glyphicon glyphicon-remove"></span></a>
				</div>
				<?php } ?>
				
			<?php } ?>
						
		</div>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>