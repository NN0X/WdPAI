<?php

$path = trim($_SERVER['REQUEST_URI']);

$path = parse_url($path);
var_dump($path);

switch ($path)
{
        case 'dashboard':
                echo "
                <style>
                        h2 {
                                color: red;
                        }
                </style>
                ";
                echo "<h1>DASHBOARD</h1>";
        case 'login':
                echo "
                <style>
                        h2 {
                                color: blue;
                        }
                </style>
                ";
                echo "<h1>LOGIN</h1>";
        default:
                echo "<h1>404</h1>";
}


echo "
<script>
        const header = document.querySelector('h1');
        console.log(header);
        header.addEventListener('click', () => {
                header.style.color = 'green';
        });
</script>
"
?>
