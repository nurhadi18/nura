 <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Data User</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Data User</li>
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
                                    <h3><i class="fas fa-table"></i>Data User</h3>
                                    <a href="#custom-modal" class="btn btn-primary mb-2" data-target="#tambah" data-toggle="modal"><i class="fas fa-plus-circle"></i> Tambah Data</a>

                                    <!-- Modal -->                                    
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Level</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                 $no=1;
                                                    $sql=mysqli_query($koneksi,"select * from user");
                                                    while ($r=mysqli_fetch_assoc($sql)) {
                                                    ?>
                                                <tr>
                                                    <td><?= $no;?></td>
                                                    <td><?= $r['nama'];?></td>
                                                    <td><?= $r['email'];?></td>
                                                    <td><?= $r['password'];?></td>
                                                    <td><?= $r['level'];?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-success mb-2" data-target="#edit<?php echo $r['id_user'];?>" data-toggle="modal"><i class="fas fa-cog"></i></a>
                                                        <a href="#" class="btn btn-danger mb-2" data-target="#hapus<?php echo $r['id_user'];?>" data-toggle="modal"><i class="fas fa-trash"></i></a>

                                                        <!--form hapus data-->
                                                        <div class="modal fade custom-modal" id="hapus<?= $r['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: red;color: white ">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Hapus User</h5>
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
                                                    <a href="page/user/fungsi.php?act=user&id=<?=$r['id_user'];?>" type="submit" class="btn btn-primary">Oke</a>
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
         <div class="modal fade custom-modal" id="edit<?= $r['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Edit User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                        
                                <div class="card-body">

                                    <form action="page/user/fungsi.php?act=edit" enctype="multipart/form_data" method="POST">
                                        <?php
                                        $id_user = $r['id_user'];
                                        $query = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id_user'"));
                                        ?>
                                        <div class="form-group">
                                            <label for="userName">Nama<span class="text-danger">*</span></label>
                                            <input type="text" name="nama" data-parsley-trigger="change" required class="form-control" value="<?= $r['nama'];?>">
                                            <input type="hidden" name="id_user" data-parsley-trigger="change" required class="form-control" value="<?= $r['id_user'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email<span class="text-danger">*</span></label>
                                            <input type="text" name="email" data-parsley-trigger="change" required class="form-control" id="emailAddress" value="<?= $r['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email<span class="text-danger">*</span></label>
                                            <input type="text" name="email" data-parsley-trigger="change" required class="form-control" id="emailAddress" value="<?= $r['email'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Status<span class="text-danger">*</span></label><select class="form-control select2" id="example1" name="level">
                                        <?php if ($r[level] == 'Y'){?>
                                            <option value=1 selected >1</option>
                                            <option value=2 >2</option>
                                            <option value=3 >3</option>
                                        <?php }else{?>
                                            <option value=1  >1</option>
                                            <option value=2 selected >2</option>
                                            <option value=3 >3</option>    
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

                        </div>s

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
                                                    <h5 class="modal-title" id="exampleModalLabel2">Tambah User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                        
                                <div class="card-body">

                                    <form action="page/user/fungsi.php?act=tambah" enctype="multipart/form_data" method="POST">
                                        <div class="form-group">
                                            <label for="userName">Nama<span class="text-danger">*</span></label>
                                            <input type="text" name="nama" data-parsley-trigger="change" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email<span class="text-danger">*</span></label>
                                            <input type="text" name="email" data-parsley-trigger="change" required class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Password<span class="text-danger">*</span></label>
                                            <input type="password" name="password" data-parsley-trigger="change" required class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Level<span class="text-danger">*</span></label><select class="form-control select2" id="example1" name="level">
                                        <option value=''>--Pilih Level--</option>        
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>                                        
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