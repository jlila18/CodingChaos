<?php
session_start();
$s=false; //if it is submitted
$err=false; //error check
$out=""; //echo variable
if(isset($_POST['submit'])) {
    $s=true; $msg=array(); $clean=array();
    if(isset($_POST['name'])){
        $clean['name']=$_POST['name'];
    } else { $err=true;
        $msg[0]= "<sub style='color:#ff0000'>Please enter the name of the Service you want to add </sub><br />";
    }
    if(isset($_POST['service']) ){
        $clean['service']=$_POST['service'];
    } else { $err=true;
        $msg[12]="<sub style='color:red'>Please specify the address</sub><br />";
    }
    if(isset($_POST['price']) ){
        $clean['price']=$_POST['price'];
    } else { $err=true;
        $msg[2]="<sub style='color:red'>Enter the price</sub><br />";
    }
    if(isset($_POST['desr'])){
        $clean['desr']=$_POST['desr'];
    } else { $err=true;
        $msg[1]="<sub style='color:red'>Specify description </sub><br />";
    }


}

if(!$err&&$s) {
    echo "<h1>Service Successfully added</h1>";


    include_once('config.php');
   
    $sql="INSERT INTO `services` ( `s_name`, `s-description`, `s_price`, 
									`service_type`) 
	VALUES ('{$clean['name']}','{$clean['desr']}','{$clean['price']}', '{$clean['service']}');";
    mysqli_query($conn,$sql);
   

}

?>

                <?php
                  include_once('config.php');
                  
                  $query = mysqli_query($conn, "select * from services where service_type like 'cosmetic_services ;");
                            if(mysqli_num_rows($query)>0){

                            while($row=mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo "{$row['service_id']} | {$row['s_name']}";?> </td>
                                
                        <td><?php echo "{$row['s_name']}";?> </td>

                    <td><?php echo "{$row['s-description']}";?> </td>

                    <td><?php echo "{$row['s_price']}";?> </td>

                   
                </tr><?php } }?>

                </tbody>
            </table>
        </td>
    </tr>


     
    </tbody>
</table>


<button onclick="myFunction()">Add new Service</button>

<div id="myDIV">

    <h4>Enter the new Service's information</h4>
    <p class="healthc">
        <?php
        include_once('config.php');
        
        $result = mysqli_query($conn, "select * from services  ;"); ?>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	
          <select name="service" id="service"> <?php
            if(mysqli_num_rows($result)>0){

                while($row=mysqli_fetch_assoc($result)){


                    ?> <option value= "<?= $row['service_type'] ?>" > <?php  echo " {$row['service_type']} "; ?> </option>

                <?php       }  } 
    

    if(isset($msg[12])) echo $msg[12];
    ?>

    
        <p class="healthc"> Service name: <input type="text" name="name" value="<?=isset($_POST['name'])?$_POST['name']:""?>"/></p>
        <?php if(isset($msg[0])) echo $msg[0];?>
        
        <p class="healthc">Description: <input type="text" name="desr" value="<?=isset($_POST['desr'])?$_POST['desr']:""?>"/><br />
            <?php if(isset($msg[1])) echo $msg[1];?></p>
        <p class="healthc">Price: <input type="text" name="price" value="<?=isset($_POST['price'])?$_POST['price']:""?>"/><br />
            <?=isset($msg[2])? $msg[2]:"";?></p>
        


      
        <input id="reg" type="submit" name="submit" value="+" />
    </form>
        <body>









</div>



<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    $('#zone').multiSelect();

</script>


 </html>