<div class="row about-us">
  <div id="productCarousel" class="carousel slide product-carousel" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      include 'head.php';
      include 'koneksi.php';
      // $action = $_REQUEST['action'];
      $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'show-all';
      $search = isset($_REQUEST['search']) ? $_REQUEST['search'] : '';

      $query_str = 'SELECT * FROM tb_barang';
      
      if ($action == "show-all") {
        if (!empty($search)) {
          $query_str .= " WHERE nama_barang LIKE '%$search%'";
        }
      } else {
        if (!empty($search)) {
          $query_str .= " WHERE id_kategori = '$action' AND nama_barang LIKE '%$search%'";
        } else {
          $query_str .= " WHERE id_kategori = '$action'";
        }
      }
      $query_str .= ' ORDER BY id_barang DESC';

      $query = mysqli_query($koneksi, $query_str);
      $num_rows = mysqli_num_rows($query);

      if ($num_rows > 0) {
        $i = 0;
        while ($data = mysqli_fetch_array($query)) {
          if ($i % 4 == 0) {
            if ($i != 0) {
              // Close previous item div and row, and fill in the remaining spots
              while ($i % 4 != 0) {
                echo '<div class="col-md-3"></div>';
                $i++;
              }
              echo '</div></div>';
            }
            echo '<div class="carousel-item'.($i == 0 ? ' active' : '').'"><div class="row">';
          }
      ?>
          <div class="col-md-3">
            <div class="card">
              <!-- Formulir untuk mengirim id_product dengan metode POST -->
              <form action="detail_product.php" method="post" style="text-decoration: none;">
                <input type="hidden" name="id_product" value="<?php echo $data['id_barang']; ?>">

                <button type="submit" style="border: none; background: none; padding: 0;">
                  <img src="assets/produk/<?php echo $data['foto_barang']; ?>" 
                      class="card-img-top product-img" alt="<?php echo $data['nama_barang']; ?>">
                    
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: black;">
                        <?php echo $data['nama_barang']; ?><br>
                        <span style="color: #A01E2A;">
                            Rp<?php echo isset($data['harga_barang']) ? number_format($data['harga_barang'], 0, ',', '.') : ''; ?>
                        </span>
                    </h5>
                </div>

                </button>
              </form>
              
              <!-- Formulir untuk tombol Pesan -->
              <form action="detail_product.php" method="post">
                <input type="hidden" name="id_product" value="<?php echo $data['id_barang']; ?>">
                <button type="submit" class="btn btn-primary btn-block" 
                        style="background-color: #048654; border-color: #048654;" 
                        onmouseover="this.style.backgroundColor='#036b43'; this.style.borderColor='#036b43';" 
                        onmouseout="this.style.backgroundColor='#048654'; this.style.borderColor='#048654';">
                  Pesan
                </button>
              </form>
            </div>
          </div>
      <?php
          $i++;
        }
        // Close the last item div and row, and fill in the remaining spots
        while ($i % 4 != 0) {
            echo '<div class="col-md-3"></div>';
            $i++;
        }
        echo '</div></div>';
      } else {
        echo '<div class="col-12"><p class="text-center">Tidak ada produk yang ditemukan</p></div>';
      }
      ?>
    </div>
    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5); 
      padding: 15px;  "></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5); 
      padding: 15px;" ></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
