<?php
include("DBconnect.php");
include ('header.php');
?>

<section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
    <div class="container">


        <div class="intro" style="margin-top: 0;margin-bottom: 0;">
            <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: bold;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 30px;text-align: center;margin-bottom: -81px;"><strong>Support</strong></h2>
        </div>
    </div>
</section><button class="add">Be a <Strong>Donor</Strong>, Save life!</button>
<div class="col-md-12 search-table-col" style="margin-bottom: 60px;margin-top: 0px;">
    <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing area (E.g. Mirpur/Dhanmondi)" /></div><span class="counter pull-right"></span>
    <div class="table-responsive table-bordered table table-hover table-bordered results">
        <table class="table table-bordered table-hover">
            <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd" class="col-lg-1" style="background: var(--green);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Donor Name</th>
                    <th id="trs-hd" class="col-lg-2" style="background: var(--green);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Area</th>
                    <th id="trs-hd" class="col-lg-3" style="background: var(--green);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Blood Group</th>
                    <th id="trs-hd" class="col-lg-2" style="background: var(--green);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
		$query = "Select name, phone, blood, address from users WHERE sup_phone != 'null' ";
		$rslt = mysqli_query($conn, $query);
			
		if(mysqli_num_rows($rslt) > 0){
				
		while($row = mysqli_fetch_array($rslt)){
			
	    ?>
                <tr class="warning no-result">
                    <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No donor found!</td>
                </tr>
                <tr>
                    <td><?php echo $row['name'] ?> </td>
                    <td><?php echo $row['address'] ?> </td>
                    <td><?php echo $row['blood'] ?> </td>
                    <td><?php echo $row['phone'] ?> </td>
                </tr>
                <?php
			}
		}
	?>

            </tbody>
        </table>
    </div>
</div>



<div class="col-md-12 search-table-col" style="margin-bottom: 60px;margin-top: 0px;">


    <span class="counter pull-right"></span>
    <div class="table-responsive table-bordered table table-hover table-bordered results">
        <table class="table table-bordered table-hover">
            <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd" class="col-lg-1" style="background: var(--purple);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Hospital Name</th>
                    <th id="trs-hd" class="col-lg-2" style="background: var(--yellow);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545" >Available ICU</th>
                    <th id="trs-hd" class="col-lg-3" style="background: var(--pink);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Call Ambulance</th>
                    <th id="trs-hd" class="col-lg-3" style="background: var(--blue);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold; background-color: #dc3545">Area</th>

                </tr>
            </thead>
            <tbody>
                <?php
		$query = "Select * from recommandation ";
		$rslt = mysqli_query($conn, $query);
			
		if(mysqli_num_rows($rslt) > 0){
				
		while($row = mysqli_fetch_array($rslt)){
			
	    ?>
                <tr>
                    <td><?php echo $row['h_name'] ?> </td>
                    <td><?php echo $row['icu'] ?> </td>
                    <td><?php echo $row['ambulance'] ?> </td>
                    <td><?php echo $row['h_area'] ?> </td>
                </tr>
                <?php
			}
		}
	?>
            </tbody>
        </table>
    </div>
</div>


<?php
include ('footer.php');
?>
