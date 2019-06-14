%% views/header.html %%


<div class="row">
  <div class="col-lg-12">

    <div class="card">
      <div class="card-header">
        <div class="h3">Contact us!</div>
        <div><small>This form does no validation and submits its data to top-level variables. Also if there are errors, no data is retained in the form (all must be retyped).</small></div>
      </div>

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
              <label for="product">Product of interest</label>
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