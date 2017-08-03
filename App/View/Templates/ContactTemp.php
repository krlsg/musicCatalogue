<?php

namespace musicCatalogue\View\Templates;

class ContactTemp
{
    public function getContact()
    {
        echo '
        <div align="center" style="overflow-y: scroll; height:600px;">
            <h1 align="center">Contacts</h1>
        <table width = 40% height = 30% align ="left" border="1" bordercolor="#4CAF50">
        <tr>
            <td><h3> Contact info:</h3>
                <ul>
                    <li>Aruna Priyankara Wijewardana</li>
                    <ul><li>117, Olaines 4, Riga</li>
                    <li>LV 1055</li>
                    <li>Tel: +371 25446534</li>
                    <li>Email: aruna.wijewardana@gmail.com</li></ul>
                </ul>
                <ul>
                    
                    <li>Karlis Geidans</li>
                    <ul><li>Rupniecibas 21/3</li>
                    <li>LV 1058</li>
                    <li>Tel: +371 266 366 01</li>
                    <li>Email: kaksors@inbox.lv</li></ul>
                </ul>
                <ul>
                    <li>Mikelis Gulbis</li>
                    <ul><li>Lapu iela 11-2, Ogre</li>
                    <li>LV 5001</li>
                    <li>Tel: +371 26537965</li>
                    <li>Email: mikelis.gulbis@gmail.com</li></ul>
                </ul>
            </td>
        </tr>
        </div>
        <div>
            <table width = 50% align ="right" border="1" bordercolor="#4CAF50">
                <td>
                    <form action="" method="post">
                        <table align="center">
                            <tr><td>Name</td><td><input type="text" name="name" required></td></tr>
                            <tr><td>Surname</td><td><input type="text" name="surname"></td></tr>
                            <tr><td>Email</td><td><input type="email" name="email" required></td></tr>
                            <tr><td>Phone Number</td><td><input type="text" name="phone"></td></tr>
                            <tr><td>Country</td><td><input type="text" name="country"></td></tr>
                            <tr><td>Message</td><td><textarea name="message" rows="4" cols="50" required></textarea></td></tr>
                            <tr><td></td><td><input type="submit" name="submit"></td></tr>
                        </table>
                    </form>
                </td>
        </div>
        
     ';
    }
}