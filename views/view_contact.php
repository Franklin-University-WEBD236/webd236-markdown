%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <h2>Raw Form Data</h2>
    {{{dumpArray($form)}}}
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <h2>Formatted form data</h2>
    <div class="row">
      <div class="col">
        Name
      </div>
      <div class="col">
        {{$form['name']}}
    </div>
    <div class="row">
      <div class="col">
        email
      </div>
      <div class="col">
        {{$form['email']}}
    </div>
  </div>
</div>
    
<div class="row mt-4">
  <div class="col-lg-12">
    <div class="form-group">
      <div class="btn-toolbar align-middle">
        <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="return get('@@index@@')"><span class="material-icons">arrow_back</span>&nbsp;Back</button>
      </div>
    </div>
  </div>
</div>

%% views/footer.html %% 