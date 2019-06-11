%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span class="h3">Create your account</span>
      </div>
[[ if (isset($accountErrors)): ]]
      <div class="alert alert-danger mb-0" role="alert">
        Please fix the following errors
        <ul>
[[ foreach ($accountErrors as $key => $error): ]]
          <li>{{$error}}</li>
[[ endforeach; ]]
        </ul>
      </div>
[[ endif; ]]
      <div class="card-body">
        <form action="@@process/account@@" method="post">
          <div class="form-row">
            <div class="col">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" required value={{valueOf($formdata['firstName'])}}>
            </div>
            <div class="col">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name" required value={{valueOf($formdata['lastName'])}}>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="email1">Email address</label>
              <input type="email" class="form-control" id="email1" name="email1" placeholder="Enter email address" required value={{valueOf($formdata['email1'])}}>
            </div>
            <div class="col">
              <label for="email2">Confirm email address</label>
              <input type="email" class="form-control" id="email2" name="email2" placeholder="Re-enter email address" required value={{valueOf($formdata['email2'])}}>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter password" required value={{valueOf($formdata['password1'])}}>
            </div>
            <div class="col">
              <label for="password2">Confirm password</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Re-enter password" required value={{valueOf($formdata['password2'])}}>
            </div>
          </div>
          <div class="form-row mt-4">
            <div class="col">
              <label for="gender">Gender</label>
              <div class="border p-2 rounded" id="gender">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                  <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="nonbinary" value="nonbinary">
                  <label class="form-check-label" for="nonbinary">Non-binary</label>
                </div>
              </div>
            </div>
            <div class="col">
              <label for="device">Devices owned</label>
              <div class="border p-2 rounded" id="device">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="device[]" id="apple" value="apple">
                  <label class="form-check-label" for="apple">iPhone</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="device[]" id="android" value="android">
                  <label class="form-check-label" for="android">Android</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="device[]" id="blackberry" value="blackberry">
                  <label class="form-check-label" for="blackberry">Blackberry</label>
                </div>
              </div>
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

                
                
<!-- contact us form example with textarea and select -->
                
<div class="row mt-4">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span class="h3">Contact us!</span>
      </div>
[[ if (isset($contactErrors)): ]]
      <div class="alert alert-danger mb-0" role="alert">
        Please fix the following errors
        <ul>
[[ foreach ($contactErrors as $key => $error): ]]
          <li>{{$error}}</li>
[[ endforeach; ]]
        </ul>
      </div>
[[ endif; ]]
      <div class="card-body">
        <form action="@@process/contact@@" method="post">
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
              <select name="product" id="product" class="form-control">
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
              <label for="message">Content</label>
              <textarea class="form-control" id="message" name="message" placeholder="Enter message" rows="12"></textarea>
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

%% views/footer.html %% 