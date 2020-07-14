<?php
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";
$kodemk=$_GET['kodemk'];

$sql="select * from matkul where kodemk='$kodemk'";

$rs=mysqli_query($con,$sql);
$rec=mysqli_fetch_assoc($rs);

if($rec){ ?>
    
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Input Data Mata Kuliah</h4>
        <p class="card-description"> Membuat Data Baru Mata Kuliah </p>
       
        <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['msg']; session_unset('msg');?>
                </div>
        <?php endif ?>
        
        <form class="forms-sample" method="post" action="matkul/update.php">
            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode Mata Kuliah</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Kode Mata Kuliah" name="kodemk" value="<?php echo $rec['kodemk'];?>" readOnly >
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Mata Kuliah </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nama Mata Kuliah" name="namamk" value="<?php echo $rec['namamk'];?>" >
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sks </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Sks" name="sks" value="<?php echo $rec['sks'];?>" >
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hari </label>
                <div class="col-sm-9">
                    <select class="form-control" name="hari" value="<?php echo $rec['hari'];?>">
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
                    <input type="text" class="form-control" placeholder="Nama Dosen" name="namadosen" value="<?php echo $rec['namadosen'];?>" >
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
                    <input type="text" class="form-control" placeholder="Lantai Kelas" name="lantai" value="<?php echo $rec['lantai'];?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Ruangan </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Ruangan Kelas" name="ruangan" value="<?php echo $rec['ruangan'];?>">
                </div>
            </div>

            <button type="submit" class="btn btn-info mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>    
<?php
}else{
    $_SESSION['msg']="Tidak ada Kode : <b>$kodemk </b>";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarmatkul");
}?>