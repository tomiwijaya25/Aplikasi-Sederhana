<div class="card">
    <div class="card-body">
        <h4 class="card-title">Input Data Mata Kuliah</h4>
        <p class="card-description"> Membuat Data Baru Mata Kuliah </p>
        
        <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['msg']; unset($_SESSION['msg']);?>
                </div>
        <?php endif ?>
        
        <form class="forms-sample" method="post" action="matkul/save.php">
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode MK</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Mata Kuliah" name="kodemk">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama MK </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Mata Kuliah" name="namamk">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sks </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Sks" name="sks">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hari </label>
                <div class="col-sm-9">
                    <select class="form-control" name="hari">
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Dosen </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Dosen" name="namadosen">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Gedung </label>
                <div class="col-sm-9">
                    <select class="form-control" name="gedung">
                        <option>Gedung A</option>
                        <option>Gedung B</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Lantai </label>
                <div class="col-sm-9">
                    <select class="form-control" name="lantai">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Ruangan </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Ruangan" name="ruangan">
                </div>
            </div>
            

            <button type="submit" class="btn btn-info mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>