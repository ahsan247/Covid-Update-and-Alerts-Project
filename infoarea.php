<?php
include("DBconnect.php");
include('header.php');
?>


    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
        <div class="container">
            <div class="intro" style="margin-top: 0;margin-bottom: 0;">
                <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: 785;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 60px;">Red Zones by Areas</h2>
            </div>
        </div>
    </section><div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
    <!--  <th>#</th>-->
     <!-- <th class="col-md-1col-xs-1"> Location name(city)</th>
      <th class="col-md-4col-xs-4">No.of Covid patient</th>
	  <th class="col-md-5col-xs-5">No.of Recovered patient </th>
      <th class="col-md-5col-xs-5">District</th>-->
	    <th id="trs-hd" class="col-md-1col-xs-1" style="background: var(--red);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold;"> Location name(city)</th>
        <th id="trs-hd" class="col-md-4col-xs-4" style="background: var(--red);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold;">No. of Covid patient</th>
        <th id="trs-hd" class="col-md-4col-xs-4" style="background: var(--red);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold;">No. of Recovered patient</th>
        <th id="trs-hd" class="col-md-1col-xs-1" style="background: var(--red);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold;">District</th>
	  <th id="trs-hd" class="col-md-1col-xs-1" style="background: var(--red);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold;">Update date</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead> 
 
  <?php
			$query="select location,no_covid,district,no_recovery,date from info_red_area";
			$result= mysqli_query($conn,$query);
			 
			
				 
			while($rows=mysqli_fetch_assoc($result)){
			
			?>
  <tbody>
    <tr>
      <td><?php echo $rows['location'];?> </td>
	  <td><?php echo $rows['no_covid'];?> </td>
	   <td><?php echo $rows['no_recovery'];?> </td>
	  <td><?php echo $rows['district'];?> </td>
	  <td><?php echo $rows['date'];?> </td>
      
    </tr>
   
  </tbody>
  <?php
			
			}
			?>
  
</table>
    <div class="card m-auto" style="max-width:850px"></div>
    <div class="row">
        <div class="col-md-10 offset-md-10"></div><button class="add" onclick="location.href='info.php'">Return</button></div>

<?php
include('footer.php');
?>