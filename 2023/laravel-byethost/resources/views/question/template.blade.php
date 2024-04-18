@extends('_layout.auto')


@section('content')
  <div class="container">
    <div class="card mb-3">
      <div class="card-header">单选题: Radio</div>
      <div class="card-body">
        <p>CCCCCCCCCCCCCCCCCCCCCCCCC</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Default radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Second default radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3"
            disabled>
          <label class="form-check-label" for="exampleRadios3">
            Disabled radio
          </label>
        </div>
      </div>
      <div class="card-footer">
        <div class="form-group text-right mb-0">
          <button type="submit" class="btn btn-primary">上一题</button>
          <button type="submit" class="btn btn-primary">下一题</button>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">多选题: Checkbox</div>
      <div class="card-body">
        <p>CCCCCCCCCCCCCCCCCCCCCCCCC</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
            Default checkbox
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
          <label class="form-check-label" for="defaultCheck2">
            Disabled checkbox
          </label>
        </div>
      </div>
      <div class="card-footer">

      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">判断题: Judge</div>
      <div class="card-body">
        <p>CCCCCCCCCCCCCCCCCCCCCCCCC</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            True
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            False
          </label>
        </div>
      </div>
      <div class="card-footer">
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">填空题: Input</div>
      <div class="card-body">
        <p>CCCCCCCCCCCCCCCCCCCCCCCCC</p>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-1 col-form-label">A: </label>
          <div class="col-sm-11">
            <input type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-1 col-form-label">B:</label>
          <div class="col-sm-11">
            <input type="password" class="form-control" id="inputPassword3">
          </div>
        </div>

      </div>
      <div class="card-footer">
      </div>
    </div>
  </div>
@endsection
