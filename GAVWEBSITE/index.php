<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Core Examples</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f9; }
        .section { background-color: #ffffff; padding: 15px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 5px; }
        pre { background-color: #e9ecef; padding: 10px; border-radius: 4px; overflow-x: auto; }
        .output { background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 4px; font-weight: bold; }
        label { font-weight: 600; display: block; margin-top: 10px; }
        input[type="text"] { padding: 8px; border: 1px solid #ccc; border-radius: 44px; width: 200px; }
        input[type="submit"] { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px; }
        input[type="submit"]:hover { background-color: #0056b3; }
    </style>
</head>
<body>
 
    <h1>Core PHP Programming Concepts</h1>
 
    <div class="section">
        <h2>Concatenate String</h2>
        <?php
            $x = "Hi";
            $y = "How are you";
            $z = $x . " " . $y;
        ?>
        <p><strong>Code:</strong></p>
        <pre>
$x = "Hi";
$y = "How are you";
$z = $x . " " . $y;
echo $z;
        </pre>
        <p><strong>Output:</strong></p>
        <div class="output">
            <?php echo $z; ?>
        </div>
    </div>
    
    <div class="section">
        <h2>1. Math Functions</h2>
        <?php
            $base = 4;
            $exponent = 3;
            $power = pow($base, $exponent);
            $root = sqrt(64);
            $rounded = round(4.678, 1);
        ?>
        <p><strong>Code:</strong></p>
        <pre>
$power = pow(4, 3);
$root = sqrt(64);
$rounded = round(4.678, 1);
        </pre>
        <p><strong>Output:</strong></p>
        <div class="output">
            4 to the power of 3 is: <?php echo $power; ?><br>
            Square root of 64 is: <?php echo $root; ?><br>
            4.678 rounded to one decimal place is: <?php echo $rounded; ?>
        </div>
    </div>
 
    <div class="section">
        <h2>2. Loops (while loop and foreach loop)</h2>
        <?php
            $i = 1;
            $output_while = "";
            while ($i <= 3) {
                $output_while .= "While iteration $i. ";
                $i++;
            }
 
            $colors = ["Red", "Green", "Blue"];
            $output_foreach = "";
            foreach ($colors as $color) {
                $output_foreach .= "Color: $color. ";
            }
        ?>
        <p><strong>Code:</strong></p>
        <pre>
$i = 1;
while ($i <= 3) { $i++; }
 
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) { }
        </pre>
        <p><strong>Output:</strong></p>
        <div class="output">
            <strong>While Loop:</strong> <?php echo $output_while; ?><br>
            <strong>Foreach Loop:</strong> <?php echo $output_foreach; ?>
        </div>
    </div>
 
    <div class="section">
        <h2>3. Constants</h2>
        <?php
            define("SITE_NAME", "Gemini Demo App");
            const MAX_USERS = 100;
        ?>
        <p><strong>Code:</strong></p>
        <pre>
define("SITE_NAME", "Gemini Demo App");
const MAX_USERS = 100;
        </pre>
        <p><strong>Output:</strong></p>
        <div class="output">
            Site Name (using define): <?php echo SITE_NAME; ?><br>
            Max Users (using const): <?php echo MAX_USERS; ?>
        </div>
    </div>
 
    <div class="section">
        <h2>4. PHP Superglobals ($\_SERVER$ example)</h2>
        <?php
            $server_info = $_SERVER['SERVER_SOFTWARE'];
            $script_name = $_SERVER['SCRIPT_NAME'];
        ?>
        <p><strong>Code:</strong></p>
        <pre>
$server_info = $_SERVER['SERVER_SOFTWARE'];
$script_name = $_SERVER['SCRIPT_NAME'];
        </pre>
        <p><strong>Output:</strong></p>
        <div class="output">
            Server Software: <?php echo htmlspecialchars($server_info); ?><br>
            Current Script Path: <?php echo htmlspecialchars($script_name); ?>
        </div>
    </div>
 
    <div class="section">
        <h2>5. Sample Form Handling ($\_POST$ superglobal)</h2>
 
        <?php
            $message = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST['user_name'])) {
                    $name = htmlspecialchars($_POST['user_name']);
                    $message = "Hello, **$name**! Your form submission was processed successfully using \$_POST.";
                } else {
                    $message = "Please enter your name.";
                }
            }
        ?>
 
        <form method="post" action="">
            <label for="user_name">Enter Your Name:</label>
            <input type="text" id="user_name" name="user_name" placeholder="E.g., Alex" required>
            <input type="submit" value="Submit Name">
        </form>
 
        <p><strong>Code Snippet ($\_POST$ Handling):</strong></p>
        <pre>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user_name'];
}
        </pre>
 
        <p><strong>Output Message:</strong></p>
        <div class="output">
            <?php echo $message; ?>
        </div>
    </div>
 
</body>
</html>