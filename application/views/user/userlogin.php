<div class="page">
    <form action="<?php echo base_url(); ?>index.php/userlogin/checkdatabase" method="post">
        User Name:<br>
        <input type="text" name="username"><br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>