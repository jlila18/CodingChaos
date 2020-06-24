<!DOCTYPE html>
<html>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="path/to/multiselect.css" media="screen" rel="stylesheet" type="text/css">
<script src="path/to/jquery.multi-select.js" type="text/javascript"></script>


    <h1> Services </h1>
<div style="float:right;"> <a href="/admin/index.php"  > <img style="height: 50px; width: 50px;  "  src='https://storage.needpix.com/rsynced_images/black-2635377_1280.png' ></a></div>

<table class="table table-striped">

    <thead>
    <tr>
        <th>Service Category</th>
        <th colspan="5"> </th>

    </tr>
    </thead>

    <tbody>
 <tr class="accordion-toggle" data-toggle="collapse" data-target="#1">

        <td> Oral Health </td>
        <td>  </td>
        <td colspan="5"> </td>
    </tr>
    <tr>
        <td class="accordion-body collapse" id="1">
            <table class="table">
                <thead>
                <th>ID | Service name</th>
                <th>Description</th>
                <th>Price</th>
               
                </thead>
                <tbody>

                <?php
                  include_once('config.php');
                  
                  $query = mysqli_query($conn, "select * from services where service_type like 'oral_health' ;");
                            if(mysqli_num_rows($query)>0){

                            while($row=mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo "{$row['service_id']} | {$row['s_name']}";?> </td>
                                
                

                    <td><?php echo "{$row['s-description']}";?> </td>

                    <td><?php echo "{$row['s_price']}";?> </td>

                   
                </tr><?php } }?>

                </tbody>
            </table>
        </td>
    </tr>
    <tr class="accordion-toggle" data-toggle="collapse" data-target="#2">

        <td> Dental Services </td>
        <td>  </td>
        <td colspan="5"> </td>
    </tr>
    <tr>
        <td class="accordion-body collapse" id="2">
            <table class="table">
                <thead>
                <th>ID | Service name</th>
                <th>Description</th>
                <th>Price</th>
               
                </thead>
                <tbody>

                <?php
                  include_once('config.php');
                  
                  $query = mysqli_query($conn, "select * from services where service_type like 'dental_services' ;");
                            if(mysqli_num_rows($query)>0){

                            while($row=mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo "{$row['service_id']} | {$row['s_name']}";?> </td>
                                
               

                    <td><?php echo "{$row['s-description']}";?> </td>

                    <td><?php echo "{$row['s_price']}";?> </td>

                   
                </tr><?php } }?>

                </tbody>
            </table>
        </td>
    </tr>

        <tr class="accordion-toggle" data-toggle="collapse" data-target="#3">

        <td> Cosmetic Services </td>
        <td>  </td>
        <td colspan="5"> </td>
    </tr>
    <tr>
        <td class="accordion-body collapse" id="3">
            <table class="table">
                <thead>
                <th>ID | Service name</th>
                <th>Description</th>
                <th>Price</th>
               
                </thead>
                <tbody>

                <?php
                  include_once('config.php');
                  
                  $query = mysqli_query($conn, "select * from services where service_type like 'cosmetic_dentistry' ;");
                            if(mysqli_num_rows($query)>0){

                            while($row=mysqli_fetch_assoc($query)){?>
                <tr>
                    <td><?php echo "{$row['service_id']} | {$row['s_name']}";?> </td>
                                
                     

                    <td><?php echo "{$row['s-description']}";?> </td>

                    <td><?php echo "{$row['s_price']}";?> </td>

                   
                </tr><?php } }?>

                </tbody>
            </table>
        </td>
    </tr>


     
    </tbody>
</table>
       
</html>