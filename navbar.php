<html>
    <head>

    </head>
<body class="bg">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Class Schedule</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Exam Schedules
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php $link_name = "Exam Schedule"; ?>
          <a class="dropdown-item" href="Exam_schedule.php"><?php echo $link_name; ?></a>


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Class Schedule
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php $link_name = "Teacher"; ?>
          <a class="dropdown-item" href="Teacher.php"><?php echo $link_name; ?></a>
          <?php $link_name = "Course & Section"; ?>
          <a class="dropdown-item" href="course_section.php"><?php echo $link_name; ?></a>
          <?php $link_name = "Room"; ?>
          <a class="dropdown-item" href="Room.php"><?php echo $link_name; ?></a>

        </div>
        
        </li>
        

        <li class="nav-item">
        <?php $link_name = "Help"; ?> 
        <a class="nav-link" href="help.php"><?php echo $link_name; ?></a>
        <li class="nav-item">
        <?php $link_name = "Login"; ?> 
        <a class="nav-link" href="index.php"><?php echo $link_name; ?></a>
        <li class="nav-item">
        <?php $link_name = "Logout"; ?>
        <a class="nav-link" href="logout.php">Logout</a>
      </ul>
        
    </ul>
  </div>
</nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cluodflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

