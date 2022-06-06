<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <?php echo validation_errors(); ?>

    <!-- echo form_open('form'); ?> -->
    <!-- ke controller form, methodnya index -->
    <?php echo form_open('makanan/inputForm'); ?>

    <h5>ID Makanan</h5>
	<?php
		echo form_input('ID', set_value('ID'));
	?>
	
	<h5>Nama Makanan</h5>
	<?php
		echo form_input('nama', set_value('nama'));
	?>
    <!--<input type="text" name="nama" value="<?php //echo set_value('nama'); ?>" size="50" />-->
	
	<h5>Jenis Kelamin</h5>
	<?php 
	if (set_value('jeniskelamin')=='Pria'){$ket=TRUE;} else {$ket=FALSE;}
		echo form_radio('jeniskelamin', 'Pria', $ket)." Pria </br>";
	if (set_value('jeniskelamin')=='Wanita'){$ket=TRUE;} else {$ket=FALSE;}
		echo form_radio('jeniskelamin', 'Wanita', $ket)." Wanita </br>";
	?>
	

    <h5>Password</h5>
	<?php
		echo form_password('password', set_value('password'));
	?>
	
	<h5>Jenis Menu</h5>
	<?php
		foreach ($query->result_array() as $row)
			{
				$options[$row['id_menu']]=$row['nama'];
			}
		echo form_dropdown('menu', $options, set_value('menu'));
	?>
	
    <h5>Password Confirm</h5>
	<?php
		echo form_password('passconf', set_value('passconf'));
	?>

    <h5>Email Address</h5>
	<?php
		echo form_input('email', set_value('email'));
	?>
    <!--<input type="text" name="email" value="<?php //echo set_value('email'); ?>" size="50" />-->

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>

</html>