<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<main>
    <form>
        <div>Enter tags</div>
        <input type="text" name="tags"/><input type="submit"/>
    </form>
    <?php
    if (isset($_GET['tags'])) :
        $tags = explode(", ", $_GET['tags']);
        foreach ($tags as $key => $value): ?>
            <?=$key?> : <?=$value?></br>

        <?php endforeach; endif; ?>
</main>
</body>
</html>