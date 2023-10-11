<?php include 'header.php'; ?>

<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar" data-bs-smooth-scroll="true" tabindex="0">
  <!-- Header -->
  <?php include 'sidebar.php'; ?>
  

  <div class="container"><br><br>
        <center><h2>EForm Pembukaan Tabungan</h2></center>
        <center><p>Selangkah lagi anda akan segera dapat menikmati fasilitas tabungan kami, cukup mengisi data berikut :</p></center>
        <div class="card">
            <div class="card-body" id="resultsContent">
                <fieldset>
                    <form action="process_form.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <b><label for="nik" class="form-label">No. NIK</label></b>
                            <input type="text" class="form-control" id="nik" name="nik" style="width: 50%;" required>
                        </div>
                        <div class="mb-3">
                            <b><label for="nama" class="form-label">Nama</label></b>
                            <input type="text" class="form-control" id="nama" name="nama" style="width: 50%" required>
                        </div>
                        <div class="mb-3">
                            <b><label for="tgl_lahir" class="form-label">Tanggal Lahir</label></b>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" style="width: 50%" required>
                        </div>
                        <div class="mb-3">
                            <b><label for="alamat" class="form-label">Alamat</label></b>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" cols="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <b><label for="no_telp" class="form-label">No. Telp</label></b>
                            <input type="tel" class="form-control" id="no_telp" name="no_telp" style="width: 50%" required>
                        </div>
                        <div class="mb-3">
                            <b><label for="jenis_tabungan" class="form-label">Jenis Tabungan</label></b>
                            <select class="form-select" id="jenis_tabungan" name="jenis_tabungan" required style="width:50%;">
                                <option value="KARIMAH">KARIMAH</option>
                                <option value="OPTIMA">OPTIMA</option>
                                <option value="RENCANA">RENCANA</option>
                                <option value="CERDAS">CERDAS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <b><label for="foto_ktp" class="form-label">Foto KTP</label></b>
                            <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" accept="image/*" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>

  <section id="scrollspyContact" class="py-5 py-xl-8 bsb-section-py-xxl-1">
    <?php include 'footer.php'; ?>
    </section>

  <!-- Javascript Files: Vendors -->
  <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Javascript Files: Controllers -->
  <script src="./assets/controller/project-2.js"></script>
  <script src="./assets/controller/wave-bsb.js"></script>

  <!-- BSB Body End -->
</body>
</html>
