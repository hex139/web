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
    <ul class="file-list" id="fileList">
        <!-- Files will be dynamically added here -->
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

    <script>
        // Function to get the list of files in the current directory
        function getFiles() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var files = JSON.parse(this.responseText);
                    var fileList = document.getElementById("fileList");
                    fileList.innerHTML = ""; // Clear previous list
                    files.forEach(function(file) {
                        var li = document.createElement("li");
                        var a = document.createElement("a");
                        a.href = file;
                        a.textContent = file;
                        li.appendChild(a);
                        fileList.appendChild(li);
                    });
                }
            };
            xhttp.open("GET", "files.json", true); // Assuming files.json contains the list of files
            xhttp.send();
        }

        // Call the function when the page loads
        window.onload = function() {
            getFiles();
        };
    </script>
</body>
</html>
