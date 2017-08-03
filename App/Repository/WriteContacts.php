<?php
/**
 * Created by PhpStorm.
 * User: aruna
 * Date: 03-Aug-17
 * Time: 7:12 AM
 */

namespace musicCatalogue\Repository;


class WriteContacts
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bootcamp";
        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function writeToDB($contactDetails) {
        //User inputs his contacts e.g: (doesnt know about the scam)
        $name = $contactDetails['name'];
        $surname = $contactDetails['surname'];
        $email = $contactDetails['email'];
        $phone = $contactDetails['phone'];
        $country = $contactDetails['country'];
        $message = $contactDetails['message'];

        //This information wont be viewed >:D
        $sql = "INSERT INTO contacts (name, surname, email, phone, country, message)
        VALUES ('$name', '$surname', '$email', '$phone', '$country', '$message' )";
        if ($this->conn->query($sql) === TRUE) {
            $writeResponse = True;
            return $writeResponse;
        } else {
            $writeResponse = False;
            return $writeResponse;
        }
    }
}