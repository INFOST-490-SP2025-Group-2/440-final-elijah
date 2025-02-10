<?php
session_start();
include "header.php";
include "mysqli_connect.php";
?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--link to the styling-->
<link rel="stylesheet" href="https://vande433.soisweb.uwm.edu/infost440/FinalProject/styles/css-pokemon-gameboy.css">
</head>
<body>
<div class="wrapper">
<?php if (isset($_GET["delete_id"])) {
    $delete_id = mysqli_real_escape_string($dbc, trim($_GET["delete_id"]));
    $dq = "DELETE FROM blogposts where blogid = '$delete_id'";
    $dodq = mysqli_query($dbc, $dq);
    if ($dodq) {
        echo "</br><div class='framed danger'><strong><i>Blogpost $delete_id has been deleted</strong></i></div>";
    } else {
        $delete_id = "";
    }
} ?>
<div class="framed primary">
<h2> Generic "Town Hall" Website</h2>
</div>
<br>
<!--creating the Blog registry-->
<?php
$display = 5;

// Determine how many pages there are...
if (isset($_GET["p"]) && is_numeric($_GET["p"])) {
    $pages = $_GET["p"];
} else {
    // Count the number of records:
    $q = "SELECT COUNT(blogid) FROM blogposts";
    $result = mysqli_query($dbc, $q);
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    $records = $row[0];
    // Calculate the number of pages...
    if ($records > $display) {
        $pages = ceil($records / $display);
    } else {
        $pages = 1;
    }
} // end of making pages
// Determine where in the database to start returning results...
if (isset($_GET["s"]) && is_numeric($_GET["s"])) {
    $start = $_GET["s"];
} else {
    $start = 0;
}
//determining how to sort the records
$sort = isset($_GET["sort"]) ? $_GET["sort"] : "bi";
switch ($sort) {
    case "bt":
        $order_by = "blogtitle ASC";
        break;
    case "ui":
        $order_by = "userid ASC";
        break;
    case "bpt":
        $order_by = "blogposttime ASC";
        break;
    default:
        $order_by = "blogid ASC";
        $sort = "bi";
        break;
}
//the query
$query = "SELECT * FROM blogposts ORDER BY $order_by LIMIT $start, $display";
echo '
<div class="framed buttons">
Sort blogs by <br /><br />
<button><a href="index.php?sort=bt">|Blog Title| </a></button>
<button><a href="index.php?sort=bpt">|Recent| </a></button>
<button><a href="index.php?sort=ui">|User ID| </a></button>
<button><a href="index.php?sort=bi">|Blog ID| </a></button>
</div>
';
//get the records and print them
$result = mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '<div class="framed primary">';
    echo $row["blogtitle"] .
        '<div class="framed no-hd">' .
        $row["blogbody"] .
        "</div>";
    echo '<p style="margin-top: 0em; margin-bottom: 0em; text-align:center">
	<a href="comment.php?blogid=' .
        $row["blogid"] .
        '">Comment </a>|';
    if (isset($_SESSION["userid"]) && $_SESSION["userid"] == 5) {
        echo "<a href='index.php?delete_id=" .
            $row["blogid"] .
            "'> Delete this Blogpost </a>|";
        echo "<a href='update.php?blogid=" .
            $row["blogid"] .
            "'> Edit this Blog</a>";
    } else {
        echo "";
    }
    echo "</div>";
}
// Make the links to other pages, if necessary.
if ($pages > 1) {
    echo "<br /><p>";
    $current_page = $start / $display + 1;

    //previous button
    if ($current_page != 1) {
        echo '<a href="index.php?s=' .
            ($start - $display) .
            "&p=" .
            $pages .
            "&sort=" .
            $sort .
            '">Previous</a> ';
    }

    // Make all the numbered pages:
    for ($i = 1; $i <= $pages; $i++) {
        if ($i != $current_page) {
            echo '<a href="index.php?s=' .
                $display * ($i - 1) .
                "&p=" .
                $pages .
                "&sort=" .
                $sort .
                '">' .
                $i .
                "</a> ";
        } else {
            echo $i . " ";
        }
    } // End of FOR loop.
    // next button
    if ($current_page != $pages) {
        echo '<a href="index.php?s=' .
            ($start + $display) .
            "&p=" .
            $pages .
            '">Next</a>';
    }
    echo "</p>";
}
?>
</div>
</body>
<?php include "footer.php"; ?>

