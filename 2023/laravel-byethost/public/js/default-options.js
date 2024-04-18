window.defaultOptions = {
  bootstrapTreeView: {
    data: {}, //data属性是必须的，是一个对象数组    Array of Objects.
    // color: "", //所有节点使用的默认前景色，这个颜色会被节点数据上的backColor属性覆盖.        String
    // backColor: "#000000", //所有节点使用的默认背景色，这个颜色会被节点数据上的backColor属性覆盖.     String
    // borderColor: "#000000", //边框颜色。如果不想要可见的边框，则可以设置showBorder为false。        String
    // nodeIcon: "glyphicon glyphicon-stop", //所有节点的默认图标
    nodeIcon: "bi bi-tag", //所有节点的默认图标
    // checkedIcon: "glyphicon glyphicon-check", //节点被选中时显示的图标         String
    checkedIcon: "bi bi-check-square", //节点被选中时显示的图标         String
    // collapseIcon: "glyphicon glyphicon-minus", //节点被折叠时显示的图标        String
    collapseIcon: "bi bi-chevron-right", //节点被折叠时显示的图标        String
    // expandIcon: "glyphicon glyphicon-plus", //节点展开时显示的图标        String
    expandIcon: "bi bi-chevron-down", //节点展开时显示的图标        String
    // emptyIcon: "glyphicon", //当节点没有子节点的时候显示的图标              String
    emptyIcon: "glyphicon", //当节点没有子节点的时候显示的图标              String
    enableLinks: true, //是否将节点文本呈现为超链接。前提是在每个节点基础上，必须在数据结构中提供href值。        Boolean
    highlightSearchResults: true, //是否高亮显示被选中的节点        Boolean
    // levels: 2, //设置整棵树的层级数  Integer
    levels: 3, //设置整棵树的层级数  Integer
    multiSelect: false, //是否可以同时选择多个节点      Boolean
    // onhoverColor: "#F5F5F5", //光标停在节点上激活的默认背景色      String
    // selectedIcon: "glyphicon glyphicon-stop", //节点被选中时显示的图标     String
    selectedIcon: "bi bi-check-square", //节点被选中时显示的图标     String
    // searchResultBackColor: "", //当节点被选中时的背景色
    // searchResultColor: "", //当节点被选中时的前景色
    // selectedBackColor: "", //当节点被选中时的背景色
    // selectedColor: "#FFFFFF", //当节点被选中时的前景色
    // showBorder: true, //是否在节点周围显示边框
    // showCheckbox: false, //是否在节点上显示复选框
    showCheckbox: false, //是否在节点上显示复选框
    showIcon: false, //是否显示节点图标
    showTags: true, //是否显示每个节点右侧的标记。前提是这个标记必须在每个节点基础上提供数据结构中的值。
    // uncheckedIcon: "glyphicon glyphicon-unchecked", //未选中的复选框时显示的图标，可以与showCheckbox一起使用}
    uncheckedIcon: "bi bi-square", //未选中的复选框时显示的图标，可以与showCheckbox一起使用}
  },
  monacoEditor: {
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
    automaticLayout: true,// IEditorOption<automaticLayout, boolean>;
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
    contributions: true, // 启用编辑器的贡献功能
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
    selectOnLineNumbers: true, // IEditorOption<selectOnLineNumbers, boolean>; // 显示行号
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
    tabIndex: 2, // IEditorOption<tabIndex, number>; // tab 缩进长度
    // unfoldOnClickAfterEndOfLine: IEditorOption<unfoldOnClickAfterEndOfLine, boolean>;
    // unicodeHighlight: IEditorOption<unicodeHighlighting, any>;
    // unusualLineTerminators: IEditorOption<unusualLineTerminators, "auto" | "off" | "prompt">;
    // useShadowDOM: IEditorOption<useShadowDOM, boolean>;
    // useTabStops: IEditorOption<useTabStops, boolean>;
    // wordBreak: IEditorOption<wordBreak, "normal" | "keepAll">;
    // wordSeparators: IEditorOption<wordSeparators, string>;
    wordWrap: true, // IEditorOption<wordWrap, "on" | "off" | "wordWrapColumn" | "bounded">; // 自动换行
    // wordWrapBreakAfterCharacters: IEditorOption<wordWrapBreakAfterCharacters, string>;
    // wordWrapBreakBeforeCharacters: IEditorOption<wordWrapBreakBeforeCharacters, string>;
    // wordWrapColumn: IEditorOption<wordWrapColumn, number>;
    // wordWrapOverride1: IEditorOption<wordWrapOverride1, "on" | "off" | "inherit">;
    // wordWrapOverride2: IEditorOption<wordWrapOverride2, "on" | "off" | "inherit">;
    // wrappingIndent: IEditorOption<wrappingIndent, WrappingIndent>;
    // wrappingInfo: IEditorOption<wrappingInfo, EditorWrappingInfo>;
    // wrappingStrategy: IEditorOption<wrappingStrategy, "simple" | "advanced">;
  },
  tocbot: {
    // Where to render the table of contents.
    // 把目录显示在那个区域
    tocSelector: '.js-toc',
    // Or, you can pass in a DOM node instead
    // tocElement: element,
    // Where to grab the headings to build the table of contents.
    // 生成目录的文本源在哪儿
    contentSelector: '.js-toc-content',
    // Or, you can pass in a DOM node instead
    // contentElement: element,
    // Which headings to grab inside of the contentSelector element.
    // 生成那些标题的级别
    headingSelector: 'h1, h2, h3',
    // Headings that match the ignoreSelector will be skipped.
    ignoreSelector: '.js-toc-ignore',
    // For headings inside relative or absolute positioned containers within content
    hasInnerContainers: false,
    // Main class to add to links.
    linkClass: 'toc-link',
    // Extra classes to add to links.
    extraLinkClasses: '',
    // Class to add to active links,
    // the link corresponding to the top most heading on the page.
    activeLinkClass: 'is-active-link',
    // Main class to add to lists.
    listClass: 'toc-list',
    // Extra classes to add to lists.
    extraListClasses: '',
    // Class that gets added when a list should be collapsed.
    isCollapsedClass: 'is-collapsed',
    // Class that gets added when a list should be able
    // to be collapsed but isn't necessarily collapsed.
    collapsibleClass: 'is-collapsible',
    // Class to add to list items.
    listItemClass: 'toc-list-item',
    // Class to add to active list items.
    activeListItemClass: 'is-active-li',
    // How many heading levels should not be collapsed.
    // For example, number 6 will show everything since
    // there are only 6 heading levels and number 0 will collapse them all.
    // The sections that are hidden will open
    // and close as you scroll to headings within them.
    collapseDepth: 0,
    // Smooth scrolling enabled.
    scrollSmooth: true,
    // Smooth scroll duration.
    scrollSmoothDuration: 420,
    // Smooth scroll offset.
    scrollSmoothOffset: 0,
    // Callback for scroll end.
    scrollEndCallback: function (e) { },
    // Headings offset between the headings and the top of the document (this is meant for minor adjustments).
    headingsOffset: 1,
    // Timeout between events firing to make sure it's
    // not too rapid (for performance reasons).
    throttleTimeout: 50,
    // Element to add the positionFixedClass to.
    positionFixedSelector: null,
    // Fixed position class to add to make sidebar fixed after scrolling
    // down past the fixedSidebarOffset.
    positionFixedClass: 'is-position-fixed',
    // fixedSidebarOffset can be any number but by default is set
    // to auto which sets the fixedSidebarOffset to the sidebar
    // element's offsetTop from the top of the document on init.
    fixedSidebarOffset: 'auto',
    // includeHtml can be set to true to include the HTML markup from the
    // heading node instead of just including the textContent.
    includeHtml: false,
    // includeTitleTags automatically sets the html title tag of the link
    // to match the title. This can be useful for SEO purposes or
    // when truncating titles.
    includeTitleTags: false,
    // onclick function to apply to all links in toc. will be called with
    // the event as the first parameter, and this can be used to stop,
    // propagation, prevent default or perform action
    onClick: function (e) { },
    // orderedList can be set to false to generate unordered lists (ul)
    // instead of ordered lists (ol)
    orderedList: true,
    // If there is a fixed article scroll container, set to calculate titles' offset
    scrollContainer: null,
    // prevent ToC DOM rendering if it's already rendered by an external system
    skipRendering: false,
    // Optional callback to change heading labels.
    // For example it can be used to cut down and put ellipses on multiline headings you deem too long.
    // Called each time a heading is parsed. Expects a string and returns the modified label to display.
    // Additionally, the attribute `data-heading-label` may be used on a heading to specify
    // a shorter string to be used in the TOC.
    // function (string) => string
    headingLabelCallback: false,
    // ignore headings that are hidden in DOM
    ignoreHiddenElements: false,
    // Optional callback to modify properties of parsed headings.
    // The heading element is passed in node parameter and information parsed by default parser is provided in obj parameter.
    // Function has to return the same or modified obj.
    // The heading will be excluded from TOC if nothing is returned.
    // function (object, HTMLElement) => object | void
    headingObjectCallback: null,
    // Set the base path, useful if you use a `base` tag in `head`.
    basePath: '',
    // Only takes affect when `tocSelector` is scrolling,
    // keep the toc scroll position in sync with the content.
    disableTocScrollSync: false,
    // Offset for the toc scroll (top) position when scrolling the page.
    // Only effective if `disableTocScrollSync` is false.
    tocScrollOffset: 0,
  },
}
