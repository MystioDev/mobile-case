<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ratings.php" method="post">
        <label for="name">Name: </label> <br>
        <input type="text" name="name" id="name"> <br>

        <label for="range">Rating: </label> <br>
        <input type="range" name="range" id="range" min="1" max="5" value="5"> <br>

        <label for="comment">Comment</label> <br>
        <input type="text" name="comment" id="comment"> <br>

        <button type="submit"></button>
    </form>

    <div class="">
        <?php

            function getFileData(string $path) : void
            {
                if (!is_file($path)) {
                    echo '<p class="error">File not found</p>';

                    return;
                }

                $file = file_get_contents($path, 'r');

                if (!$file) {
                    echo '<p class="error">Unable to open file</p>';

                    return;
                }

                foreach (explode(PHP_EOL, $file) as $line) {
                    $lineData = explode('|', $line);
                    echo '<h1>' . $lineData[0] . '</h1>' . '<br>';
                    echo '<h2>' . $lineData[1] . '</h2>' . '<br>';
                    echo '<h3>' . $lineData[2] . '</h3>' . '<br><br>';
                }
            }

            function setFileData(string $path) : void
            {

            }

            getFileData('ratings.txt');
        ?>
    </div>
</body>
</html>