<div class="card">
    <div class="card-body">
        <h4 class="card-title">Input Data Mahasiswa</h4>
        <p class="card-description"> Membuat Data Baru Mahasiswa </p>
        
        <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['msg']; unset($_SESSION['msg']);?>
                </div>
        <?php endif ?>
        
        <form class="forms-sample" method="post" action="mahasiswa/save.php">
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIM (Nomor Induk Mahasiswa) </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="N I M" name="nim">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Mahasiswa </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Fakultas </label>
                <div class="col-sm-9">
                    <select class="form-control" name="fakultas">
                        <option>Fakultas Teknik</option>
                        <option>Fakultas Ekonomi dan Bisnis</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Program Studi </label>
                <div class="col-sm-9">
                    <select class="form-control" name="prodi">
                        <option>Teknik Informatika</option>
                        <option>Teknik Industri</option>
                        <option>Teknik Lingkungan</option>
                        <option>Ekonomi</option>
                        <option>Akutansi</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="email" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Telp/HP </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Telp/HP" name="telp">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat </label>
                <div class="col-sm-9">
                    <Textarea class="form-control" placeholder="alamat" name="alamat"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Password </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="password" name="password">
                </div>
            </div>

            <button type="submit" class="btn btn-info mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>