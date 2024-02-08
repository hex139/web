<?php
// Function to get the list of files in the current directory
function getFiles() {
    $files = scandir(__DIR__);
    $files = array_diff($files, array('.', '..'));
    return $files;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codine Three Dimensional Designs</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .file-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .file-list li {
            margin: 20px;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            display: inline-block;
        }

        a {
            text-decoration: none;
            color: #61dafb;
        }

        h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }

        h1, h2, footer {
            text-align: center;
        }

        footer {
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            .file-list li {
                margin: 10px;
                padding: 10px;
            }

            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <h1>Codine Three Dimensional Designs</h1>
    <ul class="file-list">
        <?php
        $files = getFiles();
        foreach ($files as $file) {
            echo '<li><a href="' . $file . '">' . $file . '</a></li>';
        }
        ?>
    </ul>
    
        <!-- 728x90 Banner-->
<a href="https://cpm.link/ref/491990"><img src="//cpm.link/webroot/img/cpm/728x90.png" title="Click to Make Money Register" /></a>
<!-- 728x90 Banner--> 



    <h2>To contact me, please email me at</h2>
    <h2>khattabali106@gmail.com</h2>

    <h1>
        <a href="https://www.buymeacoffee.com/codine" target="_blank">Buy me a coffee</a>
    </h1>
    
    
    <h1>
        <a href="https://cpm.link/ref/491990" target="_blank">Make Money Buy shortening link</a>
    </h1>
    

    <h1>
        <a href="https://github.com/codine7" target="_blank">Follow me on GitHub</a>
    </h1>

    <h2>
        <a href="https://wa.me/201142368041" target="_blank">WhatsApp: +20 11 42 3680 41</a>
    </h2>

    <footer>
        © Copyrights Ali Khattab 2024
    </footer>
</body>
</html>
