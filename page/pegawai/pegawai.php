 <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Data Pegawai</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Data Pegawai</li>
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
                                    <h3><i class="fas fa-table"></i>Data Pegawai</h3>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id Pegawai</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>No.Telepon</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Level</th>
                                                    <th>Status</th>
                                                    <th>Id Session</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                 $no=1;
                                                    $sql=mysqli_query($koneksi,"select * from pegawai");
                                                    while ($r=mysqli_fetch_assoc($sql)) {
                                                    ?>
                                                <tr>
                                                    <td><?= $no;?></td>
                                                    <td><?= $r['id_pegawai'];?></td>
                                                    <td><?= $r['nama'];?></td>
                                                    <td><?= $r['alamat'];?></td>
                                                    <td><?= $r['no_telp'];?></td>
                                                    <td><?= $r['username'];?></td>
                                                    <td><?= $r['password'];?></td>
                                                    <td><?= $r['level'];?></td>
                                                    <td><?= $r['status'];?></td>
                                                    <td><?= $r['id_session'];?></td>
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