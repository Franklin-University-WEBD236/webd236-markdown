<!DOCTYPE html>
<html>
  <head>
    <title><?php echo(htmlentities($title)); ?></title>
    <link rel="shortcut icon" href="https://cdn.glitch.com/7635e9c3-2015-4ec8-967a-16ca37cc9e55%2Ffavicon.ico" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/static/style.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="/static/custom.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="https://cdn.glitch.com/5b0f8a54-892a-4d86-9d84-94836d1a3a6c%2Fblog.svg?v=1560192184638" width="30" height="30" class="d-inline-block align-top" alt=""> My Blog Engine</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://glitch.com/edit/#!/remix/<?php echo(htmlentities(getenv('PROJECT_DOMAIN'))); ?>">Remix</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-4"><?php echo(htmlentities($title)); ?></h1>
          <p class="lead">PHP Forms Examples. This demonstrates basic and complex forms and their processing through a script.</p>
          <p><em>Author: <a href="https://www.franklin.edu/about-us/faculty-staff/faculty-profiles/whittakt">Todd Whittaker</a></em></p>
          <hr>
        </div>
      </div>
      
<?php  if (isset($errors)): ?>
<div class="row">
  <div class="col-lg-12">
    <div class="alert alert-danger">
      Please fix the following errors:
      <ul class="mb-0">
<?php  foreach ($errors as $error): ?>
        <li><?php echo(htmlentities($error)); ?></li>
<?php  endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<?php  endif;?>
  

      

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span class="h3">Create your account</span>
      </div>
      <div class="card-body">
        <form action="/process/dump" method="post">
          <div class="form-row">
            <div class="col">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" required>
            </div>
            <div class="col">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name" required>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="email1">Email address</label>
              <input type="email" class="form-control" id="email1" name="email1" placeholder="Enter email address" required>
            </div>
            <div class="col">
              <label for="email2">Confirm email address</label>
              <input type="email" class="form-control" id="email2" name="email2" placeholder="Re-enter email address" required>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter password" required>
            </div>
            <div class="col">
              <label for="password2">Confirm password</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Re-enter password" required>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="nonbinary" value="nonbinary">
                <label class="form-check-label" for="nonbinary">Non-binary</label>
              </div>
            </div>
          </div>
          <div class="form-row mt-4 float-right">
            <div class="btn-toolbar align-middle">
              <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Submit</button>
              <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('/index')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- contact us form example with textarea and select -->
                
<div class="row mt-4">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span class="h3">Contact us!</span>
      </div>
      <div class="card-body">
        <form action="/process/dump" method="post">
          <div class="form-row">
            <div class="col">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="email3">Email address</label>
              <input type="email" class="form-control" id="email3" name="email3" placeholder="Enter email address" required>
            </div>
            <div class="col">
              <label for="product">State</label>
              <select id="product" class="form-control">
                <option value="invalid" selected>Choose product...</option>
                <option value="books">Books</option>
                <option value="music">Music</option>
                <option value="magazine">Magazines</option>
                <option value="videos">Videos</option>
              </select>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter password" required>
            </div>
            <div class="col">
              <label for="password2">Confirm password</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Re-enter password" required>
            </div>
          </div>
                
          <div class="form-row mt-4">
            <div class="col">
              <label for="message">Content</label>
              <textarea class="form-control" id="message" name="message" placeholder="Enter message" rows="12"></textarea>
            </div>
          </div>
          <div class="form-row mt-4 float-right">
            <div class="btn-toolbar align-middle">
              <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Submit</button>
              <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('/index')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">WEBD 236 examples copyright &copy; 2019 <a href="https://www.franklin.edu/">Franklin University</a>. Current time is <?php echo(htmlentities(date('Y-m-d H:i:s T'))); ?></span>
      </div>
    </footer>
  </body>
</html> 