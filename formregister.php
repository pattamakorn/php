<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>เพิ่มสมาชิก</h3>

<div>
  <form action="register.php" method="post">
    <label>Username</label>
    <input type="text" id="username" name="username" placeholder="Enter Username...">

    <label>Password</label>
    <input type="text" id="password" name="password" placeholder="Enter Password...">

    <label>First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your First name...">

    <label>Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your Last Name...">

    <label>Role</label>
    <select name="role" id="role"> 
        <option value="Select" selected>Select</option> 
        <option value="Teacher">Teacher </option> 
        <option value="Student">Student</option> 
        <option value="Parent">Parent</option> 
    </select> 
    
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
