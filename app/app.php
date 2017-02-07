<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/job.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Home";
    });

    $app->get("/new_job", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Job Opening</title>
        </head>
        <body>
            <div class='container'>
                <h1>Job Opening</h1>
                <h3>Enter information for a job opening</h3>
                <form action='/job_post'>
                    <div class='form-group'>
                      <label for='title'>Enter job title:</label>
                      <input id='title' name='title' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                      <label for='description'>Enter the job description:</label>
                      <input id='description' name='description' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                      <label for='contact'>Enter your contact info:</label>
                      <input id='contact' name='contact' class='form-control' type='text'>
                    </div>
                    <button type='submit' class='btn-success'>Submit</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });

    $app->get("/job_post", function() {
        $new_job = new Job($_GET['title'], $_GET['description'], $_GET['contact']);
        return "
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          <div class='container'>
            <h1>New Job Openings</h1>
            <br>
            <div class='row'>
                  <div class='col-md-6'>
                      <p>Job: " . $new_job->getTitle() . "</p>
                      <p>Description: " . $new_job->getDescription() . "</p>
                      <p>Contact: <a href='mailto:name@email.com'>" . $new_job->getContact() . "</a></p>
                  </div>
            </div>
          </div>
          ";
    });

    return $app;
?>
