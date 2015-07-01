<?php
include '../includes/conn.php';

if (is_login())
{
    if(is_admin())
    {
        redirect('../admin/index.php');
    }
    else
    {
       redirect('../user/index.php');
    }
}

if (isset($_POST['username']) && isset($_POST['password']))
{
    $id_user = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id_user, nama_user, status_user FROM user WHERE id_user = '{$id_user}' AND password = '{$password}'";
    $cek = mysql_query($sql);

    if (mysql_num_rows($cek) > 0)
    {
        $user = mysql_fetch_assoc($cek);

        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nama_user'] = $user['nama_user'];
		$_SESSION['status_user'] = $user['status_user'];
        $_SESSION['login'] = true;

        if(is_admin())
        {
            redirect('../admin/index.php');
        }
        else
        {
            redirect('../user/index.php');
        }
    }
    else
    {
		echo'<script type="text/javascript">';
			echo'alert("Salah Username atau Password");';
			echo"window.location.href='../index.php';";
		echo'</script>';
		//redirect('../index.php');
	}
}
else
{
    redirect('../_signin/signin.php');
}
