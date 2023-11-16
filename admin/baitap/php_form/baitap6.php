<!DOCTYPE html>
<html lang="en">
<?php 
	
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>JomaShop</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/line-awesome.min.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="../../assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include '../sidebar.php' ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">
				<?php include '../template.php' ?>

                <div>
                    <?php 
        
                    ?>
                    <div>
                        <form action="baitap6_ketqua.php" name="nhaplieu" method="post">
                            <table style="background: lightyellow; margin: 20px auto">
                                <tr style="background: orange;">
                                    <th colspan="2">
                                        PHÉP TÍNH TRÊN HAI SỐ
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Chọn phép tính
                                    </td>
                                    <td>
                                        <input type="radio" name="operation" value="Cộng" checked>Cộng</input>
                                        <input type="radio" name="operation" value="Trừ">Trừ</input>
                                        <input type="radio" name="operation" value="Nhân">Nhân</input>
                                        <input type="radio" name="operation" value="Chia">Chia</input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số thứ nhất
                                    </td>
                                    <td>
                                        <input type="text" name="first" value="<?php
                                            if(isset($_POST['first'])) echo $_POST['first'];
                                        ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số thứ hai
                                    </td>
                                    <td>
                                        <input type="text" name="second" value="<?php
                                            if(isset($_POST['second'])) echo $_POST['second'];
                                        ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <input type="submit" name="cal" value="Tính">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="../../assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="../../assets/plugins/morris/morris.min.js"></script>
	<script src="../../assets/plugins/raphael/raphael.min.js"></script>
	<script src="../../assets/js/chart.js"></script>

	<!-- Custom JS -->
	<script src="../../assets/js/app.js"></script>

</body>

</html>