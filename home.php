<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Untitled Document</title>
        <style type="text/css">
        <!--
        .style1 {
            font-size: 36px;
            font-weight: bold;
        }

        -->
        </style>
    </head>

<<<<<<< HEAD
<body>
    
    <table width="398" border="0" align="center" cellpadding="0">
      <tr>
        <td height="26" colspan="2">Your Profile Information </td>
        <td>
            <div align="right"><a href="index.php">logout</a></div>
        </td>
    </tr>
    <tr>
        <td width="129" rowspan="5">
            <img src="<?php echo "upload/{$_SESSION['mem_id']}.png" ?>" width="129" height="129" alt="no image found"/>
        </td>
        <td width="82" valign="top">
            <div align="left">FirstName:</div>
        </td>
        <td width="165" valign="top">
            <?php 
            echo $_SESSION["fname"] 
            ?>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <div align="left">LastName:</div>
        </td>
        <td valign="top">
            <?php 
            echo $_SESSION["lname"] 
            ?>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <div align="left">Gender:</div>
        </td>
        <td valign="top">
            <?php 
            echo $gender 
            ?>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <div align="left">Age:</div>
        </td>
        <td valign="top">
            <?php 
            echo $_SESSION["age"] 
            ?>
        </td>
    </tr>

</table>

<p align="center"><a href="setpic.php">Upload pic</a></p>
<p align="center"><a href="search.php">Search</a></p>

</body>
=======
    <body>
        <p align="center" class="style1">Login successfully </p>

        <p align="center"><a href="index.php">logout</a></p>
    </body>
>>>>>>> develop
</html>