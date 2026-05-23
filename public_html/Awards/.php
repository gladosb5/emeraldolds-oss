<?php
session_start();

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>emeraldnews - Awards</title>
    <style>
        .clothe {
            width: 110px;
            margin: 10px;
            text-align: left;
            vertical-align: top;
            display: inline-block;
        }
        .clothe .name {
            font-weight: bold;
        }
        .img {
            border: none;
            height: 100%;
        }
        .imgc {
            border: 1px solid black;
            width: 110px;
            height: 110px;
            text-align: center;
            position: relative;
        }
        #wardrobe {
            padding-top: 10px;
        }
        .tablehead {
            font-size: 16px;
            font-weight: bold;
            border-bottom: black 1px solid;
            width: 100%;
            background-color: #CCCCCC;
            color: #222222;
        }
        .tablebody {
            font-weight: lighter;
            background-color: transparent;
            font-family: Verdana;
        }
    </style>
    <script>
        var curType = 5;
        var curPage = 1;

        function getWardrobe(type, page = 1) {
            document.querySelector(`#btn${curType}`).style.fontWeight = "normal";
            document.querySelector(`#btn${type}`).style.fontWeight = "bold";
            curType = type;
            curPage = page;

            fetch('fetchWardrobe.php', {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: `type=${type}&page=${page}`
            })
            .then(response => response.text())
            .then(data => {
                document.querySelector("#wardrobe").innerHTML = data;
            })
            .catch(() => {
                document.querySelector("#wardrobe").innerHTML = "Failed to get wardrobe";
            });
        }
    </script>
</head>
<body>
    <div id="Body">
        <div id="left">
            <table cellspacing="0px" width="100%" style="margin-bottom:10px;">
                <tr>
                    <th class="tablehead">The Awards</th>
                </tr>
                <tr>
                    <td class="tablebody" style="font-size:12px; text-align: center; border-bottom: 1px solid black;">
                        <a id="btn69" onclick="getWardrobe(69)">Most popular</a>&nbsp;|&nbsp;
                        <a id="btn6" onclick="getWardrobe(6)">Most weirdest</a>&nbsp;|&nbsp;
                        <a id="btn5" onclick="getWardrobe(5)" style="font-weight: bold;">Most Funny</a>&nbsp;|&nbsp;
                        <a id="btn2" onclick="getWardrobe(2)">Most epic</a>&nbsp;|&nbsp;
                        <a id="btn3" onclick="getWardrobe(3)">Most brainrot</a>&nbsp;|&nbsp;
                        <a id="btn4" onclick="getWardrobe(4)">Most Favourited</a>
                    </td>
                </tr>
                <tr>
                    <td class="tablebody">
                        <div id="wardrobe">
                            <!-- Wardrobe items will be loaded here -->
                        </div>
                        <div style="clear:both;"></div>
                    </td>
                </tr>
            </table>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            getWardrobe(curType, curPage);  // Load current type wardrobe
        });
    </script>
</body>
</html>
