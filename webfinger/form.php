<!DOCTYPE html>
<html>
<head>
	<title>FingerDust</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">
    	<div id="header">
        	<div id="logo">
            	<img src="images/logo.png">
            </div>
            <div id="info">
            	<img src="images/user.png">
                Selamat Datang <br>Azis Badrus!<br>Enjoy your day! :)
            </div>
            <div class="clear"></div>
        </div>
        
        <div id="menu">
            <a class="left" href="index.php"><img src="images/home.png">Home</a>
            <a class="center selected" href="form.php"><img src="images/menu1.png">Input</a>
            <a class="right" href="settings.php"><img src="images/menu3.png">Settings</a>
        </div>
        
        <div id="content">
        	<table border="0" width="100%" cellpadding="0" cellspacing="0">
            	<tr valign="top">
                	<td width="75%" style="padding-right:20px;">
                		<div id="body">
                        	<div class="title">Form</div>
                            <div class="body">
                            	<form action="action.php?act=input" method="post">
                                <table>
                                    <tr>
                                    	<td><b>ID</b><div class="desc">ID Sesuaikan Sidik Jari</div></td>
                                        <td>:</td>
                                        <td><input name="id" type="text" required /></td>
                                    </tr>
                                	<tr>
                                    	<td><b>Nama Lengkap</b><div class="desc">Masukkan nama lengkap</div></td>
                                        <td>:</td>
                                        <td><input name="nama" type="text" required /></td>
                                    </tr>
                                    <tr>
                                    	<td><b>Email</b><div class="desc">Masukkan Email yang Valid</div></td>
                                        <td>:</td>
                                        <td><input name="email" type="email" required /></td>
                                    </tr>
                                    <tr>
                                    	<td><b>Angkatan</b><div class="desc">Pilih jenis kelamin</div></td>
                                        <td>:</td>
                                        <td>
                                            <select name="tahun" >
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td><b>Alamat</b><div class="desc">Nama kota anda</div></td>
                                        <td>:</td>
                                        <td><input name="alamat" type="text" required /></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><input type="submit" value="Simpan" /><a class="orange" href="#"><img src="images/button-cancel.png">Batal</a></td>
                                    </tr>
                                </table>
                                </form>
                            </div>
                        </div>
                    </td>
                    <!-- <td width="25%" style="padding-left:10px;">
                    	<div id="body">
                        	<div class="title">Sub Menu</div>
                            <div class="body">
                            	<a class="submenu" href="#"><img src="images/home.png">Menu Pertama</a>
                                <a class="submenu" href="#"><img src="images/menu1.png">Menu 2</a>
                                <a class="submenu" href="#"><img src="images/menu2.png">Menu 3</a>
                                <a class="submenu" href="#"><img src="images/menu3.png">Menu 4</a>
                                <a class="submenu" href="#"><img src="images/menu4.png">Menu 5</a>
                                <a class="submenu" href="#"><img src="images/menu2.png">Menu 6</a>
                                <a class="submenu" href="#"><img src="images/menu1.png">Menu 7</a>
                                <a class="submenu" href="#"><img src="images/home.png">Menu 8</a>
                                <a class="submenu" href="#"><img src="images/menu4.png">Menu 9</a>
                            </div>
                        </div>
                    </td> -->
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