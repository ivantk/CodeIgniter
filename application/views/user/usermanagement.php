<div class="page">
    <span>Hello, <?php echo $username; ?> ||| </span>
    <a href="<?php echo base_url(); ?>index.php/userlogin/logout" class="white">  Logout</a>
    <h1>All users</h1>
    <table border=1 class="white">
        <tr>
            <th>Username</th>
            <th>Role</th>
            <th>Operations</th>
        </tr>
        <?php foreach($rows as $row): ?>
        <tr>
            <td>
                <span><?php echo $row->username;?></span>
            </td>
            <td>
                <span><?php echo $row->role; ?></span>
            </td>
            <td>
                 <form action="<?php echo base_url(); ?>index.php/usermanagement/deleteuser/<?php echo $row->id; ?>" method="post">
                     <input type="submit" value="DELETE"/>
                 </form>
            </td>
        </tr>
        <?php endforeach ?>			
    </table>
    <br/>
    <br/>
    <a href="<?php echo base_url(); ?>index.php/adduser/index" class="white">ADD USER</a>
    <br/><br/><br/>
</div>    
        
        
        
        

