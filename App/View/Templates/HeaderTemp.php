<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 8/2/17
 * Time: 12:17 AM
 */

namespace musicCatalogue\View\Templates;


class HeaderTemp
{
    public function getHeader()
    {
        echo '
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>musicCatalogue</title>
    <style>
        .knockout {
            background: url(http://localhost:8080/App/View/templates/logo.jpg) -80px -900px;
            color: red;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-weight: bold;
            font-size: 70px;
            font-family: arial, helvetica;
            padding-top: 20px;
            width: auto;
            height: 60px;
            text-align: center;
        }
        .topnav {
            background: url(http://localhost:8080/App/View/templates/logo.jpg) -80px -500px;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2ca51f;
            color: white;
        }

        body {
            background: #D8FAF6;
            color: black;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 150%;
        }

        p {
            text-align: center;
        }

        table {

            border: 0px;
        }

        .td {
            border: 1px solid;
            border-radius: 25px;
            background-color: #f2f2f2;
        }

        .td2 {
            border: 1px solid;
            border-radius: 25px;
            background-color: white;
            width: 270px;

        }
        footer {
            background: url(/App/View/templates/logo.jpg) -80px -900px;
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 10px;
            background-color: #4CAF50;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: black;
        }
        .search {
            position: flex;
            align-content: center;
            text-align: center;
        }
        a:link {
            text-decoration: none;
        }
    </style>

</head>
<div class="knockout">
    <a href="home">Amazing Kapable Men</a>
</div>
<div class="topnav" id="myTopnav">
    <a class="blog-nav-item active" href="home">Home</a>
    <a class="blog-nav-item" href="categories">Categories</a>
    <a class="blog-nav-item" href="tracks">Tracks</a>
    <a class="blog-nav-item" href="about">About</a>
    <a class="blog-nav-item" href="contact">Contact Us</a>
</div>
<body>
        ';
    }
}