<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
<main>
    <form>
        <div>Enter tags</div>
        <input type="text" name="tags"/><input type="submit"/>
    </form>
    <?php
    if (isset($_GET['tags'])) {
        if (empty($_GET['tags'])) {
            echo "Please enter at least one tag";
            die;
        }
        $tags = explode(", ", $_GET['tags']);

        $arr = array();
        foreach ($tags as $tag) {
            if (!(array_key_exists($tag, $arr))) {
                $arr[$tag] = 1;
            } else {
                $arr[$tag] += 1;
            }
        }
        arsort($arr);
        foreach ($arr as $tag => $times) {
            echo $tag . ' : ' . $times . "<br>";
        }
        reset($arr);
        $first_key = key($arr);
        echo '<p>Most Frequent tag is: ' . $first_key . '</p>';

    }
    ?>
</main>
</body>
</html>