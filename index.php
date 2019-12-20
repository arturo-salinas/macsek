<!DOCTYPE html>
<html lang="en">
<head>
<title>MACSEK</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
	@font-face {
      font-family: macsek;
      src: url("fonts/KidzoneFontPro.ttf");
   } 
   
   body{
	   font-family: Arial!important;
	   margin: 0px;
	   /*background-color: #effdff;*/
	   /*background-color: #edfdf4;*/
	   /*background-color: #f3fff8;*/
	   background-color: #ffffff;
	   
   }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
	padding-left: 8vw;
      margin-bottom: 0;
      border-radius: 0;
	  /*background-color:#ffb636;*/
	  background-color:#fc792b;

    }
	.container-fluid {
	padding-left: 0;
	padding-right: 0;
	}
	.navbar-toggle {
	float: left;
	}
	
	.navColor > li >a{
		
		color:white!important;
		font-size:calc(24px + 0.1vw);
	    font-weight: bold;
	}
	
		.navColor > li >a:hover{
		
		background-color:#ffa405!important;
	}
	
	.headerClass {
	background: url(images/headerbg_summer4.png) top center;
	margin: 0px;
	padding: 10px 250px 38px 250px;
	min-width:1296px!important;
	border-radius: 0 !important;
	}
	
	.headerH1{
		display: inline-block;
		padding:0px 100px 0px 100px;
		color:#fc792b!important;
		margin-top:5px;
		font-family: macsek!important;
		font-weight:normal!important;
		text-align: center;
}
	
	.headerMobile{
		margin: 0px;
		padding: 0px;
		/*background-color:#aff0ff*/;
		background-color:#b7ffc8;
	}
	.headerH1Mobile{
		display: inline-block;
		color:#fc792b!important;
		margin: calc(10px + 1vw);
		font-family: macsek!important;
		font-weight:normal!important;
		
	}	
	.contentClass { 
	min-height: 50vh;
	/* color: #fc792b;*/

	
	}
	.newsClass {
		padding-left:10vw;
		padding-right:10vw;
	}	
	
	p.newsClass {
		font-size:calc(14px + 0.4vw);
		text-alignment: justify;
		padding-left:1vw;
		padding-right:1vw;
	}
	
	.aboutClass {
		padding-left:10vw;
		padding-right:10vw;
		font-size: calc(14px + 0.4vw);
		text-alignment: justify;
		
	}
	.programsClass {
		font-size: calc(14px + 0.4vw);
		padding-left:10vw;
		padding-right:10vw;
	}
	p.aboutClass {
		text-alignment: justify;
	}

	.contactClass {
		padding-left:10vw;
		padding-right:10vw;
		
	}
	p.contactClass {
		font-size:calc(16px + 0.1vw);
	    padding:0.4vw;
	}
	.footerClass{
		margin-bottom:0px;
		padding: 20px;
		color:#fc792b;
	}
	
	.blueBar{
		/*background-color:#91eaff;*/
		background-color:#2ad07a;
		padding:10px 40px 7px 40px;
		color:white;
		border-radius:8px;
		margin-bottom:20px;
	}
	.blueBar > h2 {margin-top:0px!important}


	</style>
</head>

<body>


<div class="container-fluid">
<!-- HEADER -->
<div class="jumbotron headerClass hidden-xs hidden-sm" >
<img class="img-responsive" style="display:inline-block;height:200px;margin-top:40px;padding-left:5vw;vertical-align: top;" src="images/logo1.png" ></img>
<h1 class="headerH1">Magyar<br/>Csemeték<br/>Közössége</h1>
<img class="img-responsive" style="display:inline-block;height:210px;padding-left:10px;margin-top:90px;vertical-align:top;" src="images/macsek7.png" ></img>
<img  style="display:inline-block;margin-left:50px;margin-top:30px;vertical-align:top;" src="images/motto2.png" ></img>
</div>
<div class="jumbotron headerMobile visible-xs visible-sm" >
<img class="img-responsive" style="display:inline-block;height:100px;margin-top:20px;vertical-align: top;" src="images/logo1.png" ></img>
<h1 class="headerH1Mobile">Magyar<br/>Csemeték<br/>Közössége</h1>
</div>

<!-- MENU -->
  <nav class="navbar navbar-light" style="font-size:20px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuBar">
        <span class="glyphicon glyphicon-menu-hamburger" style="color:white;font-size:5vw;"></span> <!--color:#fc792b-->                    
      </button>
    <div class="collapse navbar-collapse" id="menuBar">
      <ul class="nav navbar-nav navColor" >
        <li><a href="index.php?page=about">Rólunk</a></li>
        <li><a href="index.php?page=news">Hírek</a></li>
        <li><a href="index.php?page=progams">Foglalkozások</a></li>
        <li><a href="index.php?page=gallery">Galéria</a></li>
        <li><a href="index.php?page=contact">Kapcsolat</a></li>
      </ul>
	
    </div>
</nav>
<!-- CONTENT -->

<!--iframe  class=" hidden-xs hidden-sm" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmacsek.kozosseg%2F&tabs&width=230&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"  height="250" style="border:none;overflow:hidden;display:inline-block;float:right;width:200px;margin:50px 1vw 50px 1vw;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe-->

<div class="contentClass" >

<!--p-->
<?php 
function newsPage() {
	echo "<div class=\"newsClass\">";
	echo "<div style=\"height:35px\"></div>";
    //echo "<h1>Hírek</h1>";
	global $json_data;
	foreach($json_data["news"] as $article){
		echo "<img class=\"img-responsive\" style=\"padding-left:10px;\" src=\"images/news_divider4.png\"></img>";
		echo "<div class=\"blueBar\" style=\"\">";
		echo "<h2 style=\"margin-top:0px!important\">" . $article["title"] . "</h2>";
		echo "</div>";
		echo "<span>" . $article["date"]. "</span>";
		echo "<p class=\"newsClass\">" . $article["content"]. "</p>";
	}
	echo "</div>";
}

function aboutPage() {
	global $json_data;
	echo "<div class=\"aboutClass\">";
	echo file_get_contents("aboutPage.html");
    #echo implode("\n",$json_data["aboutUsPage"]);
	echo "</div>";
}

function progamsPage() {
	global $json_data;
	echo "<div class=\"programsClass\">";
	echo file_get_contents("programsPage.html");
    #echo implode("\n",$json_data["progamsPage"]);
	echo "</div>";
}

function galleryPage() {
    echo file_get_contents("galleryPage.html");
}

function contactPage() {
	global $json_data;
	echo "<div class=\"contactClass\">";
    echo "<div style=\"height:35px\"></div>";
    echo "<img class=\"img-responsive\" style=\"padding-left:10px;\" src=\"images/news_divider4.png\"></img>";
	echo "<div class=\"blueBar\" >";
    echo "<h2>Kapcsolat</h2>";
	echo "</div>";
	echo "<p class=\"contactClass\">";
	echo "<span class=\"glyphicon glyphicon-envelope\"></span>";
	echo " E-mail címünk: ";
	echo "<a href=\"mailto:" . $json_data["contacts"]["email"] . "\">". $json_data["contacts"]["email"] . "</a>" ;
	
	echo "</p>";
    echo "<p class=\"contactClass\">";
	echo "<span class=\"glyphicon glyphicon-phone\"></span>";
	echo " Telefonszámunk: ";
	echo $json_data["contacts"]["tel"];
	echo "</p>";
	echo "<iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmacsek.kozosseg%2F&tabs&width=230&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\"  height=\"300\" width=\"250\" style=\"border:none;overflow:hidden;\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>";
	echo "</div>";
}

$json = file_get_contents('./data.json');
$json_data = json_decode($json,true);
//print_r( $json_data);


switch ( (isset($_GET['page']) ? $_GET['page'] : '')) {
	case 'news':
        newsPage();
        break;
    case 'about':
        aboutPage();
        break;
    case 'progams':
        progamsPage();
        break;
    case 'gallery':
        galleryPage();
        break;	
    case 'contact':
		contactPage();
        break;				
    default:
        newsPage();
}
?>

<!--/p-->
  
  <div style="height:calc(50px + 5vw)">
      <img class="img-responsive"  style="display:inline-block;height:calc(50px + 5vw);float:right;" src="images/kerekito_logo_kicsi.png"></img>
      <img class="img-responsive"  style="display:inline-block;height:calc(50px + 5vw);float:right;" src="images/logo1.png"></img>
  </div>
</div>

<!-- FOOTER -->
	<div class="jumbotron footerClass" >
	<?php 
	echo "Utoljára frissítve: "  . $json_data["lastModified"];
	?>
	</div>
</div>
</body>
</html>