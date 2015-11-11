<?php

$memc = new Memcache;
$memc->addServer('localhost','11211');

if(empty($_POST['find'])) {
?>
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Simple Memcache Lookup</title>
    </head>
    <body>
      <form method="post">
        <p><b>Search</b>: <input type="text" size="20" name="find"></p>
        <input type="submit">
      </form>
      <hr/>
<?php

} else {
    
    echo "Loading data...\n";
    
    $film   = htmlspecialchars($_POST['find'], ENT_QUOTES, 'UTF-8');
    $mfilms = $memc->get($film);

    if ($mfilms) {

        printf("<p>Film data for %s loaded from memcache</p>", $mfilms['title']);

        foreach (array_keys($mfilms) as $key) {
            printf("<p><b>%s</b>: %s</p>", $key, $mfilms[$key]);
        }

    } else {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "eoc";



		$find = @$_POST['find'];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM events where category like '%$find%'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Name: " . $row["name"]. " - Category: " . $row["category"]. " - Venue: " . $row["location"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		$conn->close();

    }
}
?>
  </body>
</html>