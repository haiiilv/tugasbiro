
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
				<li class="active">Detail</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Paket</h1>
			</div>
		</div><!--/.row-->
		<!--
		<table class="table">
		<thead>
                        <?php
			//$this->table->set_heading('ID', 'Nama', 'Harga', 'Jenis Menu', 'Jenis Makanan', 'Keterangan');?>
			<thead>
			<?php
			/*
			   foreach ($query as $row)
				{
						/*
						echo $row['username']."-";
						echo $row['nama']."-";
						echo $row['email']."-";
						echo $row['namakota']."</br>";
						*/
						/*
					$this->table->add_row($row['ID'], $row['nama'], $row['harga'],$row['jenis_menu'], $row['jenis_makanan'], $row['keterangan']);
				}
			$template = array(
				'table_open' => '<table border="" scope="col" cellpadding="" cellspacing="" class="table">'
			);
			$this->table->set_template($template);
			echo $this->table->generate();
			*/
			
		?>
		<p><?php //echo anchor('mahasiswa/', 'Kembali!'); ?></p>
						
        </table> -->
												
			
		
		
	
		
		<table class="table">
                     
		<a type="button" class="btn btn-md btn-warning" href="<?php echo base_url('/biro/'); ?>">Kembali</br></a>
						
        </table>
		
		<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id Produk/th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Jenis Paket</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi</th>
								
                            </tr>
                        </thead>
                        <tbody>
							<?php foreach ($query as $row)
				{ ?>
                                <tr>
                                    <td><?= $row['id_produk']; ?></td>
                                    <td><?= $row['tujuan']; ?></td>
                                    <td><?= $row['jenispaket']; ?></td>    
                                    <td><?= $row['harga']; ?></td>
                                    <td><?= $row['deskripsi']; ?></td>
									
                                </tr>
                            
<?php } ?>
                        </tbody>
						
                    </table>
												
			
				