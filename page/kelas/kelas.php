 <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Data Kelas</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Data Kelas</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-table"></i>Data Kelas</h3>
                                    <a href="#custom-modal" class="btn btn-primary mb-2" data-target="#tambah" data-toggle="modal"><i class="fas fa-plus-circle"></i> Tambah Data</a>

                                    <!-- Modal -->                                    
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Kelas</th>
                                                    <th>Nama Kelas</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                 $no=1;
                                                    $sql=mysqli_query($koneksi,"select * from kelas");
                                                    while ($r=mysqli_fetch_assoc($sql)) {
                                                    ?>
                                                <tr>
                                                    <td><?= $no;?></td>
                                                    <td><?= $r['id_kelas'];?></td>
                                                    <td><?= $r['nama_kelas'];?></td>
                                                    <td><?= $r['status'];?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-success mb-2" data-target="#edit<?php echo $r['id_kelas'];?>" data-toggle="modal"><i class="fas fa-cog"></i></a>
                                                        <a href="#" class="btn btn-danger mb-2" data-target="#hapus<?php echo $r['id_kelas'];?>" data-toggle="modal"><i class="fas fa-trash"></i></a>

                                                        <!--form hapus data-->
                                                        <div class="modal fade custom-modal" id="hapus<?= $r['id_kelas']; ?>" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: red;color: white ">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Hapus Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                        
                                <div class="card-body">

                            <h3> Apakah Anda Ingin Menghapus Data Ini ? </h3>
                                  </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="page/kelas/fungsi.php?act=hapus&id=<?=$r['id_kelas'];?>" type="submit" class="btn btn-primary">Oke</a>
                                                </div>

                                </div>
                            </div><!-- end card-->
                        </div>
                                               
                                            </div>
                                        </div>
                                    </div>                                
                                    
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->

                            </div>
                            <!-- end card-->

                        </div>

                    </div>
                    <!-- end row-->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>

                         <!-- form edit data -->
         <div class="modal fade custom-modal" id="edit<?= $r['id_kelas']; ?>" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Edit Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                        
                                <div class="card-body">

                                    <form action="page/kelas/fungsi.php?act=edit" enctype="multipart/form_data" method="POST">
                                        <?php
                                        $id_kelas = $r['id_kelas'];
                                        $query = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas='$id_kelas'"));
                                        ?>
                                        <div class="form-group">
                                            <label for="userName">Id Kelas<span class="text-danger">*</span></label>
                                            <input type="text" name="id_kelas" data-parsley-trigger="change" required class="form-control" value="<?= $r['id_kelas'];?>" readonly>
                                            <input type="hidden" name="id" data-parsley-trigger="change" required class="form-control" value="<?php echo $newID;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Nama Kelas<span class="text-danger">*</span></label>
                                            <input type="text" name="nama_kelas" data-parsley-trigger="change" required class="form-control" id="emailAddress" value="<?= $r['nama_kelas'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Status<span class="text-danger">*</span></label><select class="form-control select2" id="example1" name="status">
                                        <?php if ($r[status] == 'Y'){?>
                                            <option value=Y selected >Aktif</option>
                                            <option value=N >Non Aktif</option>
                                        <?php }else{?>
                                            <option value=Y  >Aktif</option>
                                            <option value=N selected >Non Aktif</option>    
                                        <?php }?>                                        
                                    </select>
                                        </div>
                                     </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                    </form>

                                </div>
                            </div><!-- end card-->
                        </div>
                                               
                                            </div>
                                        </div>
                                    </div>                                
                                                    </td>
                                                </tr>
                                            <?php $no++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->

                            </div>
                            <!-- end card-->

                        </div>

                    </div>
                    <!-- end row-->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>

<!-- form tambah data -->
         <div class="modal fade custom-modal" id="tambah" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Tambah Kelas</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                        
                                <div class="card-body">

                                    <form action="page/kelas/fungsi.php?act=tambah" enctype="multipart/form_data" method="POST">
                                        <?php
                                        $query = "SELECT max(id_kelas) as maxID FROM kelas";
                                        $hasil = mysqli_query($koneksi,$query);
                                        $data = @mysqli_fetch_array($hasil);
                                        $idMax = $data['maxID'];

                                        $noUrut =(int) substr($idMax, 1, 9);
                                        $noUrut++;
                                        $char = "K";
                                        $newID = $char.sprintf("%04s",$noUrut);
                                        ?>
                                        <div class="form-group">
                                            <label for="userName">Id Kelas<span class="text-danger">*</span></label>
                                            <input type="text" name="id_kelas" data-parsley-trigger="change" required class="form-control" value="<?php echo $newID;?>" readonly>
                                            <input type="hidden" name="id" data-parsley-trigger="change" required class="form-control" value="<?php echo $newID;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Nama Kelas<span class="text-danger">*</span></label>
                                            <input type="text" name="nama_kelas" data-parsley-trigger="change" required class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Status<span class="text-danger">*</span></label><select class="form-control select2" id="example1" name="status">
                                        <option value="">--Pilih Status--</option>        
                                        <option value="Y">Aktif</option>
                                        <option value="N">Non Aktif</option>                                        
                                    </select>
                                        </div>
                                     </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                    </form>

                                </div>
                            </div><!-- end card-->
                        </div>
                                               
                                            </div>
                                        </div>
                                    </div> 