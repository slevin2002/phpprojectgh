<?php
    $names = ['Slevin', 'Joyel', 'Nithish', 'Abhi'];
?>
<!DOCTYPE html>
<html lang="en">
<ph<?php
<body class="">
    <h1>Names</h1>
    <ul class="<?= count($names) > 3 ? 'more-names' : 'some-names' ?>">
        <?php foreach($names as $name) { ?>
        
          <li><?= $name ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>