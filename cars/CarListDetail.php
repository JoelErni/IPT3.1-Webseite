<?php
	$servername = "localhost:3306";
	$username = "joel.erni";
	$password = "";
	$dbname = "FH5";
	$type = htmlspecialchars($_GET["type"]);
    $rank = htmlspecialchars($_GET["rank"]);

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$result = mysqli_query($conn, "SELECT * FROM car WHERE rank=$rank AND fk_racetypeid = $type");
	$resultb = mysqli_query($conn, "SELECT * FROM racetype WHERE racetypeid = $type");
	
	while($rowb = mysqli_fetch_assoc($resultb))
	{
		$gt = $rowb["bez"];
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cross Country Racing</title>
        <link rel="stylesheet" href="/styles.css">
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/png" href="/images/icon.png">
    </head>
    <body>
    <div id="mobile-nav">
    <img src="/images/back.png" class="mobilemenu" id="btnoff" alt="Start">
            <a href="/index.html" class="LogoClick center mobilea">Home</a>
            <a href="/news.html" class="LogoClick center mobilea">News</a>
            <a href="/cars.html" class="LogoClick center mobilea">Cars</a>
            <a href="/map.html" class="LogoClick center mobilea">Map</a>
            <a href="/tuning.html" class="LogoClick center mobilea">Tuning</a>
            <a href="/tips.html" class="LogoClick center mobilea">Tips</a>
            <a href="/aboutme.html" class="LogoClick center mobilea">About Me</a>
        </div>
        <header>
            <div class="colorramp"></div>
                <div class="header-navigation">
                    <div>
                        <img src="/images/menu-icon.png" class="mobilemenu" id="btnon" alt="Start">
                    </div>
                    <nav class="center">
                        <a href="/index.html" class="LogoClick">
                            <img src="/images/Logo2.png" class="Logo center" alt="Start">
                        </a>
                        <a href="/news.html">News</a>
                        <div class="dropdown">
                            <a class="dropbtn" href="/cars.html">Cars</a>
                            <div class="dropdown-content">
                                <a href="/cars/roadracing.html">Road Racing</a>
                                <a href="/cars/dirtracing.html">Dirt Racing</a>
                                <a href="/cars/crosscountryracing.html">Cross Country Racing</a>
                                <a href="/cars/prstunts.html">PR Stunts</a>
                                <a href="/cars/streetracing.html">Street Racing</a>
                            </div>
                        </div>
                        <a href="/map.html">Map</a>
                        <a href="/tuning.html">Tuning</a>
                        <a href="/tips.html">Tips</a>
                        <a href="/aboutme.html">About-Me</a>
                    </nav>
                </div>
            <div class="colorramp"></div>
        </header>
        <article>
            <h1 class="center" style="font-size: 4em;">Number <?php while($row = mysqli_fetch_assoc($result)) {echo $row["rank"]; ?>. in <?php echo $gt;?></h1>
            <div class="paragraph-trenner"></div>
                <div>
                        <h1 class="center" style="line-height: 1; margin-bottom: 40px;"><?php echo $row["bez"];?></h1>
                        <div class="flex-container">
                            <div class="flex-item1" style="margin: auto 1vw;">
                                <img class="center" alt="<?php echo $row["bez"];?>" src="/images/cars/<?php echo $gt?>/<?php echo $row["rank"];?>.png" width="500em">
                            </div>
                            <div class="flex-item2">
                                <div><h2 style="margin-bottom: -0.25vw; font-size: 30px;" class="center"><?php echo $row["price"];?></h2></div>
                                <div>
                                    <table width="100%">
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Speed<br><?php echo $row["speed"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["speed"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Handling<br><?php echo $row["handling"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["handling"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Acceleration<br><?php echo $row["acceleration"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["acceleration"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Launch<br><?php echo $row["launch"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["launch"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Braking<br><?php echo $row["braking"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["braking"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                        <th>
                                            <div style="margin:0.5vw">
                                                <h3 class="center" style="margin: 0; line-height:1.5em;">Offroad<br><?php echo $row["offroad"];?></h3>
                                                <div class="center" style="width: 10vw; height: 0.5vw; background-image: linear-gradient(to right, #FF09E0, #FF7D00 <?php echo $row["offroad"]*10; ?>%,rgba(0, 0, 0, 0.5) 0%);"></div>        
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            </div>
                        </div>
                        <div>
                            <p style="font-size: 1.5em"><?php echo $row["besch"];}?></p>
                        </div>
                    </div>
            <div class="paragraph-trenner"></div>
            <a href="/cars/CarList.php/?type=<?php echo $type?>" class="center default link"><h3>&#129080;Go Back</h3></a>

        </article>
        <footer>
            <div class="colorramp"></div>
            <div class="flex-container footerconent">
                <div class="footerflex">
                    <h3>Contact me</h3>
                    <ul>
                        <li><a href="joel_erni1@sluz.ch">send E-Mail</a></li>
                        <li><a href="https://discord.gg/4ctjPXzg">on Discord</a></li>
                    </ul>
                </div>
                <div class="footerflex">
                    <h3>Social Media</h3>
                    <ul>
                        <li><a href="https://www.youtube.com/c/RickastleyCoUkOfficial" target="_blank">Youtube</a></li>
                        <li><a href="https://www.instagram.com/jeppylino/" target="_blank">Instagram</a></li>
                        <li><a href="https://discord.gg/4ctjPXzg" target="_blank">Discord</a></li>
                        <li><a href="https://www.reddit.com/user/Jeppy_" target="_blank">Reddit</a></li>
                        <li><a href="https://www.linkedin.com/in/joel-erni-745116239/" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="footerflex">
                    <h3>About</h3>
                    <ul>
                        <li><a href="/aboutme.html">About me</a></li>
                        <li><a href="https://c.tenor.com/_4YgA77ExHEAAAAC/rick-roll.gif" target="_blank">AGB</a></li>
                        <li><a href="/disclaimer.html" target="_blank">Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
    <script src="/script.js"></script>
</html>
