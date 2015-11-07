<?php foreach ($courses as $cours_item): ?>
        <div>
            <h5><?php echo $cours_item['name']; ?></h5>
            
            <p><?php echo $cours_item['summary']; ?></p>
            
            <p><?php echo $cours_item['startDate']; ?></p>
        </div>
    
<?php endforeach; ?>