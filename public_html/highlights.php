<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$id = (int)$_GET['id'];

if(!isset($id) || empty($id) || $id < 1){
  $home = true;
}else{
  $home = false;
}

if($logged == "no"){
  header("Location: /Login/Default.aspx");
  exit();
}   
?>
<h1>student of the week</h1>
<p>i will post the student of the week here</a></p>
<p>if you want to be blacklisted from the student of the week <a href="https://emeraldolds.glados.pro/my/PrivateMessage.aspx?RecipientID=1"> this user</a></p>
  <table border="1" cellpadding="10" cellspacing="0" style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>name</th>
                            <th>reason why student of the week</th>
                        </tr>
                        <tr>
                        <td>12-5-2025</td>
                        <td>rong luo, lucas, and daxton</td>
                        <td>for axcelling the exam in subjects (malay, science, english, etd i cofkfdkh ndhlkh )</td>
                       </tr>
                        <tr>
                        <td>14-4-2025</td>
                        <td>sam li</td>
                        <td>because.. NEW student!! yaa...</td>
                       </tr>
                    </thead><tr>
                        <td>2-27-2025</td>
                        <td>en ling</td>
                        <td>somebody told me cuz she was leaving tmr ya</td>
                       </tr>
                    <tbody><tr>
                        <td>2-19-2025</td>
                        <td>daxton</td>
                        <td>i forgot to ask people why maybe tomorrow</td>
                       </tr></tbody></table>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>