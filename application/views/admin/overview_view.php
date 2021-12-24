<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">beranda</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $this->db->count_all_results('siswa');  ?><h2>
                                                <span>siswa terdaftar</span>
                                                <!-- <h2>10368</h2>
                                                <span>members online</span> -->
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-local-store"></i><br>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $this->db->count_all_results('kelas');  ?><h2>
                                                <span>kelas terdaftar</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $this->db->count_all_results('pembayaran');  ?><h2>
                                                <span>transaksi</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php foreach ($jumlah_bayar as $total): ?>
                                                    <?php echo rupiah($total->jumlah_bayar) ?></h2>
                                                    <span>total SPP masuk</span>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Transaksi Pembayaran</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Bulan Dibayar</th>
                                        <th>Tahun Dibayar</th>
                                        <th>Jumlah Bayar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pembayaran as $pembayaran): ?>
                                    <tr>
                                        <td>
                                            <?php echo $pembayaran->nisn ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->tgl_bayar ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->bulan_dibayar ?>
                                        </td>
                                        <td>
                                            <?php echo $pembayaran->tahun_dibayar ?>
                                        </td>
                                        <td>
                                            <?php echo rupiah($pembayaran->jumlah_bayar) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view("admin/_partials/footer.php") ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
	<?php $this->load->view("admin/_partials/js.php") ?>
	<!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
	 --><?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
<!-- end document-->
