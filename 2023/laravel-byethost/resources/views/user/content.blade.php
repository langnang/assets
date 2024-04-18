@extends('_view.index')

@section('content')
  <div class="container mt-3">
    <h1 class="mb-3"><a class="text-decoration-none text-reset" href="/{{ $prefix }}">{{ $content['name'] }}</a></h1>
    <div class="media mb-3">
      <div class="media-body">
        <div class="card" data-role="user-basic">
          <div class="card-header">
            <h4 class="mb-0">基本信息</h4>
          </div>
          <div class="card-body">
            <dl class="row mb-0">
              <div class="col">
                <div class="row">
                  <dt class="col-md-auto">出生年月</dt>
                  <dd class="col">{{ $content['text']['baseinfo']['birthdate'] ?? '0000.00.00' }}</dd>
                </div>
                <div class="row">
                  <dt class="col-md-auto">现居住地</dt>
                  <dd class="col">{{ $content['text']['baseinfo']['residence'] ?? 'XX省 XX市 XX区' }}</dd>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <dt class="col-md-auto">电话</dt>
                  <dd class="col">
                    {{ $content['text']['baseinfo']['cellphone'] ?? ($content['text']['baseinfo']['telephone'] ?? '00000000000') }}
                  </dd>
                </div>
                <div class="row">
                  <dt class="col-md-auto">邮箱</dt>
                  <dd class="col"><a
                      href="mailto:{{ $content['email'] ?? 'xxxxxxx@email.com' }}">{{ $content['email'] ?? 'xxxxxxx@email.com' }}</a>
                  </dd>
                </div>
              </div>
            </dl>
          </div>
        </div>
      </div>
      <img class="align-self-center ml-3" src="holder.js/120x160/auto/#777:#555" alt="">
    </div>

    <div class="card mb-3" data-role="user-education">
      <div class="card-header">
        <h4 class="mb-0">教育背景</h4>
      </div>
      <div class="card-body">
        <div class="row">
          @foreach ($content['text']['educations'] ?? [] as $item)
            <div class="col-3 text-center">{{ $item['daterange'][0] }} ~ {{ $item['daterange'][1] }}</div>
            <div class="col-3 text-center">{{ $item['college'] }}</div>
            <div class="col-3 text-center">{{ $item['major'] }}</div>
            <div class="col-3 text-center">{{ $item['degree'] }}</div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="card mb-3" data-role="user-skills">
      <div class="card-header">
        <h4 class="mb-0">技能掌握</h4>
      </div>
      <div class="card-body">
        <ul class="mb-0">
          @foreach ($content['text']['skills'] ?? [] as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="card mb-3" data-role="user-works">
      <div class="card-header">
        <h4 class="mb-0">工作经历</h4>
      </div>
      <div class="card-body">
        @foreach ($content['text']['works'] ?? [] as $item)
          <div class="row">
            <div class="col-4 text-center">{{ $item['daterange'][0] }} ~ {{ $item['daterange'][1] }}</div>
            <div class="col-4 text-center">{{ $item['company'] }}</div>
            <div class="col-4 text-center">{{ $item['job'] }}</div>
            <div class="col-12 mt-3 mb-3">
              <ul class="mb-0">
                @foreach ($item['duties'] ?? [] as $duty)
                  <li>{{ $duty }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="card mb-3" data-role="user-education">
      <div class="card-header">
        <h4 class="mb-0">自我评价</h4>
      </div>
      <div class="card-body">
        <ul class="mb-0">
          @foreach ($content['text']['baseinfo']['assessments'] ?? [] as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="card mb-3" data-role="user-education">
      <div class="card-header">
        <h4 class="mb-0">项目经验</h4>
      </div>
      <div class="card-body">
        @foreach ($content['text']['works'] as $item)
          <h4 class="mb-2">{{ $item['company'] }}</h4>
          @foreach ($item['projects'] as $project)
            <h5>{{ $project['name'] }}</h5>
            <blockquote>{{ $project['description'] }}</blockquote>
            <ul>
              @foreach ($project['contributions'] as $contribution)
                <li>{{ $contribution }}</li>
              @endforeach
            </ul>
          @endforeach
          <hr>
        @endforeach
      </div>
    </div>
  </div>
@endsection
