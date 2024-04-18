@extends('_view.index')
@section('content-temp123')
  <div class="container" data-role="content">
    <div class="row mb-3">
      <div class="col">
        <div class="card">
          <div class="card-header">
            Crypto
          </div>
          <div class="card-body">
            <ul class="list-inline mb-0">
              <a class="list-inline-item" href="/toolkit/crypto?base64">Base64</a>
              <a class="list-inline-item" href="/toolkit/crypto?md5">MD5</a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <div class="card">
          <ul class="list-group list-group-sm list-group-flush">
            <a class="list-group-item list-group-item-action" href="/toolkit/crypto">
              加/解密 <small>// Crypto</small>
            </a>
            <a class="list-group-item list-group-item-action" href="/toolkit/progress">
              Progress
            </a>
            <a class="list-group-item list-group-item-action" href="/toolkit/wheel">
              Wheel
            </a>
            <a class="list-group-item list-group-item-action" href="/toolkit/puzzle">
              Puzzle
            </a>
          </ul>
        </div>
      </div>
      <div class="col">
        <div id="treeview" class="list-group-sm"></div>
      </div>
      <div class="col"> </div>
    </div>
    @isset($contents)
      @php
        Arr::forget($contents, '_logs');
      @endphp
      @foreach ($contents as $panel)
        <div class="card card-default">
          <div class="card-heading">
            <h3 class="card-title">
              {{ Str::ucfirst($panel->title) }}
              <small>{{ $panel->description }}</small>
            </h3>
          </div>
          <div class="card-body">
            <div class="row">
              @isset($panel['contents'])
                @foreach ($panel['contents'] as $content)
                  <div class="col-sm-4 col-md-3" style="padding: 0 5px;">
                    <a class="thumbnail" style="margin-bottom: 10px;"
                      @isset($content['slug'])
                       href="/toolkit/{{ str_replace('_', '/', $content['slug']) }}"
                    @endisset>
                      <div class="caption">
                        <h4>{{ $content['title'] }}</h4>
                      </div>
                    </a>
                  </div>
                @endforeach
              @endisset
            </div>
          </div>
        </div>
      @endforeach
    @endisset
  </div>
@endsection

@section('scripts-temp')
  <script>
    var treeData = [{
        text: "Parent 1",
        icon: "bi bi-plus",
        selectable: true,
        state: {

          checked: true,

          disabled: false,

          expanded: true,

          selected: false

        },

        tags: ['available'],
        nodes: [{
            text: "Child 1",
            nodes: [{
                text: "Grandchild 1"
              },
              {
                text: "Grandchild 2"
              }
            ]
          },
          {
            text: "Child 2",
            nodes: [{
                text: "Child 1",
                nodes: [{
                    text: "Grandchild 1"
                  },
                  {
                    text: "Grandchild 2"
                  }
                ]
              },
              {
                text: "Child 2"
              }
            ]
          }
        ]
      },
      {
        text: "Parent 2"
      }
    ];

    $('#treeview').treeview({
      ...defaultOptions.bootstrapTreeView,
      data: treeData
    });
  </script>
@endsection
