<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Demo Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: black;
        color: white;
    }
    p {
        font-size: 16px;
        line-height: 1.5;
    }
</style>
<body>
    <?php
     $name = "Zain Fatima";
     echo "<h1>Hello, $name!</h1>";
     print "hello " . $name . "<br>";
     echo "greeting $name and everbody";

     $animes = [
        "demon slayer", 
        "one piece", 
        "naruto", 
        "attack on titan", 
        "death note", 
        "jujutsu kaisen", 
        "hunter x hunter"
    ];

    $users = [
        [
            "name" => "Zain Fatima",
            "Age" => 22,
            "City" => "Karachi",
            "Job" => "Software Engineer"
        ],
        [
            "name" => "Wajeeha Rahman",
            "Age" => 24,
            "City" => "Islamabad",
            "Job" => "Frontend Developer"
        ],
        [
            "name" => "Zoraiz Ahsan",
            "Age" => 26,
            "City" => "Faisalabad",
            "Job" => "Technical Consultant"
        ],
        [
            "name" => "Maryam Sheikh",
            "Age" => 23,
            "City" => "Lahore",
            "Job" => "Data Analyst"
        ]
    ]
    ?>
    <h1>My fav Animes</h1>
    <ul>
        <?php
        foreach($animes as $items){
            echo "<li>{$items}</li>";
        }
        ?>
    </ul>
    <p><?= $animes[2]?></p>
    <br><br>
    <h1>Users Information</h1>
    <?php
    foreach($users as $user){
        echo "<h2>{$user['name']}</h2>";
        echo "<p>Age: {$user['Age']}</p>";
        echo "<p>City: {$user['City']}</p>";
        echo "<p>Job: {$user['Job']}</p>";
        echo "<hr>";
    }
    ?>

    
</body>
</html>
