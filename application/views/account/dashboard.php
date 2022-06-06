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
			</ol>
		</div><!--/.row-->
		
  <p>
  Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
  Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
  Untuk ke list Paket, silakan klik dibawah ini.. :)
  </p>
  <table class="table">
                     
		<a type="button" class="btn btn-md btn-warning" href="<?php echo base_url('/biro/'); ?>">Paket</br></a>
						
        </table>
	
    <?php echo validation_errors(); ?>

    <!-- echo form_open('form'); ?> -->
    <!-- ke controller form, methodnya index -->
    <?php echo form_open('biro/inputForm'); ?>
						
 
  
   
							</form>
						</div>
					</div>
				
			