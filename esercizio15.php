<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaLista($num,$tipo){
            if($tipo == 'o'){
                echo "<ol>";
            }else{
                echo "<ul>";
            }
            for($i=0;$i<=$num;$i++){
                if($i % 2 == 0 || $i % 5 == 0){
                    echo "<li>{$i}</li>";
                }
            }
        }
        stampaLista(20, 'o');

    ?>
</body>
</html>