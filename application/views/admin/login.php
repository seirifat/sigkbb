<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Administrator</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1>Login Admin</h1>

        <form class="form" action="<?php echo base_url('admin/login');?>" method="post">
            <input type="text" placeholder="Username" name="id_user">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" id="login-button">Login</button>
        </form>
    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src='<?php echo base_url('assets/js/jquery.js'); ?>'></script>

<script src="<?php echo base_url('assets/js/index.js'); ?>"></script>

</body>
</html>
