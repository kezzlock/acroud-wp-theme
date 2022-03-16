<?php if (have_rows('content')) : ?>
    <?php while (have_rows('content')) : the_row(); ?>
        <?php if (get_row_layout() == 'columns_section') :
            $columns = get_sub_field('columns');
        ?>
            <div class="grid-container">
                <?php foreach ($columns as $column) : ?>
                    <div>
                        <img src="<?php echo $column['icon']['url']; ?> " style="width: 30px; heght:30px; float:left; padding-top:15px">
                        <p><strong><?php echo $column['title']; ?></strong></p>
                        <p style="padding-left: 30px; max-width:200px"><?php echo $column['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>