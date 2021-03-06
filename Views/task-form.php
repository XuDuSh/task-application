<?php include ('head.php')?>
<div class="container">
    <h4><?php echo $title; ?></h4>
        <form method="POST" action="" class="container-fluid">
            <div class="form-group">
                <label for="name">Имя пользователя:</label>
                <input type="text" class="form-control" name="name" value="<?php print htmlentities($name); ?>"/>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php print htmlentities($email); ?>" />
            </div>
            <div class="form-group">
                <label for="text">Задача:</label>
                <textarea class="form-control" name="task"><?php print htmlentities($task); ?></textarea>
            </div>
            <?php
                if ( isset($_SESSION['USERNAME']) ) { ?>
                 <div class="form-group">
                    <label for="done">Сделанный:</label>
                    <input type="checkbox" name="done" value="<?php echo $done; ?>" <?php if ($done == 0) echo 'checked'; ?> />
                 </div>
                <?php }  ?>
                <input type="hidden" name="form-submitted" value="1" />
                <input type="submit" class="btn btn-send btn-primary" value="Создать" />
            </form>
          <p><a href="/">Домашняя страница</a></p>
</div>
<?php include ('foot.php');