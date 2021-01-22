    <?php
    session_start();
    if(isset($_SESSION['id'])){
    	    $name = $_SESSION['id'];
    		$sex = $_SESSION['sex'];
            $total = $_SESSION['total'];
    }
    else{
    	 echo "<script>location.replace('index.html');</script>";
    	}
    ?>