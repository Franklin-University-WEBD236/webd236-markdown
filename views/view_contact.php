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
    <table class="table frame="box">
      <thead class="thead-dark">
        <tr>
          <th>Input</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-top">Name</td>
          <td class="align-top">{{$form['name']}}</td>
        </tr>
        <tr>
          <td class="align-top">Email</td>
          <td class="align-top">{{$form['email']}}</td>
        </tr>
        <tr>
          <td class="align-top">Subject</td>
          <td class="align-top">{{$form['subject']}}</td>
        </tr>
        <tr>
          <td class="align-top">Message</td>
          <td class="align-top">{{{$parsedown->text($form['message'])}}}</td>
        </tr>
      </tbody>
    </table>
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