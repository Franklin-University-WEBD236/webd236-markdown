<!DOCTYPE html>
<html>
  <head>
    <title><?php echo(htmlentities($title)); ?></title>
    <link rel="shortcut icon" href="https://cdn.glitch.com/7635e9c3-2015-4ec8-967a-16ca37cc9e55%2Ffavicon.ico" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/highlight.js/latest/styles/github.min.css">

    <link href="/static/style.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/highlight.js/latest/highlight.min.js"></script>
    <script src="/static/custom.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="https://cdn.glitch.com/75363d24-d65a-47a5-9efe-845063b9476b%2Fmarkdown.svg?v=1560973340935" width="30" height="30" class="d-inline-block align-top" alt=""> Rich Text Examples</a>
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
          <p class="lead">PHP Rich Text Editing. This demonstrates rich text editing through Markdown and a couple of third party libraries. Markdown is a more reasonable format for web based text editing because it isn't injectable. Two libraries are used: <a href="https://simplemde.com/">SimpleMDE</a> and <a href="https://parsedown.org/">Parsedown</a>.</p>
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
        <div class="h3">Contact us!</div>
        <div><small>This form does no validation and submits its data to top-level variables. Also if there are errors, no data is retained in the form (all must be retyped).</small></div>
      </div>

      <div class="card-body">
        <form action="/contact/view" method="post">
          <div class="form-row">
            <div class="col">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="form[name]" placeholder="Enter your name" value=<?php echo(htmlentities(value($form['name']))); ?>>
            </div>
            <div class="col">
              <label for="email">Email address</label>
              <input type="text" class="form-control" id="email" name="form[email]" placeholder="Enter email address" value=<?php echo(htmlentities(value($form['email']))); ?>>
            </div>
          </div>
          <div class="form-row mt-2">
            <div class="col">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="form[subject]" placeholder="Enter subject" value=<?php echo(htmlentities(value($form['subject']))); ?>>
            </div>
          </div>

          <div class="form-row mt-2">
            <div class="col">
              <label for="message">Content</label>
              <textarea class="form-control" id="message" name="form[message]" placeholder="Enter message" rows="12"><?php echo(htmlentities(value($form['message']))); ?></textarea>
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
<script>
  // turn the text area with ID "message" into a rich text
  // editor using markdown.
  var simplemde = new SimpleMDE({
    element: $("#message")[0],
    renderingConfig: {
  		codeSyntaxHighlighting: true
	  }
  });
</script>

<script>
// I got tired of the enter key submitting the form, so I used this:  
// https://www.hashbangcode.com/article/prevent-enter-key-submitting-forms-jquery
$('form input').keydown(function (e) {
  if (e.keyCode == 13) {
    var inputs = $(this).parents("form").eq(0).find(":input");
    if (inputs[inputs.index(this) + 1] != null) {                    
      inputs[inputs.index(this) + 1].focus();
    }
    e.preventDefault();
    return false;
  }
});
</script>

    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">WEBD 236 examples copyright &copy; 2019 <a href="https://www.franklin.edu/">Franklin University</a>. Current time is <?php echo(htmlentities(date('Y-m-d H:i:s T'))); ?></span>
      </div>
    </footer>
  </body>
</html> 