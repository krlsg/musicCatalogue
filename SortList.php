<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bootcamp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM track";
$result = mysqli_query($conn, $sql);

$rowCount = mysqli_num_rows($result);
$middleman = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $middleman[] = array('title' => $row["title"], 'author' => $row["author"], 'date' => $row["created_at"]);
    }
} else {
    echo "0 results";
}
//var_dump($middleman);

// Switch columns with rows
foreach ($middleman as $key => $row) {
    $title[$key]  = $row['title'];
    $author[$key] = $row['author'];
    $date[$key] = $row['date'];
}

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
// Sort by 1) title 2) author 3)date
$needSort = 3; //userInput
if($needSort==1) {
        array_multisort($title, SORT_STRING, $author, SORT_STRING, $date, SORT_STRING, $middleman);
}elseif($needSort==2){
    array_multisort($author, SORT_STRING, $title, SORT_STRING, $date, SORT_STRING, $middleman);
}elseif($needSort==3){
    array_multisort($date, SORT_STRING, $title, SORT_STRING, $author, SORT_STRING, $middleman);
}
var_dump($middleman);

//Search for a title
function searchTitle($songName, $array) {
    foreach ($array as $key => $val) {
        if ($val['title'] === $songName) {
            return $key;
        }
    }
    return null;
}
//User inputs
$searchKey = 'Lullaby_of_birdland';
//User input songName; bigArray is fetched from the database
$songName = searchTitle($searchKey, $middleman);
var_dump($songName);


//Creating a comment in the database
/*
//User inputs his name; comment e.g:
$user = "Qseo"; // User input;
$comment = "Something new?"; // User input;
//Need to identify song for track_id

$track_id = rand(1,4);
$sql = "INSERT INTO comments (track_id, author, body, created_at)
VALUES ($track_id, '$user', '$comment', CURRENT_TIMESTAMP )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/


//Populatng track table with random values
/*
    function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    for ($i = 0; $i < 5; $i++) {
        $title = generateRandomString(7);
        $body = generateRandomString(20);
        $author = generateRandomString(4);

        $category_id = rand(1, 4);

        $sql = "INSERT INTO track (category_id, title, body, author, created_at)
VALUES ($category_id, '$title', '$body', '$author', CURRENT_TIMESTAMP )";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
*/

/*Putting the message in our database so we can sell it later

//User inputs his contacts e.g: (doesnt know about the scam)
$name = "John";
$surname = "Doe";
$email = "john.doe@gmail.com";
$phone = "2222222";
$country = "United States";
$message = "Your page looks nice";

//This information wont be viewed >:D
$sql = "INSERT INTO contacts (name, surname, email, phone, country, message)
VALUES ('$name', '$surname', '$email', '$phone', '$country', '$message' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
