<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class MyClass
    {
        // Define a class variable
        public $classVar = "Hello, world!";

        // Define a class method
        public function myMethod()
        {
            // Use the class variable
            echo $this->classVar; // Output: Hello, world!
        }
    }
    // can change the accessibility by using access specifiers.
    ?>
</body>

</html>