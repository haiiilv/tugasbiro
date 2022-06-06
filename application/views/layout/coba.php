
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
      <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="id_produk">Id Produk</th>
                    <th scope="col" class="sort" data-sort="tujuan">Tujuan</th>
                    <th scope="col" class="sort" data-sort="jenispaket">Detail</th>
                     <th scope="col" class="sort" data-sort="harga">Edit</th>
                    <th scope="col" class="sort" data-sort="deskripsi">Hapus</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                   <?php foreach ($query->result_array() as $row) : ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <?= $row['id_produk']; ?></
                        <div class="media-body">
                          <span class="name mb-0 text-sm"></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                     <?= $row['tujuan']; ?>
                    </td>
                    <td>
                     <a href="<?= base_url(); ?>Biro/detail/<?= $row['id_produk']; ?>" class="btn btn-sm btn-default">Detail</a> 
                    </td>
                    
                    <td>
                      <a href="<?= base_url(); ?>Biro/edit/<?= $row['id_produk']; ?>" class="btn btn-sm btn-success">Edit</a>
                          
                    </td>
                    <td class="text-right">
                      <a href="<?= base_url(); ?>Biro/hapus/<?= $row['id_produk']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Lanjut?');">Hapus</a>
                    </td>
                  </tr>
                  
                <?php endforeach; ?>
                </tbody>
              </table>
              <a type="button" class="btn btn-lg btn-info" href="<?php echo base_url('Biro/inputform'); ?>">Input Paket Tour and Travel</a>
            </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url();?>/assets2/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets2/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>/assets2/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url();?>/assets2/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>/assets2s/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url();?>/assets2/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url();?>/assets2/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url();?>/assets2/js/argon.js?v=1.2.0"></script>
</body>

</html>