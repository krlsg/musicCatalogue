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
$sql = "SELECT title, author, created_at FROM track";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
echo $rowCount;
$middleman = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $middleman[] = array('title' => $row["title"], 'author' => $row["author"], 'date' => $row["created_at"]);
    }
} else {
    echo "0 results";
}
var_dump($middleman);
// Switch columns with rows
foreach ($middleman as $key => $row) {
    $title[$key]  = $row['title'];
    $author[$key] = $row['author'];
    $date[$key] = $row['date'];
}
// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
// Sort by 1) title 2) author 3)date
$needSort = 1; //userInput
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
$searchKey = 'Dance track';
//User input songName; bigArray is fetched from the database
$songName = searchTitle($searchKey, $middleman);
var_dump($songName);