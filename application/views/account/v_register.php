       <?php echo form_open('register');?>
                <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Sign In</small>
              </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>"/>
                   <?php echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/>
                  <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"/>
                   <?php echo form_error('email'); ?>
                </div>
                <div class="form-group">
                  <label>Password </label>
                  <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"/>
                  <?php echo form_error('password'); ?>
                </div>
                <!--<input type="hidden" name="level" value="2"/> -->
                <?php //echo form_error('level'); ?>
                <div class="form-group">
                  <label>Password Confirm</label>
                  <input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
                  <?php echo form_error('password_conf'); ?>
                </div>
                  <button type="submit" class="btn btn-primary" name="btnSubmit" value="Daftar">Submit Button</button>
                  <button type="reset" class="btn btn-default">Reset Button</button>
                </div>
              <?php echo form_close();?>
              <p>Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'/beranda','di sini..'); ?></p>
            </div>
          </div>
         
          </div>
        </div>
      </div>
    </div>
  </div>  
 