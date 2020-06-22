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
                Selamat Datang <br>Azis Badrus!<br>Enjoy your day! :)
                <!-- Anda Mendapat <a href="#">8</a> Pesan Baru<br>
                <a href="#">Akun Setting</a> &bull; <a href="#">Keluar</a> -->
            </div>
            <div class="clear"></div>
        </div>
        
        <div id="menu">
            <a class="left" href="index.php"><img src="images/home.png">Home</a>
            <a class="center" href="form.php"><img src="images/menu1.png">Input</a>
            <a class="right selected" href="settings.php"><img src="images/menu3.png">Settings</a>
        </div>
        
        
        <div id="content">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            	<tr valign="top">
                	<td width="75%" style="padding-right:20px;">
                		<div id="body">
                        	<div class="title">Form</div>
                            <div class="body">
                            	<form action="action.php?act=settime" method="post">
                                <table>
                                    <tr>
                                    	<td><b>Start Time</b><div class="desc">Waktu Boleh Keluar</div></td>
                                        <td>  :</td>
                                        <td><input name="start" type="time" required /></td>
                                    </tr>
                                	<tr>
                                    	<td><b>End Time</b><div class="desc">Batas Waktu</div></td>
                                        <td>  :</td>
                                        <td><input name="end" type="time" required /></td>
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