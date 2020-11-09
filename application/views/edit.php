<html>
<head>
   
    </head>
<body>
    <?php 
    
    //$row=$result;
    foreach($result as $row){
    ?>
    <center>
    <h1>Edit Details</h1>
    <form method="post">
    <table>
        <tbody>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="name" value="<?php echo $row->name;?>" required></td>
            </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $row->email;?>"required></td>
            </tr>
        <tr>
            <td>Mobile No.</td>
            <td><input type="text" name="mobile" value="<?php echo $row->mobile;?>"required></td>
            </tr>
        <tr>
            <td>Gender</td>
            <td>Male<input type="radio" name="gender" value="male" <?php echo (($row->gender=="male")?'checked':'');?>></td>
            <td>Female<input type="radio" name="gender" value="female" <?php echo (($row->gender=="female")?'checked':'');?>></td>
            </tr>
        <tr><td>Known Languages</td>
            <?php $languages=explode(",",$row->languages);
        foreach($languages as $lang){
            ?>
            <td><?php echo (($lang=='English')?'<label>English</label><input type="checkbox" name="languages[]" value="English" class="checkboxes" checked>':'');?></td>
            <td><?php echo (($lang=='Hindi')?'<label>Hindi</label><input type="checkbox" name="languages[]" value="Hindi" class="checkboxes" checked>':'');?></td>
            <td><?php echo (($lang=='Kannada')?'<label>Kannada</label><input type="checkbox" name="languages[]" value="Kannada" class="checkboxes" checked>':'');}?></td>
            </tr>
            
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $row->address;?>"required></td>
            </tr>
        <tr>
            <td>City</td>
            <td><select name="city">
                <option value="Delhi" <?php echo (($row->city=="Delhi")?'selected="selected"':'');?>>Delhi</option>
                <option value="Mumbai" <?php echo (($row->city=="Mumbai")?'selected="selected"':'');?>>Mumbai</option>
                <option value="Banglore" <?php echo (($row->city=="Banglore")?'selected="selected"':'');?>>Banglore</option>
                <option value="Noida" <?php echo (($row->city=="Noida")?'selected="selected"':'');?>>Noida</option>
                <option value="Kolkata" <?php echo (($row->city=="Kolkata")?'selected="selected"':'');?>>Kolkata</option>
                </select></td>
            </tr>
        <tr>
            <td>DOB</td>
            <td><input type="text" name="DOB" value="<?php echo $row->DOB;}?>"required></td>
            </tr>
        <tr>
            <td>Status</td>
            <td><select name="status">
                <option value="Active" <?php echo (($row->status=="Active")?'selected="selected"':'');?>>Active</option>
                <option value="Inactive" <?php echo (($row->status=="Inactive")?'selected="selected"':'');?>>Inactive</option>
                </select></td>
            </tr>
        </tbody>
        </table>
    <input type="submit" name="submit">
    </form>
    </center>
  </body>
</html>