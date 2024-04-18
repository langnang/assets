@extends($prefix . '.layout')

@section('content')
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col">
        <form class="card">
          <div class="card-header">Meta </div>
          <div class="card-body"> </div>
          <div class="card-footer">
            <div class="form-group mb-0 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col">
        <form class="card">
          <div class="card-header">Content </div>
          <div class="card-body">
            <div class="form-group">
              <div class="form-group">
                <label>content.type.{{ $prefix }}</label>
                <input type="text" class="form-control is-invalid" required>
              </div>
              <div class="form-group">
                <label>content.type.options.{{ $prefix }}</label>
                <input type="text" class="form-control is-invalid" required>
              </div>
              <div class="form-group">
                <label>content.status.{{ $prefix }}</label>
                <input type="text" class="form-control is-invalid">
              </div>
              <div class="form-group">
                <label>content.status.options.{{ $prefix }}</label>
                <input type="text" class="form-control is-invalid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form-group mb-0 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
