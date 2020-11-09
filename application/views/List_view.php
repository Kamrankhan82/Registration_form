<html>
<head>
    
    </head>
<body>
    
    <center>
    <h1>User Data</h1>
    <form>
    <table border="black">
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No.</th>
        <th>Gender</th>
        <th>Languages</th>
        <th>Address</th>
        <th>City</th>
        <th>Profile Image</th>
        <th>DOB</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
</thead>
        <tbody>
        <?php foreach ($result as $result_data) {
                            ?><tr>
            <td><a href="<?php echo base_url().'view/'.$result_data->id;?>"><?php echo $result_data->name;?></a></td>
            <td><?php echo $result_data->email;?></td>
            <td><?php echo $result_data->mobile;?></td>
            <td><?php echo $result_data->gender;?></td>
            <td><?php echo $result_data->languages;?></td>
            <td><?php echo $result_data->address;?></td>
            <td><?php echo $result_data->city;?></td>
            <td><img src="<?php echo base_url().'uploads/'.$result_data->profile;?>" width="100"></td>
            <td><?php echo $result_data->DOB;?></td>
            <td><?php echo $result_data->status;?></td>
            <td><a href="<?php echo base_url().'edit/'.$result_data->id;?>">Edit</a></td>
            <td><a href="<?php echo base_url().'delete/'.$result_data->id;?>">Delete</a></td><?php }?>
            </tr>   
        
        </tbody>
        </table>
        
        <a href="<?php echo base_url().'registration'?>">Add Data</a>
    </form>
    </center>
    </body>
</html>