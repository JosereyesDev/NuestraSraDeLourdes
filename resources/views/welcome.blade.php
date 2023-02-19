<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuestra Señora de Lourdes</title>
</head>
<body>
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
            font-family: sans-serif;
        }
        ul {
           background: #f1f1f1;
           padding: 11px
        }
        li {
            list-style: none;
            padding: 10px;
            margin: 5px;
            background: #830000;
            width: 20%;
            color: white;
            display: inline-block;
            position: relative;
            border-radius: 5px;
            text-align: center;
        }
        li:hover {
            cursor: pointer;
            background: #6e0000;
        }
    </style>
    <h1 style="background: orange;padding: 10%;border-radius: 3px;color: white;text-align: center;">Página Nuestra Señora de Lourdes</h1>
    <nav>
        <ul>
            <li>Inicio</li>
            <li>Noticias</li>
            <li>Grupos Parroquiales</li>
        </ul>
    </nav>
</body>
</html>