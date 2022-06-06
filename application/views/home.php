
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			
		</div><!--/.row-->
		
		<table class="table">
                        <thead>
                            <tr>
                               
                                <th scope="col">Id Paket</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Detail</th>
    
                                <th scope="col">Edit</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query->result_array() as $row) : ?>
                                <tr>
                                    <td><?= $row['id_produk']; ?></td>
                                    <td><?= $row['tujuan']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>Biro/detail/<?= $row['id_produk']; ?>" class="btn btn-sm btn-default">Detail</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>Biro/edit/<?= $row['id_produk']; ?>" class="btn btn-sm btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url(); ?>Biro/hapus/<?= $row['id_produk']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Lanjut?');">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
						
                    </table>
					<a type="button" class="btn btn-lg btn-info" href="<?php echo base_url('Biro/inputform'); ?>">Input Paket Tour and Travel</a>
				
				
				<!--<p  class="btn btn-success"><?php  //echo anchor('mahasiswa/inputform', 'Input New Food!'); ?></p>-->