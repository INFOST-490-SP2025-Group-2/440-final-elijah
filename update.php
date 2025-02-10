<?php
session_start();
include "header.php";
include "mysqli_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Blog Post</title>
    <link rel="stylesheet" href="https://vande433.soisweb.uwm.edu/infost440/FinalProject/styles/css-pokemon-gameboy.css">
</head>
<body>
<div class="framed no-hd">
    <h2>Need to make an update to your Blog?</h2>
</div>
<br>

<?php // Retrieve blog post details if blogid is provided
if (isset($_GET["blogid"])) {
    $blogid = $_GET["blogid"];
    $query = "SELECT * FROM blogposts WHERE blogid = '$blogid'";
    $result = mysqli_query($dbc, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $blogtitle = $row["blogtitle"];
        $blogbody = $row["blogbody"];
    } else {
        echo "Blog post not found.";
        exit(); // Stop script execution if blog post is not found
    }
} else {
    echo "Blog ID not provided.";
    exit(); // Stop script execution if blog ID is not provided
} ?>

<form action="update.php" method="POST">
    <input type="hidden" name="blogid" value="<?php echo $blogid; ?>"/>
    
    <label for="blogtitle">Blog Title:</label>
    <input type="text" id="blogtitle" class="framed primary" name="blogtitle" value="<?php echo $blogtitle; ?>">
    
    <label for="blogbody">Blog Body:</label>
    <textarea id="blogbody" class="framed primary" name="blogbody"><?php echo $blogbody; ?></textarea>
    
    <div class="framed buttons">
        <button type="submit" name="submit">Submit My Edit</button>
    </div>
</form>

<?php // Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blogid = $_POST["blogid"];
    $blogtitle = $_POST["blogtitle"];
    $blogbody = $_POST["blogbody"];

    if (empty($blogtitle) || empty($blogbody)) {
        echo "Please enter both a title and a body for your blog post.";
    } else {
        // Update blog post in the database
        $query = "UPDATE blogposts SET blogtitle = '$blogtitle', blogbody = '$blogbody' WHERE blogid = '$blogid'";
        $result = mysqli_query($dbc, $query);

        if ($result) {
            echo "Your blog has been successfully updated.";
        } else {
            echo "An error occurred while updating your blog post.";
            // Log detailed error for debugging
            error_log("Error updating blog post: " . mysqli_error($dbc));
        }
    }
} ?>

</body>
</html>

<?php include "footer.php"; ?>
