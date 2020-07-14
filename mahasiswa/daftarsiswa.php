<?php
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";

$sql="select * from mahasiswa ";

$rs=mysqli_query($con,$sql);

?>
<div class="row">
   
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
              <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $_SESSION['msg'];unset($_SESSION['msg']);?>
                </div>
              <?php endif ?>
              <h4 class="card-title">Data Mahasiswa</h4>
                    <p class="card-description"> Data seluruh  <code>Mahasiswa</code> 
                    <a href="<?php echo BASE_URL. 'index.php?menu=create&module=mahasiswa'; ?>" class="btn btn-info btn-sm">  <i class="icon-plus">   Tambah Mahasiswa </i> </a></p> 
                    <table class="table table-striped table-bordered table-responsive">
                      <thead class="text-center">
                        <tr>
                          <th> No</th>
                          <th> NIM </th>
                          <th> Nama Mahasiswa </th>
                          <th> Fakultas </th>
                          <th> Prodi</th>
                          <th> Email </th>
                          <th> Telp. </th>
                          <th> Alamat </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <?php 
                        $no = 1;
                        while($rec=mysqli_fetch_assoc($rs)):?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $rec['nim']; ?></td>
                          <td><?php echo $rec['nama']; ?></td>
                          <td><?php echo $rec['fakultas']; ?></td>
                          <td><?php echo $rec['prodi']; ?></td>
                          <td><?php echo $rec['email']; ?></td>
                          <td><?php echo $rec['telp']; ?></td>
                          <td><?php echo $rec['alamat']; ?></td>
                          <td>
                          <a href="<?php echo BASE_URL; ?>index.php?menu=edit&module=mahasiswa&nim=<?php echo $rec['nim'];?>" class="btn btn-success btn-sm" ><i class="icon-pencil"></i></a> 
                          <a href="<?php echo BASE_URL; ?>mahasiswa/delete.php?menu=delete&module=mahasiswa&nim=<?php echo $rec['nim'];?>" 
                             onclick="return confirm('Yakin mau menghapus nim tsb : <?php echo $rec['nim'] ?>')" 
                             class="btn btn-danger btn-sm" >
                            <i class="icon-trash"></i>
                          </a>
                          </td>
                        </tr>
                        <?php endwhile; ?> 
                       </tbody>
                    </table>
            </div>        
        </div>
    </div>
</div>