<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
				<li class="active">Input Paket Tour Baru</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Input Paket Tour Baru</h1>
			</div>
		</div><!--/.row-->
		
		
		<table class="table">
                     
		<a type="button" class="btn btn-md btn-warning" href="<?php echo base_url('/Biro/'); ?>">Kembali</br></a>
						
        </table>
		

		
	
    <?php echo validation_errors(); ?>

    <!-- echo form_open('form'); ?> -->
    <!-- ke controller form, methodnya index -->
    <?php echo form_open('biro/inputForm'); ?>

	
	<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form">
								<div class="form-group">
									<div class="form-group">
									<?php echo form_label('Id Produk', 'id_produk');?>
									<?php
										$data = array(
											'placeholder'	=> 'Masukkan ID Produk',
											'class'     	=> 'form-control',
										);
										echo form_input('id_produk', set_value('id_produk'),$data);
									?>
								</div>
								<div class="form-group">
									<?php echo form_label('Tujuan', 'tujuan');?>
									<?php
										$data = array(
											'placeholder'	=> 'Masukkan ID Tujuan',
											'class'     	=> 'form-control',
										);
										echo form_input('tujuan', set_value('tujuan'),$data);
									?>
								</div>
					
									<div class="form-group">
										<?php echo form_label('Jenis Paket', 'jenispaket');?>
										<?php
											$data = array(
												'class'     	=> 'form-control',
											);
											foreach ($query->result_array() as $row)
												{
													$options[$row['id_paket']]=$row['jenispaket'];
												}
											echo form_dropdown('jenispaket', $options, set_value('jenispaket'), $data);
										?>
									</div>
									<div class="form-group">
									<?php echo form_label('Harga', 'harga');?>
									<?php
										$data = array(
												'class'     	=> 'form-control',
												'rows'			=>	'3',
											);
										echo form_input('harga', set_value('harga'), $data);
									?>
								</div>
								<div class="form-group">
									<?php echo form_label('Deskripsi', 'deskripsi');?>
									<?php
										$data = array(
												'class'     	=> 'form-control',
												'rows'			=>	'3',
											);
										echo form_textarea('deskripsi', set_value('deskripsi'), $data);
									?>
								</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-default">Reset Data</button>
								</div>
							</form>
						</div>
					</div>
				
			