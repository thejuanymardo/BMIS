<?php 
session_start();

 ?> 
<html>
    <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="modify_records.js"></script>
    
   

       
     
             
  <style>
      
      
input[type=text]{
    width: 25%;
    padding: 12px 20px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=texttable]{
    width: 100%;
    padding: 15px 1px 12px 1px;
    
    display: inline-block;
    border: 1px ;
    border-radius: 0px;
    box-sizing: border-box;
}


   
}
table {
    width:80%;
   
    
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 15px ;
    
}
.btn-group-lg>.btn, .btn-lg {
    padding: 10px 25px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
 </style>
 <script type="text/javascript">
 function exitna(){
	 var a = confirm("Are you sure you want to cancel?");
	 if(a===true){
		window.location = "cancel.php";
	 }
	 
 }
  
 
 </script>
   </head>
    <body>
        
    <header id="emengheader">
    <h1 align='left' id="emengheader">   <a  href="viewreport.php" ><button  class='btn btn-success'> back </button></a></h1>
    </header>
 
 <button id="buttonmoto" style="display:none;" class="btn btn-danger btn-lg danger" role="button" onclick="exitna()">Cancel</button>
    
    
 <div class="table-responsive">
  <form>
 <table class="table table-bordered" id="attendance_table">
   
      <div class="whole">
           
         <center>  
        
       
     <center>  <font face="Gordana" size="4"> PERSONNEL ATTENDANCE MONITORING <br>
         Attendance Monitoring Form 1A<br> For The <select name="quarter" id="quarter" required>
         
		 <option value="">Select</option><option value="1st">1st</option>
         <option value="2nd">2nd</option>
         <option value="3rd">3rd</option>
         <option value="4th">4th</option>
         </select> Quarter<br>
  <tr>
      <br>
      <br>
    <th><center>LGU (Province, City,Municipality, Barangay (1)</center> </th>
      <th><center>Name of Non-Compliant Personnel(2)</center></th>
     
      <th colspan="2"><center>Nature of Non-Compliance(3)</center></th> 
     <th><center>Station</center></th> 
         <th><center>Position/Designation</center></th> 
	 </font>
     
  </tr>
     
     <tr>
            <th> </th>
          <th> </th>
         <th><center>Habitual Absenteeism </center></th>
         <th><center>Habitual Tardiness</center> </th>
         <th> </th>
          <th> </th>
		   	
     </tr>
	 
	 <?php
	$connectsabmis = mysqli_connect("localhost", "root", "", "bmis_db");
	$sqlngbmis = "SELECT * FROM report_attendance WHERE attendance_id = 0";  

	$select = mysqli_query($connectsabmis, $sqlngbmis); 

	 while ($row = mysqli_fetch_array($select)) 
{
 ?>
 <tr id="row<?php echo $row['id'];?>">
   <td><?php echo $_SESSION['barangay'];?></td>
  <td><?php echo $row['name_personnel'];?></td>
  <td><?php echo $row['nature_absent'];?></td>
  <td><?php echo $row['nature_tard'];?></td>
  <td><?php echo $row['station'];?></td>
  <td><?php echo $row['position'];?></td>

  
  
 </tr>
 <?php
}
?>
	 
	 
	 
	 
	 
	 
  <tr bgcolor=white >
    
    <td><input type="texttable" id="barangaychairman1" readonly placeholder="" value="<?php echo $_SESSION['barangay'];?>"></td>
    <td><input type="texttable" id="barangaychairman2" placeholder=""></td>
    <td><input type="number" id="barangaychairman3" placeholder=""></td> 
    <td><input type="number" id="barangaychairman4"  placeholder=""></td> 
    <td><input type="texttable" id="barangaychairman5" placeholder=""></td> 
    <td><input type="texttable" id="barangaychairman6" placeholder=""></td>   
	<td><input type="button" value="Insert Row" onclick="insert_row();"></td>
</tr>
    
</table>
                   
</center>
                                           
    <br>
    <br>
    <center>
                      
      <b><label1 for="exampleInputName2" >Prepared By:</label1><br></b>
        <input class="form-control113" id="exampleInputName2" type="text" value="<?php echo $_SESSION['secretary']?>" readonly> <br>
                <label1 for="exampleInputName2">Kalihim</label1> <br><br>
             
                       
              
      <b><label1 for="exampleInputName2" >Submitted By:</label1><br></b>
        <input class="form-control113" id="exampleInputName2" type="text" value="<?php echo $_SESSION['captain']?>" readonly> <br>
                <label1 for="exampleInputName2">Punong Barangay</label1> <br><br>
             
                       
              
        <b><label1 for="exampleInputName2" >Noted By:</label1><br></b>
        <input class="form-control113" name="mayor" id="mayor" type="text" required> <br>
                <label1 for="exampleInputName2">Municipal Mayor</label1> <br>
        
        </center>
       
             
        
       <center> <p>
           <br>
        
            <p class="text-center">
                <button class="btn btn-primary btn-lg active" role="button" onclick="savemona()">Save</button></p> 
    </form>

</section>
        
 
    </body>

</html>