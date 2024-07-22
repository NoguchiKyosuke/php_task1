<!doctype html>
<html>

<head>
    <title>リストジェネレータ</title>

<head>

<body>
    <form action="listgen.php" method="POST">
        <label for="F">F</label>
        <input type="number" name="F" id="F" repuired><br>

        <label for="E">E</label>
        <input type="number" name="E" id="E" repuired><br>

        <label for="S">S</label>
        <input type="number" name="S" id="S" repuired><br>

        <label for="Pre">Pre</label>
        <input type="text" name="Pre" id="Pre" repuired><br>

        <label for="Post">Post</label>
        <input type="text" name="Post" id="Post" repuired><br>

        <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            function customErrorHandler($errno, $errstr, $errfile, $errline){
                echo "Error:".$errstr." in ".$errfile." on line ".$errline."<br>";
            }
            set_error_handler("customErrorHandler");
        
            if(isset($_POST['F'])){
                $F = $_POST['F'];
            }else{
                $F = 0;
            }

            if(isset($_POST['E'])){
                $E = $_POST['E'];
            }else{
                echo $undefinedVariable;
            }

            if(isset($_POST['S'])){
                $S = $_POST['S'];
            }else{
                $S = 1;
            }

            $Pre = htmlspecialchars(trim($_POST['Pre']));
            $Post = htmlspecialchars(trim($_POST['Post']));
             
            if(!is_numeric($F) || !is_numeric($E) || !is_numeric($S)){
                echo $undefinedVariable;
            }else{
                while($F <= $S){
                    echo $Pre.$F.$Post."<br>";
                    $F = $F + $E;
                }
            }
        }
    ?>

</body>

</html>
