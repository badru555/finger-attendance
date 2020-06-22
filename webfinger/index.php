<!DOCTYPE html>
<html>
<head>
	<title>FingerDust</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
        include ('connection.php');
    ?>
	<div id="container">
    	<div id="header">
        	<div id="logo">
            	<img src="images/logo.png">
            </div>
            <div id="info">
            	<img src="images/user.png">
                Selamat Datang <br>Badrus!<br>Enjoy your day! :)
                <!-- Anda Mendapat <a href="#">8</a> Pesan Baru<br>
                <a href="#">Akun Setting</a> &bull; <a href="#">Keluar</a> -->
            </div>
            <div class="clear"></div>
        </div>
        
        <div id="menu">
            <a class="left selected" href="index.php"><img src="images/home.png">Home</a>
            <a class="center" href="form.php"><img src="images/menu1.png">Input</a>
            <a class="right" href="settings.php""><img src="images/menu3.png">Settings</a>
            <!-- <a class="right" href="http://tutorialweb.net" target="_blank"><img src="images/menu4.png">My Website</a> -->
        </div>
        
        <div id="shortcut">
        	<a href="#today"><img src="images/short1.png"><br>Today</a>
            <a href="#stat"><img src="images/short2.png"><br>Statistic</a>
            <a href="#viol"><img src="images/short3.png"><br>Violation</a>
            <a href="#all"><img src="images/short4.png"><br>Students</a>
        </div>
        
        <div id="content">
        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
                <!-- //keluarmasuk harini -->
            	<tr valign="top" id="today">
                    <td width="40%" style="padding-right:20px;">
                        <!-- tabel - mahasiswa keluar -->
                		<table class="table" width="100%">
                            <h3 class="tb-header">Mahasiswa Keluar</h3>
                            <tr class="th">
                                <th>No.</th>
                                <th>Name</th>
                                <th>Generation</th>
                                <th>Time Log</th>
                            </tr>
                            <?php 
                                $q="SELECT *, COUNT(a.finger) AS qlog FROM logfinger a, students b 
                                WHERE a.`finger`=b.`id` 
                                AND DATE(a.time_stamp)=CURDATE() 
                                GROUP BY a.`finger` HAVING COUNT(a.finger)%2=1;";
                                $get=mysqli_query($con,$q);
                                $no=1;
                                $rowo=mysqli_num_rows($get);// variabel luar
                                while ($data=mysqli_fetch_array($get)) {
                            ?>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center"><?php echo $no++; ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['angkatan'] ?></td>
                                <td><?php echo $data['time_stamp'] ?></td>
                                <!-- <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td> -->
                            </tr>
                            <?php } ?>
                        </table>                		
                    </td>
                    <td width="40%" style="padding-right:10px;">
                        <!-- tabel - mahasiswa Kemabali -->
                        <table class="table" width="100%">
                            <h3 class="tb-header">Mahasiswa Kembali</h3>
                            <tr class="th">
                                <th>No.</th>
                                <th>Name</th>
                                <th>Generation</th>
                                <th>Time Log</th>
                            </tr>
                            <?php 
                                $q="SELECT *, COUNT(a.finger) AS qlog FROM logfinger a, students b 
                                WHERE a.`finger`=b.`id` 
                                AND DATE(a.time_stamp)=CURDATE()
                                GROUP BY a.`finger` HAVING COUNT(a.finger)%2=0;";
                                $get=mysqli_query($con,$q);
                                $no=1;
                                
                                $rowi=mysqli_num_rows($get);// variabel luar

                                while ($data=mysqli_fetch_array($get)) {
                            ?>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center"><?php echo $no++; ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['angkatan'] ?></td>
                                <td><?php echo $data['time_stamp'] ?></td>
                                <!-- <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td> -->
                            </tr>
                            <?php } ?>
                        </table>
                    </td>
                    <td width="20%" style="padding-right:10px;">
                    <h3 class="tb-header">Statistik</h3>
                        <div id="body">
                            <div class="title">Hari Ini</div>
                            <div class="body">
                            	<div id="stat" style="background:#FFF"><span class="text"><img src="images/menu4.png"> Total Keluar</span><span class="value"><?php echo $rowo ?></span></div>
                                <div id="stat" style="background:#EEE"><span class="text"><img src="images/home.png"> Total Kembali</span><span class="value"><?php echo $rowi ?></span></div>
                            </div>
                        </div>
                    </td>                    
                </tr>

                <!-- Pelanggaran -->
                <tr valign="top" id="viol">
                	<td colspan="3">
                        <h3 class="tb-header">Mahasiswa Melanggar</h3>
                    	<table class="table" width="100%">
                            <tr class="th">
                                <th width="3%">No.</th>
                                <th>Name</th>
                                <th>Hometown</th>
                                <th>Year Generation</th>
                                <th>Email</th>
                                <!-- <th>Setting</th> -->
                            </tr>
                            <?php 
                                $qt="SELECT * FROM timeallow";
                                $getQt=mysqli_query($con,$qt);
                                $dataT=mysqli_fetch_array($getQt);
                                $startT=$dataT['startT'];
                                $endT=$data['endT'];
                                $qs="SELECT * FROM logfinger a, students b 
                                WHERE a.`finger`=b.`id` 
                                AND TIME(a.`time_stamp`) NOT BETWEEN '$startT' AND  '$endT'
                                GROUP BY a.`finger` HAVING COUNT(a.finger)%2=0";
                                $gets=mysqli_query($con,$qs);
                                $no=1;
                                while ($datas=mysqli_fetch_array($gets)) {
                            ?>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center"><?php echo $no++; ?></td>
                                <td><?php echo $datas['nama']; ?></td>
                                <td><?php echo $datas['alamat']; ?></td>
                                <td><?php echo $datas['angkatan']; ?></td>
                                <td><?php echo $datas['email']; ?></td>
                                <!-- <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td> -->
                            </tr>
                                <?php } ?>
                        </table>
                    </td>
                </tr>
                <!-- Students -->
                <tr valign="top" id="all">
                	<td colspan="3">
                        <h3 class="tb-header">Data Mahasiswa</h3>
                    	<table class="table" width="100%">
                            <tr class="th">
                                <th width="3%">No.</th>
                                <th>Name</th>
                                <th>Hometown</th>
                                <th>Year Generation</th>
                                <th>Email</th>
                                <!-- <th>Setting</th> -->
                            </tr>
                            <?php 
                                $qs="SELECT * FROM students";
                                $gets=mysqli_query($con,$qs);
                                $no=1;
                                while ($datas=mysqli_fetch_array($gets)) {
                            ?>
                            <tr class="td" bgcolor="#FFF">
                                <td align="center"><?php echo $no++; ?></td>
                                <td><?php echo $datas['nama']; ?></td>
                                <td><?php echo $datas['alamat']; ?></td>
                                <td><?php echo $datas['angkatan']; ?></td>
                                <td><?php echo $datas['email']; ?></td>
                                <!-- <td align="center"><img src="images/detail.png"><img src="images/edit.png"><img src="images/delete.png"></td> -->
                            </tr>
                                <?php } ?>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        
        <div id="footer">
        	Copyright &copy; 2019 | Admin FingerDust<br>
            Create & Design by Badrus dan Azis
        </div>
    </div>

</body>
</html>