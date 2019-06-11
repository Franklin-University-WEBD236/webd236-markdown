%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span class="h3">Create your account</span>
      </div>
      <div class="card-body">
        <form action="@@process/dump@@" method="post">
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

<div class="row mt-4">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span class="h3">Contact us!</span>
      </div>
      <div class="card-body">
        <form action="@@process/dump@@" method="post">
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
                <option selected>Choose product...</option>
                <option>Books</option>
                <option>Music</option>
                <option>Magazines</option>
                <option>Videos</option>
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
              <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" placeholder="Enter content" rows="12">{{$post['content']}}</textarea>
              </div>
              <div class="form-group">
                
                
                
                
                
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

%% views/footer.html %% 