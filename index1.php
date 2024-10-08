<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Room</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      padding: 20px;
    }
    .module-card {
      margin: 20px 0;
    }
    .calendar-container {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .module-card .card-header {
      background-color: #0d6efd;
      color: white;
    }
    .module-card .card-body {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .download-btn {
      background-color: #0d6efd;
      color: white;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <h1 class="text-center mb-4">Training Room</h1>
    
    <!-- Section: Training Modules -->
    <h3>Training Modules</h3>
    <div class="row">
      <div class="col-md-6 module-card">
        <div class="card">
          <div class="card-header">Module 1: Introduction to Programming</div>
          <div class="card-body">
            <span>Available: Video & PDF</span>
            <a href="module1.pdf" download class="btn download-btn">Download PDF</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 module-card">
        <div class="card">
          <div class="card-header">Module 2: Advanced JavaScript</div>
          <div class="card-body">
            <span>Available: Video & Slides</span>
            <a href="module2.pdf" download class="btn download-btn">Download Slides</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Section: Live Session Calendar -->
    <h3 class="mt-5">Live Session Calendar</h3>
    <div class="calendar-container mb-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Session</th>
            <th>Date</th>
            <th>Time</th>
            <th>Link</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Live Session: Introduction to Java</td>
            <td>October 10, 2024</td>
            <td>10:00 AM</td>
            <td><a href="https://zoom.us/j/123456789" class="btn btn-primary btn-sm">Join Now</a></td>
          </tr>
          <tr>
            <td>Live Session: Python for Beginners</td>
            <td>October 12, 2024</td>
            <td>2:00 PM</td>
            <td><a href="https://zoom.us/j/987654321" class="btn btn-primary btn-sm">Join Now</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Section: Downloadable Resources -->
    <h3>Downloadable Resources</h3>
    <div class="row">
      <div class="col-md-6 module-card">
        <div class="card">
          <div class="card-header">Resource 1: Programming Cheatsheet</div>
          <div class="card-body">
            <span>Type: PDF</span>
            <a href="cheatsheet.pdf" download class="btn download-btn">Download</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 module-card">
        <div class="card">
          <div class="card-header">Resource 2: Algorithm Flowcharts</div>
          <div class="card-body">
            <span>Type: PDF</span>
            <a href="flowchart.pdf" download class="btn download-btn">Download</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
