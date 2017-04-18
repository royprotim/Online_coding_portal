<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel=stylesheet href="code/doc/docs.css">
        <link rel="stylesheet" href="portal_design.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script type="text/javascript" src="date/jquery-1.8.3.min.js"></script>
        <script src="date/bootstrap-datetimepicker.js">  </script>
        <script src="date/bootstrap-datetimepicker.fr.js"></script>
        <link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
        <title>Code here ;)</title>
       
        <link rel='icon' href='IIITGLogo2.png'>
</head>
<body>
<ul class="nav nav-tabs" >
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="registration.php">Add_Student</a></li>
  <li><a href="add_problem.php">Add_Problem</a></li>
  <li><a href="addevent.php">Add_Event</a></li>
  <li><a href="edit.php">Edit_Problem</a></li>
  <li><a href="questions.php">View_Problems</a></li>
<li><a href="admin_submission.php">Submissions</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
 <div class="form" style="max-width: 50%;margin: 5%">
            <form action="do_add_event.php" method="post" enctype="multipart/form-data">
       
                  <b><i>Enter Event Name</i></b>
                   <input type="text"  name="event_name" id="event_name">
                    </br> 
                    </br>
                    <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" name="start_date" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                </br>
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
 <div class="input-group date form_datetime col-md-5" data-date="2017-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" name="end_date" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>             
            </br>


                        <input type="submit" name="AddEvent">
                        <input type="reset" name="Reset">
                   </br>

        </form>
        </div>
<script type="text/javascript">

    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    
    
</script>       
</body>
</html>

 
