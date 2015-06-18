<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <form role="form" method="POST" action="index.php">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span></span>Register</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Father's Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputFathersName" id="InputFathersName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Mother's Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputMothersName" id="InputMothersName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Preferred Email (e.g preferredname@thevalencecorp.com</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Preferred Password - Password for your email</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        <input type="hidden" id="FamilyHash" name="FamilyHash" value='<?php echo $_GET['fhash']; ?>'>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
                <?php
                if(isset($_SESSION['notif']))
                {
                    if($_SESSION['notif'] == 'success')
                    {
                        echo "<div class='alert alert-success'>
                    <strong><span class='glyphicon glyphicon-ok'></span>Registration Successful</strong>
                </div>";
                    }
                    elseif($_SESSION['notif'] == 'fail')
                    {
                        echo "<div class='alert alert-remove'>
                    <strong><span class='glyphicon glyphicon-remove'></span>Registration Failed! Sorry.</strong>
                </div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body
</html>
</body>
