<?php require_once("includes/ses.php"); ?>
<?php require_once("includes/header.php"); ?>
<?php require_once("includes/nav.php"); ?>
<?php require("includes/news.php"); ?>
<!-- end of side column -->

        <div id="templatemo_main_column">

	<a href="home.php"><div id="disp_name">
	    <?php echo $val;?>
	</div></a>
            <div class="main_column_box">
            
            <div class="cleaner_h80"></div>
            
                <h3 id="topic1"><span></span>Obituaries</h3>

              <img id="image1" class="image_wrapper fl_image" src="images/nepal.jpg" alt="image" style="height: 50%;width: 50%;"/>
              <br/>
			  <p class="em_text" id="desc1">This Portal is mainly for paying homage to the people passed away durig disasters.<br></p>

                <div class="cleaner_h80"></div>
		<?php
			$result=mysqli_query($connection,"select * from lost_found");
			$i=0;
			while($row=mysqli_fetch_array($result)){
				echo "<p style='font-size:17px'><a href='#' onmouseover='lf(\"{$row['gender']}\",\"{$row['disaster']}\",{$i},{$row['contact']});' style=\"text-decoration:none;\"><b>{$row['name']} was lost in {$row['area']}!</b></a><br/></p>";
				echo "<p id='{$i}' style='font-size:17px'></p><br>";
				$i=$i+1;
			}
		 ?>
		                <script>
                    function lf(gen,dis,pid,c) {
			var genp;
			if (gen=='M') {
			    genp="He";
			}
			else{
			    genp="She";
			}
                        document.getElementById(pid).innerHTML=genp+" was lost due to a "+dis+".<br/>To reply to this post contact the no given below<br/>"+c;
			for(var j=0;j<10;j++){
				if (j!=pid) {
					document.getElementById(j).innerHTML="";
				}
			}
                    }
                 </script>
				 
                <a href="add_ob.php"><h4>ADD A REQUEST</h4></a> 
            </div>
        </div>

        <div class="cleaner"></div>
        <div id="top"></div>
        <div id="bottom"></div>
    </div>

<?php require("includes/footer.php"); ?>