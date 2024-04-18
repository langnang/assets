@extends('resume.layout')

@section('content')
  <div class="container mt-3">
    <h1 class="mb-3">h1. Bootstrap heading</h1>
    <div class="card mb-3" data-role="user-basic">
      <div class="card-header">
        <h3 class="mb-0">基本信息</h3>
      </div>
      <div class="card-body">
        <dl class="row mb-0">
          <div class="col">
            <div class="row">
              <dt class="col-md-auto">出生年月</dt>
              <dd class="col">0000.00.00</dd>
            </div>
            <div class="row">
              <dt class="col-md-auto">现居住地</dt>
              <dd class="col">XX省XX市XX区</dd>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <dt class="col-md-auto">电话</dt>
              <dd class="col">00000000000</dd>
            </div>
            <div class="row">
              <dt class="col-md-auto">邮箱</dt>
              <dd class="col"><a href="mailto:xxxxxxx@163.com">xxxxxxx@qq.com</a></dd>
            </div>
          </div>
          <div class="col-md-auto">
            <img src="holder.js/120x160/auto/#777:#555" alt="" style="margin: -3.5rem 0; ">
          </div>
        </dl>
      </div>
    </div>
    <div class="card mb-3" data-role="user-education">
      <div class="card-header">
        <h3 class="mb-0">教育背景</h3>
      </div>
      <div class="card-body">
        <table class="table table-borderless text-center mb-0">
          <tbody>
            <tr>
              <td>时间</td>
              <td>学校</td>
              <td>专业</td>
              <td>学位</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card mb-3" data-role="user-skills">
      <div class="card-header">
        <h3 class="mb-0">技能掌握</h3>
      </div>
      <div class="card-body">
        <ul class="mb-0">
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript, ES6</li>
          <li>Vue, React</li>
          <li>Git, vscode</li>
          <li>Git, vscode</li>
          <li>Git, vscode</li>
          <li>Git, vscode</li>
        </ul>
      </div>
    </div>
    <div class="card mb-3" data-role="user-works">
      <div class="card-header">
        <h3 class="mb-0">工作经历</h3>
      </div>
      <div class="card-body">
        <table class="table table-borderless text-center mb-0">
          <tbody>
            <tr>
              <td>时间</td>
              <td>单位</td>
              <td>岗位</td>
            </tr>
          </tbody>
        </table>
        <ul class="mb-0">
          <li>负责</li>
          <li>负责</li>
          <li>负责</li>
          <li>负责</li>
        </ul>
        <table class="table table-borderless text-center mb-0">
          <tbody>
            <tr>
              <td>时间</td>
              <td>单位</td>
              <td>岗位</td>
            </tr>
          </tbody>
        </table>
        <ul class="mb-0">
          <li>负责</li>
          <li>负责</li>
          <li>负责</li>
          <li>负责</li>
        </ul>
      </div>
    </div>
    <div class="card mb-3" data-role="user-education">
      <div class="card-header">
        <h3 class="mb-0">自我评价</h3>
      </div>
      <div class="card-body">
        <ul class="mb-0">
          <li>自认为</li>
          <li>自认为</li>
          <li>自认为</li>
          <li>自认为</li>
          <li>自认为</li>
        </ul>
      </div>
    </div>
    <div class="card mb-3" data-role="user-education">
      <div class="card-header">
        <h3 class="mb-0">项目经验</h3>
      </div>
      <div class="card-body"></div>
    </div>
  </div>
@endsection
