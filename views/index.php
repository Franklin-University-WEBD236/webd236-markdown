%% views/header.html %%


<div class="row">
  <div class="col-lg-12">

    <div class="card">
      <div class="card-header">
        <div class="h3">Contact us!</div>
        <div><small>This form does no validation and submits its data to top-level variables. Also if there are errors, no data is retained in the form (all must be retyped).</small></div>
      </div>

      <div class="card-body">
        <form action="@@contact/view@@" method="post">
          <div class="form-row">
            <div class="col">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="form[name]" placeholder="Enter your name" value={{value($form['name'])}}>
            </div>
            <div class="col">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="form[email]" placeholder="Enter email address" value={{value($form['email'])}}>
            </div>
          </div>
          <div class="form-row mt-2">
            <div class="col">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="form[subject]" placeholder="Enter subject" value={{value($form['subject'])}}>
            </div>
          </div>

          <div class="form-row mt-2">
            <div class="col">
              <label for="message">Content</label>
              <textarea class="form-control" id="message" name="form[message]" placeholder="Enter message" rows="12">{{value($form['message'])}}</textarea>
            </div>
          </div>
          <div class="form-row mt-4 float-right">
            <div class="btn-toolbar align-middle">
              <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Submit</button>
              <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('@@index@@')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  var simplemde = new SimpleMDE({ element: $("#message")[0] });
</script>

<script>
$('form input').keydown(function (e) {
  alert(e.keyCode);
  if (e.keyCode == 13) {
    var inputs = $(this).parents("form").eq(0).find(":input");
    if (inputs[inputs.index(this) + 1] != null) {                    
      inputs[inputs.index(this) + 1].focus();
    }
    e.preventDefault();
    return false;
  }
});

%% views/footer.html %% 