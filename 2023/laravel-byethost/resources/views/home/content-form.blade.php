@php
  $_layout = [
      'scripts' => ['monaco-editor/min/vs/loader.js'],
  ];
@endphp
@extends($prefix . '.layout')

@section('content')
  <div class="container-fluid">
    <div id="monaco_container" class="row" data-role="content">
      <button id="momaco_submit" class="btn btn-primary"
        style="position: absolute;z-index: 9; right: 16px;bottom: 14px;">Submit</button>
    </div>
  </div>
@endsection
@section('scripts')
  <script>
    require.config({
      paths: {
        vs: '/public/vendor/monaco-editor/min/vs'
      }
    });
    require(['vs/editor/editor.main'], function() {
      const modelUri = monaco.Uri.parse("json://grid/settings.json");
      const jsonModel = monaco.editor.createModel(JSON.stringify($data.content, null, '\t'), "json");
      var editor = monaco.editor.create(document.getElementById('monaco_container'), {
        // value: JSON.stringify($data.content),
        ...defaultOptions.monacoEditor,
        model: jsonModel,
        language: 'json',
        theme: 'vs-dark',
        automaticLayout: true,
        lineNumbers: "off",
        roundedSelection: false,
        scrollBeyondLastLine: false,
        readOnly: false,
      });
      var myCondition1 = editor.createContextKey(
        /*key name*/
        "myCondition1",
        /*default value*/
        false
      );
      var myCondition2 = editor.createContextKey(
        /*key name*/
        "myCondition2",
        /*default value*/
        false
      );
      editor.addCommand(
        monaco.KeyCode.Enter,
        function() {
          // services available in `ctx`
          console.log("my command is executing!");
        },
        "myCondition1 && myCondition2"
      );

      $("#momaco_submit").on('click', function(e) {
        const postData = JSON.parse(editor.getValue())
        console.log(postData)
        $.ajax({
          url: "/api/{{ $prefix }}/upsert_content_item",
          method: "post",
          data: postData,
        })
      })
    });
  </script>
  <script></script>
@endsection
