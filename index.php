<!--Simple Calculator using PHP-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        border: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    main {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        width: 500px;
        margin: 50px auto;
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 5px #ccc;
    }

    input[type="text"], select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    input[type="text"] {
        background-color: #f2f2f2;
    }
</style>
<body>
    <?php 
        if(isset($_POST['count'])) { 
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
        
            // validate user inputs
            if (!is_numeric($num1) || !is_numeric($num2)) {
                $error = "Both inputs must be numeric values.";
            } else {
                switch($operator) {
                    case 'Addition':
                        $result = $num1 + $num2;
                        break;
                    case 'Subtraction':
                        $result = $num1 - $num2;
                        break;
                    case 'Multiplication':
                        $result = $num1 * $num2;
                        break;
                    case 'Division':
                        // avoid division by zero
                        if ($num2 == 0) {
                            $error = "Cannot divide by zero.";
                        } else {
                            $result = $num1 / $num2;
                        }
                        break;
                }
            }
        }
    ?>
    <main>
        <section>
            <form method="post">
                <input type="text" name="num1" placeholder="Enter first number">
                <br><br>
                <input type="text" name="num2" placeholder="Enter second number">
                <br><br>
                <select name="operator">
                    <option value="Addition">Addition</option>
                    <option value="Subtraction">Subtraction</option>
                    <option value="Multiplication">Multiplication</option>
                    <option value="Division">Division</option>
                </select>
                <br><br>
                <input type="submit" name="count" value="Calculate">
                <br><br>
                <?php if (isset($result)) { ?>
                    <input type="text" value="<?php echo $result; ?>" readonly>
                <?php } ?>
                <?php if (isset($error)) { ?>
                    <p style="color:red;"><?php echo $error; ?></p>
                <?php } ?>
            </form>
        </section>
    </main>
</body>
</html>