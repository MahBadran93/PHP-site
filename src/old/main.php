<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';
    const NAME = 'Test constant';
    // method declaration
    public function displayVar() {
        echo $this->var;
        echo self::NAME;
    }
}

$obj1 = new SimpleClass(); 
$obj1->displayVar(); 

?>
<?php 


function sum() {
    $sum = 0;
    return $sum;
}

echo sum();

echo "\n\n\n";

$b = 9; 

if (sum() == 0 or $b == 7) {
    echo "true, it is equal";
} else {
    echo  "not equal";
}

?>

<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
?>