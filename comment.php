<?php
session_start();
include "header.php";
include "mysqli_connect.php";

// Fetching and sanitizing inputs
$blogid = isset($_GET["blogid"])
    ? mysqli_real_escape_string($dbc, trim($_GET["blogid"]))
    : "";
$userid = isset($_SESSION["userid"]) ? $_SESSION["userid"] : "";
$comment = isset($_POST["comment"]) ? trim($_POST["comment"]) : "";

// Fetch blog title
$sql = "SELECT blogtitle FROM blogposts where blogid = '$blogid'";
$result = mysqli_query($dbc, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$blogtitle = isset($row["blogtitle"]) ? $row["blogtitle"] : "";
?>

<div class="framed no-hd">
    <h2>Comments on <?php echo $blogtitle; ?></h2>
</div>

<?php if (isset($_SESSION["userid"])): ?>
    <form action="comment.php?blogid=<?php echo $blogid; ?>" method="POST" class="framed no hd">
        <!-- Hidden input fields for blogid and userid -->
        <input type="hidden" name="blogid" value="<?php echo $blogid; ?>">
        <input type="hidden" name="userid" value="<?php echo $userid; ?>">
        
        <label for="comment">What would you like to comment on this blog?</label>
        <textarea id="comment" class="framed primary" name="comment" placeholder="Type your comment here"><?php echo $comment; ?></textarea>
        
        <div class="framed buttons">
            <button type="submit" name="submit">Submit My Comment</button>
        </div>
    </form>
<?php else: ?>
    <p>You cannot leave a comment without being logged in.</p>
<?php endif; ?>

<?php
// Processing form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Insert the comment into the database
    $query =
        "INSERT INTO comments (userid, blogid, commentbody, commenttime) VALUES (?, ?, ?, NOW())";
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "iis", $userid, $blogid, $comment);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<p><strong>Your comment has been posted successfully.</strong></p>";
    } else {
        echo "<p>An error occurred while posting your comment. Please try again later.</p>";
        error_log("Error posting comment: " . mysqli_error($dbc)); // Log the error for debugging
    }
}
?>
<div class="framed no hd">
    <h1>Comments from other users</h1>
    <?php
    // Fetch and display comments for the blog post
    $sql =
        "SELECT `comments`.`commentbody`, `comments`.`commenttime`\n" .
        "FROM `comments` \n" .
        "WHERE `comments`.`blogid` = '$blogid'";
    $result = mysqli_query($dbc, $sql);

    // Display comments
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<div class='framed primary'>";
        echo "<p>{$row["commentbody"]}</p>";
        echo "<p>Commented on: {$row["commenttime"]}</p>";
        echo "</div>";
    }
    ?>
</div>
<?php
include "footer.php";
?>
