@php
  $_layout = [
      'styles' => [],
      'scripts' => ['monaco-editor/min/vs/loader.js'],
  ];
@endphp

@extends('_layout.auto')
@section('content')
  <div id="container" class="container-fluid" data-role="content">

  </div>
@endsection
@section('scripts')
  <script>
    require.config({
      paths: {
        vs: 'public/vendor/monaco-editor/min/vs'
      }
    });
    require(['vs/editor/editor.main'], function() {
      var editor = monaco.editor.create(document.getElementById('container'), {
        // value: ['function x() {', '\tconsole.log("Hello world!");', '}'].join('\n'),
        value: ['Byethost:WebShell\\Admin>'].join('\n'),
        language: 'shell',
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
    });
  </script>
@endsection
