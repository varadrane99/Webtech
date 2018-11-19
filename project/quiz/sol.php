<html>
<head>
	<title></title>
</head>
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="sol.css">
<body style="background-image: url('pic.jpg')">
	<?php
if(isset($_POST["Submit"]))
	{
		if(isset($_POST["q1"]) && isset($_POST["q2"]) && isset($_POST["q3"]) && isset($_POST["q4"]) && isset($_POST["q5"])) {
		$maximum_likelihood = array("Comedy" => 0, "Sci-fi" => 0, "Horror" => 0, "Crime" => 0, "Fantasy" => 0);
		$maximum_likelihood[$_POST["q1"]] += 1;
		$maximum_likelihood[$_POST["q2"]] += 1;
		$maximum_likelihood[$_POST["q3"]] += 1;
		$maximum_likelihood[$_POST["q4"]] += 1;
		$maximum_likelihood[$_POST["q5"]] += 1;
		arsort($maximum_likelihood);
		echo "The recommended genres in the order of likeliness for you are: <br><br>";
		foreach($maximum_likelihood as $genre => $count)
		{
			if ($genre == "Comedy") {
				echo "<a href =\"friends.html\">Comedy</a> <br><br> ";
			}
			if ($genre == "Horror") {
				echo "<a href =\"Horror.html\">Horror</a> <br><br> ";
			}
			if($genre == "Sci-fi") {
				echo "<a href =\"daredevil.html\">Action</a> <br><br>";
			}
			if ($genre == "Crime") {
				echo "<a href =\"breakingbad.html\">Crime</a> <br><br>";
			}
			if($genre == "Fantasy") {
				echo "<a href =\"GameOfThrones.html\" >Fantasy</a> <br><br>";
			}
		}
	}
	else
		echo "Please select One Option From All the Questions";
}
	?>

</body>
</html>
