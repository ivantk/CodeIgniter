<style>
div.title {
    background-color:salmon;
    color:black;
    border-bottom:1px solid black;
    margin:20px;
    padding:20px;
}	
div.course {
    background-color:#FFA07A;
    color:black;
    border: 1px solid black;
    margin:20px;
    padding:20px;
}

</style>

    <div class="title">
        <h1><?php echo $name; ?></h1>
    </div>

    <div class="course">
        <h3><?php echo $course_item['description']; ?></h3>
       
            <?php echo $course_item['startdate']; ?>
    </div>

    