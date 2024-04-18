@extends($prefix . '.layout')

@section('styles')
@endsection

@section('content')
  <div class="container">
    <ul class="nav nav-tabs nav-fill mb-3" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="input-tab" data-toggle="tab" data-target="#input" type="button" role="tab"
          aria-controls="input" aria-selected="true">手动收录</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="url-tab" data-toggle="tab" data-target="#url" type="button" role="tab"
          aria-controls="url" aria-selected="true">网站收录</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="markdown-tab" data-toggle="tab" data-target="#markdown" type="button"
          role="tab" aria-controls="markdown" aria-selected="true">分块收录</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link disabled" id="file-tab" data-toggle="tab" data-target="#file" type="button" role="tab"
          aria-controls="file" aria-selected="false">文件收录</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="card tab-pane fade" id="input" role="tabpanel" aria-labelledby="input-tab">
        <div class="card-body">
          <form action="" method="POST">
            @csrf
            <div class="form-group sr-only">
              <label>收录类型</label>
              <input type="text" class="form-control" name="embody-type" value="input">
            </div>
            <div class="form-group sr-only">
              <label>ID</label>
              <input type="text" class="form-control" name="cid" value="{{ $content['cid'] }}">
            </div>
            <div class="form-group">
              <label>标题</label>
              <input type="text" class="form-control" name="title" value="{{ $content['title'] }}">
            </div>
            <div class="form-group">
              <label>描述</label>
              <input type="text" class="form-control" name="description" value="{{ $content['description'] }}">
            </div>
            <div class="form-group">
              <label>选项</label>
              <select class="form-control" name="type">
                <option value="radio">单选</option>
                <option value="checkbox">多选</option>
                <option value="switch">判断</option>
                <option value="input">填空</option>
                <option value="markdown" @if ($content['type'] == 'markdown' || !$content['type']) selected @endif>简述
                </option>
                <option value="code">编程</option>
              </select>

            </div>
            <div class="form-group">
              <label>选项</label>
              <textarea class="form-control" name="options" rows="1"></textarea>
            </div>
            <div class="form-group">
              <label>答案</label>
              <textarea class="form-control" name="suggestion" rows="1"></textarea>
            </div>
            <div class="form-group">
              <label>解析</label>
              <textarea class="form-control" name="text" rows="3"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="card tab-pane fade" id="url" role="tabpanel" aria-labelledby="url-tab">
        <div class="card-body">
          <form action="" method="POST">
            @csrf
            <div class="form-group sr-only">
              <label>收录类型</label>
              <input type="text" class="form-control" name="embody-type" value="url">
            </div>
            <div class="form-group">
              <label>URL 地址</label>
              <input type="url" class="form-control" name="slug">
            </div>
            <div class="form-group">
              <label>容器 XPath</label>
              <input type="text" class="form-control" name="contents" value="//html">
            </div>
            <div class="form-group">
              <label>标题 XPath</label>
              <input type="text" class="form-control" name="contents_title" value="//title">
            </div>
            <div class="form-group">
              <label>答案 XPath</label>
              <input type="text" class="form-control" name="contents_suggestion" value="//body|html_to_markdown">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="card tab-pane fade show active" id="markdown" role="tabpanel" aria-labelledby="markdown-tab">
        <div class="card-body">
          <form id="markdown-form" action="" method="POST">
            @csrf
            <div class="form-group sr-only">
              <label>收录类型</label>
              <input type="text" class="form-control" name="embody-type" value="markdown">
            </div>
            <div class="form-group">
              <label>全文</label> <span class="float-right">Monaco Editor</span>
              <small class="form-text text-muted mt-0">使用 Markdown 语法，默认以 <code>#</code> 分块</small>
              <div id="markdown-text-container" style="height: 58vh;" name="text"></div>
              <textarea id="markdown-text" class="form-control sr-only" name="text" rows="3"></textarea>
            </div>
            <div class="form-group">
              <button type="button" id="markdown-submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="file-tab">...</div>
    </div>
  </div>
@endsection


@section('scripts')
  <script src="/public/vendor/monaco-editor/min/vs/loader.js"></script>
  <script>
    require.config({
      paths: {
        vs: '/public/vendor/monaco-editor/min/vs'
      }
    });
    require(['vs/editor/editor.main'], function($editor) {
      console.log($editor, monaco)
      var editor = monaco.editor.create(document.getElementById('markdown-text-container'), {
        // value: ['function x() {', '\tconsole.log("Hello world!");', '}'].join('\n'),
        value: ["# 问题1", "", "解析1", "", "# 问题2", "", "解析2", "", "# 问题3", "", "解析3"].join('\n'),
        language: 'markdown',
        theme: 'vs-dark',
        automaticLayout: true,
        lineNumbers: "off",
        roundedSelection: false,
        scrollBeyondLastLine: false,
        readOnly: false,
        // acceptSuggestionOnCommitCharacter: IEditorOption<acceptSuggestionOnCommitCharacter, boolean>;
        // acceptSuggestionOnEnter: IEditorOption<acceptSuggestionOnEnter, "on" | "off" | "smart">;
        // accessibilityPageSize: IEditorOption<accessibilityPageSize, number>;
        // accessibilitySupport: IEditorOption<accessibilitySupport, AccessibilitySupport>;
        // ariaLabel: IEditorOption<ariaLabel, string>;
        // autoClosingBrackets: IEditorOption<autoClosingBrackets, "always" | "languageDefined" | "beforeWhitespace" | "never">;
        // autoClosingDelete: IEditorOption<autoClosingDelete, "always" | "never" | "auto">;
        // autoClosingOvertype: IEditorOption<autoClosingOvertype, "always" | "never" | "auto">;
        // autoClosingQuotes: IEditorOption<autoClosingQuotes, "always" | "languageDefined" | "beforeWhitespace" | "never">;
        // autoIndent: IEditorOption<autoIndent, EditorAutoIndentStrategy>;
        // autoSurround: IEditorOption<autoSurround, "languageDefined" | "never" | "quotes" | "brackets">;
        // automaticLayout: IEditorOption<automaticLayout, boolean>;
        // bracketPairColorization: IEditorOption<bracketPairColorization, Readonly<Required<IBracketPairColorizationOptions>>>;
        // bracketPairGuides: IEditorOption<guides, Readonly<Required<IGuidesOptions>>>;
        // codeLens: IEditorOption<codeLens, boolean>;
        // codeLensFontFamily: IEditorOption<codeLensFontFamily, string>;
        // codeLensFontSize: IEditorOption<codeLensFontSize, number>;
        // colorDecoratorActivatedOn: IEditorOption<colorDecoratorsActivatedOn, "clickAndHover" | "click" | "hover">;
        // colorDecorators: IEditorOption<colorDecorators, boolean>;
        // colorDecoratorsLimit: IEditorOption<colorDecoratorsLimit, number>;
        // columnSelection: IEditorOption<columnSelection, boolean>;
        // comments: IEditorOption<comments, Readonly<Required<IEditorCommentsOptions>>>;
        // contextmenu: IEditorOption<contextmenu, boolean>;
        // copyWithSyntaxHighlighting: IEditorOption<copyWithSyntaxHighlighting, boolean>;
        // cursorBlinking: IEditorOption<cursorBlinking, TextEditorCursorBlinkingStyle>;
        // cursorSmoothCaretAnimation: IEditorOption<cursorSmoothCaretAnimation, "on" | "off" | "explicit">;
        // cursorStyle: IEditorOption<cursorStyle, TextEditorCursorStyle>;
        // cursorSurroundingLines: IEditorOption<cursorSurroundingLines, number>;
        // cursorSurroundingLinesStyle: IEditorOption<cursorSurroundingLinesStyle, "default" | "all">;
        // cursorWidth: IEditorOption<cursorWidth, number>;
        // defaultColorDecorators: IEditorOption<defaultColorDecorators, boolean>;
        // definitionLinkOpensInPeek: IEditorOption<definitionLinkOpensInPeek, boolean>;
        // disableLayerHinting: IEditorOption<disableLayerHinting, boolean>;
        // disableMonospaceOptimizations: IEditorOption<disableMonospaceOptimizations, boolean>;
        // domReadOnly: IEditorOption<domReadOnly, boolean>;
        // dragAndDrop: IEditorOption<dragAndDrop, boolean>;
        // dropIntoEditor: IEditorOption<dropIntoEditor, Readonly<Required<IDropIntoEditorOptions>>>;
        // editorClassName: IEditorOption<editorClassName, string>;
        // emptySelectionClipboard: IEditorOption<emptySelectionClipboard, boolean>;
        // experimentalWhitespaceRendering: IEditorOption<experimentalWhitespaceRendering, "off" | "svg" | "font">;
        // extraEditorClassName: IEditorOption<extraEditorClassName, string>;
        // fastScrollSensitivity: IEditorOption<fastScrollSensitivity, number>;
        // find: IEditorOption<find, Readonly<Required<IEditorFindOptions>>>;
        // fixedOverflowWidgets: IEditorOption<fixedOverflowWidgets, boolean>;
        // folding: IEditorOption<folding, boolean>;
        // foldingHighlight: IEditorOption<foldingHighlight, boolean>;
        // foldingImportsByDefault: IEditorOption<foldingImportsByDefault, boolean>;
        // foldingMaximumRegions: IEditorOption<foldingMaximumRegions, number>;
        // foldingStrategy: IEditorOption<foldingStrategy, "auto" | "indentation">;
        // fontFamily: IEditorOption<fontFamily, string>;
        // fontInfo: IEditorOption<fontInfo, FontInfo>;
        // fontLigatures2: IEditorOption<fontLigatures, string>;
        // fontSize: IEditorOption<fontSize, number>;
        // fontVariations: IEditorOption<fontVariations, string>;
        // fontWeight: IEditorOption<fontWeight, string>;
        // formatOnPaste: IEditorOption<formatOnPaste, boolean>;
        // formatOnType: IEditorOption<formatOnType, boolean>;
        // glyphMargin: IEditorOption<glyphMargin, boolean>;
        // gotoLocation: IEditorOption<gotoLocation, Readonly<Required<IGotoLocationOptions>>>;
        // hideCursorInOverviewRuler: IEditorOption<hideCursorInOverviewRuler, boolean>;
        // hover: IEditorOption<hover, Readonly<Required<IEditorHoverOptions>>>;
        // inDiffEditor: IEditorOption<inDiffEditor, boolean>;
        // inlayHints: IEditorOption<inlayHints, Readonly<Required<IEditorInlayHintsOptions>>>;
        // inlineSuggest: IEditorOption<inlineSuggest, Readonly<Required<IInlineSuggestOptions>>>;
        // layoutInfo: IEditorOption<layoutInfo, EditorLayoutInfo>;
        // letterSpacing: IEditorOption<letterSpacing, number>;
        // lightbulb: IEditorOption<lightbulb, Readonly<Required<IEditorLightbulbOptions>>>;
        // lineDecorationsWidth: IEditorOption<lineDecorationsWidth, number>;
        // lineHeight: IEditorOption<lineHeight, number>;
        // lineNumbers: IEditorOption<lineNumbers, InternalEditorRenderLineNumbersOptions>;
        // lineNumbersMinChars: IEditorOption<lineNumbersMinChars, number>;
        // linkedEditing: IEditorOption<linkedEditing, boolean>;
        // links: IEditorOption<links, boolean>;
        // matchBrackets: IEditorOption<matchBrackets, "always" | "never" | "near">;
        // minimap: IEditorOption<minimap, Readonly<Required<IEditorMinimapOptions>>>;
        // mouseStyle: IEditorOption<mouseStyle, "default" | "text" | "copy">;
        // mouseWheelScrollSensitivity: IEditorOption<mouseWheelScrollSensitivity, number>;
        // mouseWheelZoom: IEditorOption<mouseWheelZoom, boolean>;
        // multiCursorLimit: IEditorOption<multiCursorLimit, number>;
        // multiCursorMergeOverlapping: IEditorOption<multiCursorMergeOverlapping, boolean>;
        // multiCursorModifier: IEditorOption<multiCursorModifier, "altKey" | "metaKey" | "ctrlKey">;
        // multiCursorPaste: IEditorOption<multiCursorPaste, "spread" | "full">;
        // occurrencesHighlight: IEditorOption<occurrencesHighlight, boolean>;
        // overviewRulerBorder: IEditorOption<overviewRulerBorder, boolean>;
        // overviewRulerLanes: IEditorOption<overviewRulerLanes, number>;
        // padding: IEditorOption<padding, Readonly<Required<IEditorPaddingOptions>>>;
        // parameterHints: IEditorOption<parameterHints, Readonly<Required<IEditorParameterHintOptions>>>;
        // pasteAs: IEditorOption<pasteAs, Readonly<Required<IPasteAsOptions>>>;
        // peekWidgetDefaultFocus: IEditorOption<peekWidgetDefaultFocus, "tree" | "editor">;
        // pixelRatio: IEditorOption<pixelRatio, number>;
        // quickSuggestions: IEditorOption<quickSuggestions, InternalQuickSuggestionsOptions>;
        // quickSuggestionsDelay: IEditorOption<quickSuggestionsDelay, number>;
        // readOnly: IEditorOption<readOnly, boolean>;
        // readOnlyMessage: IEditorOption<readOnlyMessage, any>;
        // renameOnType: IEditorOption<renameOnType, boolean>;
        // renderControlCharacters: IEditorOption<renderControlCharacters, boolean>;
        // renderFinalNewline: IEditorOption<renderFinalNewline, "on" | "off" | "dimmed">;
        // renderLineHighlight: IEditorOption<renderLineHighlight, "all" | "line" | "none" | "gutter">;
        // renderLineHighlightOnlyWhenFocus: IEditorOption<renderLineHighlightOnlyWhenFocus, boolean>;
        // renderValidationDecorations: IEditorOption<renderValidationDecorations, "on" | "off" | "editable">;
        // renderWhitespace: IEditorOption<renderWhitespace, "all" | "none" | "boundary" | "selection" | "trailing">;
        // revealHorizontalRightPadding: IEditorOption<revealHorizontalRightPadding, number>;
        // roundedSelection: IEditorOption<roundedSelection, boolean>;
        // rulers: IEditorOption<rulers, {}>;
        // screenReaderAnnounceInlineSuggestion: IEditorOption<screenReaderAnnounceInlineSuggestion, boolean>;
        // scrollBeyondLastColumn: IEditorOption<scrollBeyondLastColumn, number>;
        // scrollBeyondLastLine: IEditorOption<scrollBeyondLastLine, boolean>;
        // scrollPredominantAxis: IEditorOption<scrollPredominantAxis, boolean>;
        // scrollbar: IEditorOption<scrollbar, InternalEditorScrollbarOptions>;
        // selectOnLineNumbers: IEditorOption<selectOnLineNumbers, boolean>;
        // selectionClipboard: IEditorOption<selectionClipboard, boolean>;
        // selectionHighlight: IEditorOption<selectionHighlight, boolean>;
        // showDeprecated: IEditorOption<showDeprecated, boolean>;
        // showFoldingControls: IEditorOption<showFoldingControls, "always" | "never" | "mouseover">;
        // showUnused: IEditorOption<showUnused, boolean>;
        // smartSelect: IEditorOption<smartSelect, Readonly<Required<ISmartSelectOptions>>>;
        // smoothScrolling: IEditorOption<smoothScrolling, boolean>;
        // snippetSuggestions: IEditorOption<snippetSuggestions, "none" | "top" | "bottom" | "inline">;
        // stickyScroll: IEditorOption<stickyScroll, Readonly<Required<IEditorStickyScrollOptions>>>;
        // stickyTabStops: IEditorOption<stickyTabStops, boolean>;
        // stopRenderingLineAfter: IEditorOption<stopRenderingLineAfter, number>;
        // suggest: IEditorOption<suggest, Readonly<Required<ISuggestOptions>>>;
        // suggestFontSize: IEditorOption<suggestFontSize, number>;
        // suggestLineHeight: IEditorOption<suggestLineHeight, number>;
        // suggestOnTriggerCharacters: IEditorOption<suggestOnTriggerCharacters, boolean>;
        // suggestSelection: IEditorOption<suggestSelection, "first" | "recentlyUsed" | "recentlyUsedByPrefix">;
        // tabCompletion: IEditorOption<tabCompletion, "on" | "off" | "onlySnippets">;
        // tabFocusMode: IEditorOption<tabFocusMode, boolean>;
        // tabIndex: IEditorOption<tabIndex, number>;
        // unfoldOnClickAfterEndOfLine: IEditorOption<unfoldOnClickAfterEndOfLine, boolean>;
        // unicodeHighlight: IEditorOption<unicodeHighlighting, any>;
        // unusualLineTerminators: IEditorOption<unusualLineTerminators, "auto" | "off" | "prompt">;
        // useShadowDOM: IEditorOption<useShadowDOM, boolean>;
        // useTabStops: IEditorOption<useTabStops, boolean>;
        // wordBreak: IEditorOption<wordBreak, "normal" | "keepAll">;
        // wordSeparators: IEditorOption<wordSeparators, string>;
        // wordWrap: IEditorOption<wordWrap, "on" | "off" | "wordWrapColumn" | "bounded">;
        // wordWrapBreakAfterCharacters: IEditorOption<wordWrapBreakAfterCharacters, string>;
        // wordWrapBreakBeforeCharacters: IEditorOption<wordWrapBreakBeforeCharacters, string>;
        // wordWrapColumn: IEditorOption<wordWrapColumn, number>;
        // wordWrapOverride1: IEditorOption<wordWrapOverride1, "on" | "off" | "inherit">;
        // wordWrapOverride2: IEditorOption<wordWrapOverride2, "on" | "off" | "inherit">;
        // wrappingIndent: IEditorOption<wrappingIndent, WrappingIndent>;
        // wrappingInfo: IEditorOption<wrappingInfo, EditorWrappingInfo>;
        // wrappingStrategy: IEditorOption<wrappingStrategy, "simple" | "advanced">;
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
      $("#markdown-submit").on('click', function(event) {
        console.log(editor)
        console.log(editor.getValue())
        $("#markdown-text").val(editor.getValue());
        $("#markdown-form").submit();
      })
    });
  </script>
@endsection
