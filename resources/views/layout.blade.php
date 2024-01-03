<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

    <!-- <div class="container ">
        <div class="rows">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Student Management</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        </form>
                    </div>
            </div>
            </nav>
        </div>
    </div> -->
<section>
    <div class="row ">
        <div class="col-md-3">
        <div class="w3-sidebar w3-bar-block" style="width:25%">
  <a href="/" class="w3-bar-item w3-button ">Home</a>
  <a href="/students" class="w3-bar-item w3-button">Student</a>
  <a href="/teachers" class="w3-bar-item w3-button">Teacher</a>
  <a href="/courses" class="w3-bar-item w3-button">Courses</a>
  <a href="/enrollment" class="w3-bar-item w3-button">Enrollment</a>
  <a href="/payment" class="w3-bar-item w3-button">Payment</a>
</div>
        </div>
    </div>
    </section>
    
    <div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Student Management System</h1>
</div>

@yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>