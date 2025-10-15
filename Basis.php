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
    h1 {
        color: lightblue;
    }
</style>
<body>
    <?php
     $name = "Zain Fatima";
     echo "<h1>Hello, $name!</h1>";
     print "hello " . $name . "<br>";
     echo "greeting $name and everbody";

     //arrays, associated arrays and loops
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
        ];
 
    //conditional statements    
    if (!empty($animes)) {
        echo "<p>My favorite anime is {$animes[0]}.</p>";
    } else {
        echo "<p>No favorite anime found.</p>";
    }

    //functions
    function displayAnime($anime) {
        return "<p>My favorite anime is {$anime}.</p>";
    }
    function add($a, $b) {
        return $a + $b;
    }
    $sum = add(5, 10);
    echo "<p>The sum of 5 and 10 is: {$sum}</p>";

    function greet(){
        return "Hello, welcome to my website!";
    }
    echo greet();

    function filterAnimes($animes, $keyword) {
        $filtered = [];
        foreach ($animes as $anime) {
            if (stripos($anime, $keyword) !== false) {
                $filtered[] = $anime;
            }
        }
        return $filtered;
    }
    $filteredAnimes = filterAnimes($animes, 'on');
    echo "<h1>Filtered Animes:</h1>";
    if (!empty($filteredAnimes)) {
        echo "<ul>";
        foreach ($filteredAnimes as $anime) {
            echo "<li>{$anime}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No animes found with the given keyword.</p>";
    }       

    //LAMBDA FUNCTIONS
    function getAnimeLengths($animes) {
        return array_map(fn($anime) => strlen($anime), $animes);
    }
    $animeLengths = getAnimeLengths($animes);
    echo "<h1>Anime Lengths:</h1>";
    echo "<ul>";
    foreach ($animeLengths as $length) {
        echo "<li>{$length} characters</li>";
    }
    echo "</ul>";   

    function filter($items, $key, $value){
        $filteres = [];
        foreach($items as $item){
            if($item[$key] === $value){
                $filteres[] = $item;
            }
        }   
        return $filteres;
    }
    $filteredUsers = filter($users, 'Age', 23);
    echo "<h1>Filtered Users:</h1>";
    if(!empty($filteredUsers)){
        foreach($filteredUsers as $user){
            echo "<h2>{$user['name']}</h2>";
            echo "<p>Age: {$user['Age']}</p>";      
            echo "<p>City: {$user['City']}</p>";
            echo "<p>Job: {$user['Job']}</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No users found from the specified city.</p>";
    }
    ?>
    <br><br>


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
    echo "<pre>";
    print_r($users);
    echo "</pre>";

    echo "{$users[1]['name']}";
    echo displayAnime($animes[1]);

    ?>
    
</body>
</html>

