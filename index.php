<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица истинности</title>
    <style>
        table {
            color: black;
            border-collapse: collapse;
            width: 40%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        table.center {
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>
    <h1><center>Таблица истинности</center></h1>
    <table class="center">
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
         </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>1</td>
            <td>0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
        </tr>
        
    </table>

    
</body>
</html>