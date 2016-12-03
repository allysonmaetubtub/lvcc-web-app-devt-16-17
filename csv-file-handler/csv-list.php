<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

include "CSVHandler.php";
$csvHandler = new CSVHandler("list.csv");
$message = null;

if (!empty($_POST))
{
    $full_name = $_POST['full_name'];
    $age = $_POST['age'];
    // Build the array
    $content = [$full_name, $age];
    // write to CSV file
    $csvHandler->writeContent($content);
    $message = "Added {$full_name} {$age} years old";
}
$content = $csvHandler->getContent();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List CSV File Content</title>
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap/css/bootstrap-theme.css">
</head>
<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Web Applications Development 2</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <?php if (!empty($message)): ?>
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Success!</strong> <?php echo $message; ?>
    </div>
    <?php endif; ?>

    <div class="row">
        <form class="col-md-3" method="POST" action="csv-list.php">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="full_name">
          </div>
          <div class="form-group">
            <label>Age</label>
            <select class="form-control" name="age">
            <?php for ($i = 1; $i <= 100; $i++): ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select>
          </div>
            <button type="submit" class="btn btn-default">
                Submit
            </button>
        </form>
    </div>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="row">
        <h1>
            <i class="glyphicon glyphicon-heart"></i>
            Barangay Members
        </h1>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Age</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($content as $row): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</div> <!-- /container -->

<script type="text/javascript" src="/libraries/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/libraries/bootstrap/js/bootstrap.js"></script>
</body>
</html>
