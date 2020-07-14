<?php
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";

$sql="select * from matkul ";

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
              <h4 class="card-title">Data Mata Kuliah</h4>
                    <p class="card-description"> Data seluruh  <code>Mata Kuliah</code> 
                    <a href="<?php echo BASE_URL. 'index.php?menu=create&module=matkul'; ?>" class="btn btn-success btn-sm">  <i class="icon-plus"> Tambah Mata Kuliah </i> </a></p> 
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th> No</th>
                          <th> Kode MK </th>
                          <th> Nama MK </th>
                          <th> Sks </th>
                          <th> Hari</th>
                          <th> Nama Dosen </th>
                          <th> Gedung </th>
                          <th> Lantai </th>
                          <th> Ruangan </th>
                          <th> Aksi </th>

                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <?php
                          $no = 1;
                         while($rec=mysqli_fetch_assoc($rs)):?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $rec['kodemk']; ?></td>
                          <td><?php echo $rec['namamk']; ?></td>
                          <td><?php echo $rec['sks']; ?></td>
                          <td><?php echo $rec['hari']; ?></td>
                          <td><?php echo $rec['namadosen']; ?></td>
                          <td><?php echo $rec['gedung']; ?></td>
                          <td><?php echo $rec['lantai']; ?></td>
                          <td><?php echo $rec['ruangan']; ?></td>
                          <td>
                          <a href="<?php echo BASE_URL; ?>index.php?menu=edit&module=matkul&kodemk=<?php echo $rec['kodemk'];?>" class="btn btn-success btn-sm" ><i class="icon-pencil"></i></a> 
                          <a href="<?php echo BASE_URL; ?>matkul/delete.php?kodemk=<?php echo $rec['kodemk'];?>" 
                             onclick="return confirm('Yakin mau menghapus Kode Mata Kuliah : <?php echo $rec['kodemk'] ?>')" 
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