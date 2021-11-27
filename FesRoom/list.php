<script>
function action_imageView(url) {
	if(url) {
    //alert(url);
		var imgW = document.getElementById('img1').naturalWidth;

		var imgH = document.getElementById('img1').naturalHeight;

		var imgWindow = window.open("", "_image_view_", "width="+imgW+", height="+imgH);

		imgWindow.document.write("<img src='"+url+"'>");

	}
}
</script>
<!-- 출처: https://itrooms.tistory.com/353 [맛집 여행 캠핑 일상 생활] -->
<?php

// include('./db_conn.php');

$sql="select * from img_2";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);


for($i=0;$i<$num;$i++){
    $re=mysqli_fetch_array($result);
    echo "<p>".$re['fname'].$re['fsize'].$re['fpath']."</p>";
    ?>
    <img src="<?php echo $re['fpath']?>" onclick="action_imageView('<?php echo $re['fpath']?>')" id="img1" width="50px" height="50px">

    
    <?php
   }
?>