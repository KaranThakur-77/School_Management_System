<a?php 

include("../config/connection.php");

if(isset($_SESSION['umail'])){

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand">
              <h3>Student Management System</h3>
            </a>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <a href="../config/logout_process.php" class="btn btn-danger">Log Out</a>
          </div>
        </nav>

        <div class="card mt-4">
          <div class="card-body d-flex p-4  border border-success rounded justify-content-around">
            <div class="card border border-dark" style="width: 18rem;">
              <img src="../img/s1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">An innovative learning environment fosters creativity, collaboration, and critical
                  thinking. It leverages technology, flexible spaces, and diverse teaching methods to engage students
                  and personalize learning experiences. By promoting experimentation and problem-solving, it cultivates
                  a culture of adaptability and prepares learners for success in a rapidly evolving world.</p>
              </div>
            </div>
            <div class="card border border-dark" style="width: 18rem;">
              <img src="../img/s2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Our students are the heartbeat of our educational community, each with unique
                  talents, aspirations, and potential. We nurture their growth, providing guidance, resources, and
                  opportunities for holistic development. Through education, we empower them to become critical
                  thinkers, lifelong learners, and leaders of tomorrow.</p>
              </div>
            </div>
            <div class="card border border-dark" style="width: 18rem;">
              <img src="../img/s3.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Our libraries serve as vibrant hubs of knowledge, offering a diverse range of
                  resources to enrich lives and empower communities. From books to digital archives, they provide access
                  to information, education, and cultural enrichment. Our libraries are not merely repositories of
                  literature but also centers for lifelong learning, innovation, and connection. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-body d-flex justify-content-around">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../img/s4.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Quick Access.</h5>
                    <p class="card-text">Efficiently manage student data with our streamlined system, ensuring quick
                      access to essential information for educators, administrators, and students alike. Simplify tasks,
                      enhance communication, and optimize productivity effortlessly.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 8 months ago</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="../img/s5.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Robust Authorization System.</h5>
                    <p class="card-text">A secure authorization system ensures only authorized users access resources,
                      employing robust authentication methods like biometrics, passwords, or tokens, bolstered by
                      encryption and multi-factor authentication for heightened protection.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 8 months ago.</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4 ">
          <div class="col-sm-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Create Student Data.</h5>
                <p class="card-text">With supporting button below,You can create student data by clicking that button .
                </p>
                <a href="create.php" class="btn btn-primary">Create Student Data.</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">View Student Data.</h5>
                <p class="card-text">With supporting button below, You can view students record.</p>
                <a href="table.php" class="btn btn-primary">View Student Data</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>