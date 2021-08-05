<?php include "init.php"; 

$posts = DB::getInstance()->getAllFrom('post');
foreach($posts->results() as $post){ ?>
    <div class="main">
        <div class="post">
            <h5><?php echo $post->title; ?></h5>
            <p><?php echo $post->post_?></p>
            <a href="post.php?id=<?php echo $post->id?>"><button>Read More</button></a>
        </div>
    </div>
<?php
}

?>
</body>
</html>