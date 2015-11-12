
<div class="page">


    <a href="<?php echo base_url(); ?>index.php/userlogin/logout" class="white">  Logout</a>
    <h1>All courses</h1>
    <table border=1 class="white">
        <tr>
            <th>Course rname</th>
            <th>Summary</th>
            <th>Start Date</th>
        </tr>
    <h1><?php echo $title; ?></h1>
<?php

foreach ($courses as $cours_item): ?>
        <tr>
            <td>
                    <span><?php echo $cours_item['name']; ?></span>
            </td>
            <td>
                    <span><?php echo $cours_item['summary']; ?></span>
            </td>
            <td>
                    <span><?php echo $cours_item['startDate']; ?></span>
                <form action='<?php echo base_url(); ?>index.php/courses/deleteCourse/<?php echo $cours_item['id']; ?>' method="post">
                    <input type="submit" value="DELETE"/>
                </form>
            </td>
        </tr>

<?php endforeach ?>

    </table>
    <br/>
    <br/>
    <a href="<?php echo base_url(); ?>index.php/Courses/create" class="white">ADD Course</a>
    <br/><br/><br/>


</div>
