<html>
<head>
    <style type="text/css">
        td{
            font-size: 30;
        }
    </style>
    </head>
<body><center>
    <h1>User Data</h1>
    <table><?php
        foreach($result as $result_data){
        ?>
            <tr><td>Name</td>
            <td><?php echo $result_data->name?></td></tr>
            <tr><td>Email</td>
            <td><?php echo $result_data->email;?></td></tr>
            <tr><td>Mobile No.</td>
            <td><?php echo $result_data->mobile;?></td></tr>
            <tr><td>Gender</td>
            <td><?php echo $result_data->gender;?></td></tr>
            <tr><td>Languages</td>
            <td><?php echo $result_data->languages;?></td></tr>
            <tr><td>Address</td>
            <td><?php echo $result_data->address;?></td></tr>
            <tr><td>City</td>
            <td><?php echo $result_data->city;?></td></tr>
            <tr><td>Profile Image   </td>
            <td><img src="<?php echo base_url().'uploads/'.$result_data->profile;?>" width="200"></td></tr>
            <tr><td>D.O.B</td>
            <td><?php echo $result_data->DOB;?></td></tr>
            <tr><td>Status</td>
            <td><?php echo $result_data->status;}?></td></tr>
        
    </table></center>
    </body>
</html>