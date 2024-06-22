<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between pt-4">
        <h1>Task Manager</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
          Add New Task
        </button>
      </div>

      <?php include './components/addModal.html'; ?>

      <div id="notification" class="alert" style="display: none"></div>

      <div class="card mt-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5>Today's Tasks</h5>
          <div class="text-muted"><?php echo date('l, F j, Y'); ?></div>
        </div>
        <div class="card-body" id="todaysTasks">
          <!-- Tasks will be dynamically inserted here -->
        </div>
      </div>

      <div class="card mt-4 mb-5">
        <div class="card-header">
          <h5>Task List</h5>
        </div>
        <div class="card-body" id="taskList">
          <!-- Tasks will be dynamically inserted here -->
        </div>
      </div>

      <?php include './components/updateModal.html'; ?>
      <?php include './components/deleteModal.html'; ?>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/scripts.js"></script>
</body>

</html>