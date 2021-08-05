<?php include "init.php";
	if(Input::exists()){
		$validate = new Validate();
        $validation  = $validate->check($_POST,array(
			'title' => array(
				'required'  => true
			),
			'post' => array(
				'required'  => true
			)
			));
			if($validation->passed()){
				DB::getInstance()->insert('post',array(
					'title'  => Input::get('title'),
					'post_'  => Input::get('post')
				));
				echo "<p style='color:green;text-align:center'>"."Post Published Successfuly"."</p>";
			}else{
				foreach($validation->error() as $error){
					echo "<div class='center'>";
					echo "<span>".$error."<br>"."</span>";
					echo "</div>";
				}
			}
	
	}

?>
	<div class="artical">
		<div class="containar">
			<h4>Add Post</h4>
				<form action="" method="POST">
					<label>Title</label>
					<input type="text" name="title" placeholder="Enter Title">
					<label>Post</label>
					<input type="text" name="post" placeholder="Enter Post">
					<input type="submit" value="Post">
				</form>
		</div>
	</div>
</body>
</html>