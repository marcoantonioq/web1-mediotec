<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1.0">
    <title>Aula 4 - MEDIOTEC </title>
    <link rel="stylesheet" href="../app/src/css/bootstrap.min.css">
    
    <style>
        header, aside, section, article, nav, footer {
            border: 1px solid black;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            
        }
         .container header{
             color: black;
             background-color: blue;
            }
        .row {
            margin-top: 20px;
        }
        .container { 
            background-color: #D93E0D;
            color:#D9D50D;
            border: 0px solid blue;
        }
    
        .color-bg{
            color:black;
        }
    </style> <!-- css -->
    
</head>

<body>
    <?php
   $user_name="Paulo e Adriano";
   ?>
   <p> Curso de Web I<p>

   Bem Vindo <?php echo $user_name; ?>
</body>
</html>