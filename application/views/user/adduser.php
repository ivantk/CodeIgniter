<div align="page">
    <h1>Add user</h1>
    <form action="<?php echo base_url(); ?>index.php/adduser/adduser" method="post">
        <table class="white">
            <tr>
                <th><span>Username:</span></th>
                <td><input type="text" name="username"/></td>
            </tr>	
            <tr>
                <th><span>Password:</span></th>
                <td><input type="text" name="password"/></td>
            </tr>
            <tr>
                <th><span>Role:</span></th>
                <td><input type="text" name="role"/></td>
            </tr>			
            <tr>
                <td><input type="submit" name="submit" value="ADD USER"/></td>
                <td><input type="reset" name="reset" value="RESET"/></td>
            </tr>
        </table>
    </form>
    <br/>
    <span><a href="<?php echo base_url('index.php/usermanagement/index')?>" class="white">Back to User management</a><span>
    <br/><br/><br/>
</div>