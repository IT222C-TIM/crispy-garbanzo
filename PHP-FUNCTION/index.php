<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'function.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = $_POST['limit'];
        $sequence = fibonacci($n);
    }
    
    ?>


    <form method="POST" action="">
        <label for="limit">Enter the limit (n):</label>
        <input type="number" name="limit" required><br><br>
        <input type="submit" value="Generate Fibonacci Sequence">
    </form>
    <?php
    echo "Fibonacci Sequence up to $n terms: <br>";
    echo implode(", ", $sequence);
    ?>
</body>
</html>