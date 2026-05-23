<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

if($logged == "no"){
    header("Location: /Login/Default.aspx");
    exit();
}   
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
?>
<h1>This is the page for when people like someone. Someone told me to do this so I am doing it now.</h1>
<h3>Of course, we respect your privacy so this is the list of users that did NOT want to participate. (message me at emeraldnews gladosb5 if you want to be removed)</h3>
<h4>1. Cheah Hung Sang</h4>
<hr>
<table border="1" cellpadding="10" cellspacing="0" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th>from who</th>
                            <th>what</th>
                            <th>to who</th>
                        </tr>
                    </thead>
                    <tbody><tr>
                        <td>manfred</td>
                        <td>one sided (probably)</td>
                        <td>shermaine</td>
                    </tr>
                    <tbody><tr>
                        <td>marcus</td>
                        <td>one sided? two sided? i dunno</td>
                        <td>rong luo</td>
                    </tr>
                    
