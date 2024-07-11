<div style="padding: 10px 0;">
    <?php if (isset($_GET['error'])) { ?>
        <div style="background-color:#fee; border-radius:10px; padding:10px; color:#a00"><?= $_GET['error'] ?></div>
    <?php } else if (isset($_GET['success'])) { ?>
        <div style="background-color:#efe; border-radius:10px; padding:10px; color:#0a0"><?= $_GET['success'] ?></div>
    <?php } ?>
</div>