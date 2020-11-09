<html>
<head>
    
    </head>
<body><center>
    <h1>Registration Page</h1>
    <form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="name"></td>
            </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
            </tr>
        <tr>
            <td>Mobile No.</td>
            <td><input type="text" name="mobile"></td>
            </tr>
        <tr>
            <td>Gender</td>
            <td>Male<input type="radio" name="gender" value="male"></td>
            <td>Female<input type="radio" name="gender" value="female"></td>
            </tr>
        <tr>
            <td>Known Languages</td>
            <td><label>English</label><input type="checkbox" name="languages[]" value="English" class="checkboxes"></td>
            <td><label>Hindi</label><input type="checkbox" name="languages[]" value="Hindi" class="checkboxes"></td>
            <td><label>Kannada</label><input type="checkbox" name="languages[]" value="Kannada" class="checkboxes"></td>
            </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
            </tr>
        <tr>
            <td>City</td>
            <td><select name="city">
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Banglore">Banglore</option>
                <option value="Noida">Noida</option>
                <option value="Kolkata">Kolkata</option>
                </select></td>
            </tr>
        <tr>
            <td>Profile Image</td>
            <td><input type="file" name="profile" required></td><?php
                            if (isset($img_error)) {
                                echo $img_error;
                            }
                            ?>
                           
            </tr>
        <tr>
            <td>DOB</td>
            <td><input type="text" name="DOB"></td>
            </tr>
        <tr>
            <td>Status</td>
            <td><select name="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                </select></td>
            </tr>
        </table>
    <input type="submit" name="submit">
        <a href="<?php echo base_url().'home'?>">Home</a>
    </form>
    </center>
  </body>
</html>