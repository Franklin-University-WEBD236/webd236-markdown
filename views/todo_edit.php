%% views/header.html %%

<div class="row">
  <div class="col-lg-8 offset-2">

    <form action="@@todo/edit@@" method="post">
      <div class="form-group">
        <label for="description">Make your changes below</label>
        <input type="text" min="1" id="description" name="description" class="form-control" placeholder="Enter description" value="{{$todo['description']}}" />
        <input type="hidden" id="done" name="done" value="{{$todo['done']}}" />
        <input type="hidden" id="id" name="id" value="{{$todo['id']}}" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary" onclick="return get('@@index@@')">Cancel</button>
      </div>
    </form>
    <p><a href="@@index@@"><< Back</a></p>
  </div>
</div>
%% views/footer.html %%
