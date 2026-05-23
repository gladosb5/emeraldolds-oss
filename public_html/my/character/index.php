<!DOCTYPE html>
<html>
<head>
    <title>emeraldnews - Change Character</title>
    <?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

$RobloxColors = array(
    1,          //1
    208,        //2
    194,        //3
    199,        //4
    26,         //5
    21,         //6
    24,         //7
    226,        //8
    23,         //9
    107,        //10
    102,        //11
    11,         //12
    45,         //13
    135,        //14
    106,        //15
    105,        //16
    141,        //17
    28,         //18
    37,         //19
    119,        //20
    29,         //21
    151,        //22
    38,         //23
    192,        //24
    104,        //25
    9,          //26
    101,        //27
    5,          //28
    153,        //29
    217,        //30
    18,         //31
    125         //32
);

$RobloxColorsHtml = array(
    "#F2F3F2",  //1
    "#E5E4DE",  //2
    "#A3A2A4",  //3
    "#635F61",  //4
    "#1B2A34",  //5
    "#C4281B",  //6
    "#F5CD2F",  //7
    "#FDEA8C",  //8
    "#0D69AB",  //9
    "#008F9B",  //10
    "#6E99C9",  //11
    "#80BBDB",  //12
    "#B4D2E3",  //13
    "#74869C",  //14
    "#DA8540",  //15
    "#E29B3F",  //16
    "#27462C",  //17
    "#287F46",  //18
    "#4B974A",  //19
    "#A4BD46",  //20
    "#A1C48B",  //21
    "#789081",  //22
    "#A05F34",  //23
    "#694027",  //24
    "#6B327B",  //25
    "#E8BAC7",  //26
    "#DA8679",  //27
    "#D7C599",  //28
    "#957976",  //29
    "#7C5C45",  //30
    "#CC8E68",  //31
    "#EAB891"   //32
);

function getColorValue($color) {
    global $RobloxColorsHtml, $RobloxColors;

    $index = array_search($color, $RobloxColors);

    if ($index !== false) {
        return $RobloxColorsHtml[$index];
    }

    return null;
}
$id = isset($_GET['ID']) ? (int)$_GET['ID'] : 0;
$imageUrl = 'https://emeraldolds.glados.pro/api/Rendering/Avatar.ashx?assetId=' . $_USER['id'];
$base64Image = file_get_contents($imageUrl);

// Check if the image was successfully fetched
if ($base64Image === FALSE) {
    // Handle the error
    echo "Failed to fetch the image.";
    $base64Image = ''; // Ensure $base64Image is defined
}
?>
<div id="Body">
	<style>
	.clothe
	{
		width:110px;
		/*height: 200px;*/
		margin: 10px;
		text-align: left;
		
		vertical-align: top;
		display: inline-block;
		display: -moz-inline-stack;
		*display: inline;
	}
	.clothe .name {
		font-weight: bold;
	}
	.nocl
	{
		text-align: center;
		margin:20px;
	}
	.img{
		border:none;
		height: 100%;
	}
	.imgc
	{
		border:1px solid black;
		width: 110px;
		height: 110px;
		text-align: center;
		position: relative;
	}
	.fixed
	{
		position:absolute;
		right:0;
		top:0;
		background-color: #EEEEEE;
		border: 1px solid #555555;
		color: blue;
		font-family: Verdana;
		font-size: 10px;
		font-weight: lighter;
	}
	#left{
		width: 61%;
		float: left;
	}
	#right{
		width: 38%;
		float: right;
	}
	#Body table
	{
		border: 1px black solid;
	}
	.tablehead
	{
		font-size:16px; font-weight: bold; border-bottom:black 1px solid; width: 100%; background-color: #CCCCCC; color: #222222;
	}
	.tablebody
	{
		font-weight: lighter; background-color: transparent;font-family: Verdana;
	}
	.margin{
		margin:10px;
	}
	.clickable, .clickable3, .clickable2
	{
		border: none;
		margin:1px;
	}
	.clickable{
		width:35px;
		height: 35px;
	}
	.clickablesm{
		width:40px;
		height:40px;
		margin:5px;
	}
	.clickable2{
		width:35px;
		height: 70px;
	}
	.clickable3{
		width:70px;
		height: 70px;
	}
	.nonsbtn
	{
		font-weight:normal;
	}
	#col{
		position: fixed;
		top: 50%;
		left: 50%;
		margin-top: -105px;
		margin-left: -205px;
		width: 410px;
		height: 210px;
		z-index: 498;
		background-color: white;
		text-align: center;
		vertical-align: center;
	}
	.tablebody a {
	    color:blue;
	}
	.tablebody a:hover {
	    cursor:pointer;
	}
	#limg {
	    width:100%;
	}
</style>
<script>
    curType = 0;
    curPage = 1;
    function getWardrobe(type, page) 
    {
    	if (page == undefined){ page = 1; }
        $("#btn" + curType).css("font-weight", "normal");
        $("#btn" + type).css("font-weight", "bold");
        curType = type;
        curPage = page;
        if(type != 5 && type != 6 && type != 69) 
        {
            if(type == 2) {
                $("#crlink").attr("href", "/my/character/upload/?type=0");
            }
            if(type == 3) {
                $("#crlink").attr("href", "/my/character/upload/?type=1");
            }
            if(type == 4) {
                $("#crlink").attr("href", "/my/character/upload/?type=2");
            }
            $("#crlink").show();
        } 
        else 
        {
            $("#crlink").hide();
        }
        $.post("/api/user/character/getType.php", {type:type,page:page}, function(data) 
        {
        	$("#wardrobe").html("");
        	$("#wardrobe").html(data);
        })
        .fail(function() 
        {
        	$("#wardrobe").html("");
        	$("#wardrobe").html("Failed to get wardrobe");
        });
    }
    function getWearing() 
    {
        $.post("/api/user/character/getWearing.php", {csrf:$("#csrf_token").val()}, function(data) 
        {
        	$("#wearing").html("");
        	$("#wearing").html(data);
        })
        .fail(function() 
        {
        	$("#wearing").html("");
        	$("#wearing").html("Failed to get wearing items");
        });
    }
    function wear(id) 
    {
        $.post("/api/user/character/wear.php", {oid:id}, function(data) {
        	if(data == "Success") 
        	{
        		redraw();
        	    getWearing();
        	    getWardrobe(curType,curPage);
        	} 
        	else 
        	{
        		$("#infoa").html("");
        	    $("#infoa").html(data + "<br /><br />");
        	}
        })
        .fail(function() 
        {
        	$("#infoa").html("");
        	$("#infoa").html("Call to wear failed<br /><br />");
        });
    }
    function unwear(id) 
    {
        $.post("/api/user/character/unwear.php", {oid:id}, function(data) {
        	if(data == "Success") 
        	{
        		redraw();
        	    getWearing();
        	    getWardrobe(curType,curPage);
        	}
        	else 
        	{
        		$("#infoa").html("");
        	    $("#infoa").html(data + "<br /><br />");
        	}
        })
        .fail(function() 
        {
        	$("#infoa").html("");
        	$("#infoa").html("Call to unwear failed<br /><br />");
        });
    }
</script>
<div id="infoa"></div>
<div id="left">
	<table cellspacing="0px" width="100%" style="margin-bottom:10px;">
		<tbody><tr>
		    <th class="tablehead">My Wardrobe</th>
		</tr>
		<tr>
		    <td class="tablebody" style="font-size:12px; text-align: center; border-bottom: 1px solid black;">
		        <a id="btn69" onclick="getWardrobe(69)">Heads</a>&nbsp;
		        |
		        &nbsp;<a id="btn6" onclick="getWardrobe(6)">Faces</a>&nbsp;
		        |
		        &nbsp;<a id="btn5" onclick="getWardrobe(5)" style="font-weight: bold;">Hats</a>&nbsp;
		        |
		        &nbsp;<a id="btn2" onclick="getWardrobe(2)">T-Shirts</a>&nbsp;
		        |
		        &nbsp;<a id="btn3" onclick="getWardrobe(3)">Shirts</a>&nbsp;
		        |
		        &nbsp;<a id="btn4" onclick="getWardrobe(4)">Pants</a>
		        
		        <br>
		        <a href="/Catalog.aspx">Shop</a> 
		        &nbsp;
		        <a href="#" id="crlink">Create</a></span>
		    </td>
		</tr>
		<tr>
		    <td class="tablebody">
		        <div id="wardrobe" style="padding-top:10px;">
				</div>
				<div style="clear:both;"></div>
			</td>
		</tr>
	</tbody></table><div class="seperator"></div>
	<table cellspacing="0px" width="100%">
		<tbody><tr>
		    <th class="tablehead">Currently Wearing</th>
		</tr>
		<tr>
		    <td class="tablebody">
		        <div id="wearing"></div>
			</td>
		</tr>
	</tbody></table>
</div>
<div id="right">
	<table cellspacing="0px" width="100%">
		<tbody><tr><th class="tablehead">My Character</th></tr>
		<tr><th class="tablebody">
		<img id="img" style="height:340px;width:10
80px;" border="0" src="<?= $base64Image ?> ">
		Your avatar not refreshing? <a href="#" onclick="">Try to refresh the webpage!</a></th></tr>
	</tbody></table>
	<table cellspacing="0px" width="100%" style="margin-top: 10px;">
		<tbody><tr><th class="tablehead">Color Chooser</th></tr>
		<tr><th class="tablebody" style="padding-bottom:35px;"><p class="nocl" style="margin-top:20px; margin-bottom:15px;">Click a body part to change its color:</p><br>
			<button class="clickable" id="bp0" style="background-color:<?=getColorValue($_USER['Head'])?>" onclick="openColorPanel(0)"></button><div class="seperator" style="height: 5px;"></div>
			<button class="clickable2" id="bp3" style="background-color:<?=getColorValue($_USER['RA'])?>" onclick="openColorPanel(3)"></button>
			<button class="clickable3" id="bp2" style="background-color:<?=getColorValue($_USER['Torso'])?>" onclick="openColorPanel(2)"></button>
			<button class="clickable2" id="bp1" style="background-color:<?=getColorValue($_USER['LA'])?>" onclick="openColorPanel(1)"></button><div class="seperator" style="height: 5px;"></div>
			<button class="clickable2" id="bp5" style="background-color:<?=getColorValue($_USER['RL'])?>" onclick="openColorPanel(5)"></button>
			<button class="clickable2" id="bp4" style="background-color:<?=getColorValue($_USER['LL'])?>" onclick="openColorPanel(4)"></button>
		</th></tr>
	</tbody></table>
	
</div>

<script>
	var BP = 0;
	var OP = false;
	function changeBC(bdp,colour) 
	{
		$("#bp"+bdp).css("background-color", colour);
        $.post("/api/user/character/changebodycolour.php", {bodyP:bdp,color:colour}, function(){ redraw() })
        .fail(function() 
        {
        	$("#wardrobe").html("Failed to change body colour");
        });
	}
	
	function getRandomInt(min, max) {
	  return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	function resetBC() 
	{
		changeBC(0,"#F5CD2F");
		changeBC(3,"#F5CD2F");
		changeBC(2,"#C4281B");
		changeBC(1,"#F5CD2F");
		changeBC(4,"#4B974A");
		changeBC(5,"#4B974A");
		$("#colorPanel").hide();
	}

	function checkIfRendered()
	{
		$.ajax({ type:"GET", url:"/Thumbs/Avatar.ashx?assetId=<?=$_USER['id']?>&t=" + getRandomInt(1, 2000000), success: function(output, status, xhr)
		{
			setTimeout(function(){
				$("#limg").attr("src", "/Thumbs/Avatar.ashx?assetId=<?=$_USER['id']?>&isSquare=1&t=" + getRandomInt(1, 2000000));
			}, 500);
		}});
	}

	function redraw() 
	{
		$.post("/api/Rendering/Avatar.ashx?assetId=<?=$_USER['id']?>", {csrf:$("#csrf_token").val()}, function()
		{
			checkIfRendered();
		})
		.fail(function() 
		{
		    $("#wardrobe").html("Could not redraw character");
		});
	}

	function openColorPanel(bodyPart) {
		if ($("#colorPanel").is(":visible")) 
		{
			if(bodyPart !== BP) 
			{
				BP = bodyPart;
			} 
			else 
			{
				$("#colorPanel").hide();
			}
		} 
		else 
		{
			BP = bodyPart;
			$("#colorPanel").show();
		}
		$("#colorPanel").attr("data-body-part", BP);
	}
	//source: https://stackoverflow.com/questions/1740700/
	var hexDigits = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 
	function rgb2hex(rgb) 
	{
		rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
	}
	function hex(x) 
	{
		return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
	}
	function selBodyC(color) 
	{
		changeBC(BP, rgb2hex(color));
		$("#colorPanel").hide();
	}
</script>
<div id="colorPanel" class="popupControl" style="top: 435px; right: 165px;display:none">
	<table cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
		<tbody><tr>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#F2F3F2;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#E5E4DE;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#A3A2A4;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#635F61;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#1B2A34;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#C4281B;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#F5CD2F;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#FDEA8C;height:32px;width:32px;">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#0D69AB;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#008F9B;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#6E99C9;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#80BBDB;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#B4D2E3;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#74869C;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#DA8540;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#E29B3F;height:32px;width:32px;">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#27462C;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#287F46;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#4B974A;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#A4BD46;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#A1C48B;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#789081;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#A05F34;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#694027;height:32px;width:32px;">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#6B327B;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#E8BAC7;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#DA8679;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#D7C599;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#957976;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#7C5C45;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#CC8E68;height:32px;width:32px;">
				</div>
			</td>
			<td>
				<div class="ColorPickerItem" onclick="selBodyC($(this).css('backgroundColor'))" style="display:inline-block;background-color:#EAB891;height:32px;width:32px;">
				</div>
			</td>
		</tr>
	</tbody></table>
</div>
<div style="clear:both;"></div>
<script>
$(function() 
    {
    	checkIfRendered();
        getWardrobe(5);
        getWearing();
    });
</script>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
<title>emeraldnews - Change Character</title>


