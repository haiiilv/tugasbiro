	        
          <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Log In</small>
              </div>
              <?php
  // Cetak jika ada notifikasi
  if($this->session->flashdata('sukses')) {
  echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  ?>

  <?php echo form_open('login');?>
  <p>Username:</p>
  <p><input type="text" name="username" value="<?php echo set_value('username'); ?>"/></p>
  <p> <?php echo form_error('username'); ?> </p>

  <p>Password:</p>
  <p><input type="password" name="password" value="<?php echo set_value('password'); ?>"/></p>
  <p> <?php echo form_error('password'); ?> </p>

  <p><input type="submit" name="btnSubmit" value="Login" /></p>

  <?php echo form_close();?>

            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="<?php echo base_url('register'); ?>" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
        
        