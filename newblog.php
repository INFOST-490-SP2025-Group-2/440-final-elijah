<?php
session_start();
include "header.php";
include "mysqli_connect.php";

if (!isset($_SESSION["userid"])) {
    header(
        "Location: http://vande433.soisweb.uwm.edu/infost440/FinalProject/login.php"
    );
    exit(); // Ensure that script stops execution after redirection
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = isset($_SESSION["userid"]) ? $_SESSION["userid"] : "";
    $blogtitle = isset($_POST["blogtitle"]) ? $_POST["blogtitle"] : "";
    $blogbody = isset($_POST["blogbody"]) ? $_POST["blogbody"] : "";

    // Insert the blog post into the database
    $query = "INSERT INTO blogposts (userid, blogtitle, blogbody, blogposttime) VALUES ('$userid', '$blogtitle', '$blogbody', NOW())";
    $result = mysqli_query($dbc, $query);

    if ($result && $userid != "" && $blogtitle != "" && $blogbody != "") {
        echo "Your blog has been posted.";
    } else {
        echo "An error occurred while posting your blog. Please try again later.";
        error_log("Error posting blog: " . mysqli_error($dbc)); // Log the error for debugging
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!--link to the styling-->
    <link rel="stylesheet" href="https://vande433.soisweb.uwm.edu/infost440/FinalProject/styles/css-pokemon-gameboy.css">
</head>
<body>
    <div class="framed primary">
        <h2>Create a new Blog Post</h2>
    </div>
    <br>
    <form action="newblog.php" method="POST">
        <!-- Hidden input field for userid -->
        <input type="hidden" name="userid" value="<?php echo isset($userid)
            ? $userid
            : ""; ?>">
        
        <label for="blogtitle">Create a title for your new blog post</label>
        <input type="text" id="blogtitle" class="framed no-hd" name="blogtitle" placeholder="Type your title here">
        
        <label for="blogbody">Create the content for your new blog post</label>
        <textarea id="blogbody" class="framed no-hd" name="blogbody" placeholder="Type your content here"></textarea>
        
        <div class="framed buttons">
            <button type="submit" name="submit">Create the Blog Post</button>
        </div>
    </form>
</body>
</html>

<?php include "footer.php"; ?>
