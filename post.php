<?php include "init.php"; 
$id = $_GET['id'];
//$id = isset($_GET['id']) ? $id : 0;
$posts = DB::getInstance()->get('post',['id','=',$id]);
foreach($posts->results() as $post){ ?>
    <div class="main">
        <div class="post">
            <h5><?php echo $post->title; ?></h5>
            <p><?php echo $post->post_?></p>
        </div>
    </div>
<?php
}

?>
</body>
</html>