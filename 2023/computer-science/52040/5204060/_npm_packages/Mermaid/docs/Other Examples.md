 [![memo](https://github.githubassets.com/images/icons/emoji/memo.png) Edit this Page](https://github.com/mermaid-js/mermaid/blob/develop/docs/examples.md)

This page contains a collection of examples of diagrams and charts that can be created through mermaid and its myriad applications.

**If you wish to learn how to support mermaid on your webpage, read the [Beginner's Guide](https://mermaid-js.github.io/mermaid/#/usage?id=usage).**

**If you wish to learn about mermaid's syntax, Read the [Diagram Syntax](https://mermaid-js.github.io/mermaid/#/flowchart?id=flowcharts-basic-syntax) section.**

## [Basic Pie Chart](https://mermaid-js.github.io/mermaid/#/examples?id=basic-pie-chart)

```
pie title NETFLIX         "Time spent looking for movie" : 90         "Time spent watching it" : 10
```

NETFLIX90%10%NETFLIXTime spent looking for movieTime spent watching it

```
pie title What Voldemort doesn't have?         "FRIENDS" : 2         "FAMILY" : 3         "NOSE" : 45
```

What Voldemort doesn't have?4%6%90%What Voldemort doesn't have?FRIENDSFAMILYNOSE

## [Basic sequence diagram](https://mermaid-js.github.io/mermaid/#/examples?id=basic-sequence-diagram)

```
sequenceDiagram    Alice ->> Bob: Hello Bob, how are you?    Bob-->>John: How about you John?    Bob--x Alice: I am good thanks!    Bob-x John: I am good thanks!    Note right of John: Bob thinks a long<br/>long time, so long<br/>that the text does<br/>not fit on a row.    Bob-->Alice: Checking with John...    Alice->John: Yes... John, how are you?
```

AliceBobJohnBob thinks a longlong time, so longthat the text doesnot fit on a row.Hello Bob, how are you?How about you John?I am good thanks!I am good thanks!Checking with John...Yes... John, how are you?AliceBobJohn

## [Basic flowchart](https://mermaid-js.github.io/mermaid/#/examples?id=basic-flowchart)

```
graph LR    A[Square Rect] -- Link text --> B((Circle))    A --> C(Round Rect)    B --> D{Rhombus}    C --> D
```

Link text

Square Rect

Circle

Round Rect

Rhombus

## [Larger flowchart with some styling](https://mermaid-js.github.io/mermaid/#/examples?id=larger-flowchart-with-some-styling)

```
graph TB    sq[Square shape] --> ci((Circle shape))    subgraph A        od>Odd shape]-- Two line<br/>edge comment --> ro        di{Diamond with <br/> line break} -.-> ro(Rounded<br>square<br>shape)        di==>ro2(Rounded square shape)    end    %% Notice that no text in shape are added here instead that is appended further down    e --> od3>Really long text with linebreak<br>in an Odd shape]    %% Comments after double percent signs    e((Inner / circle<br>and some odd <br>special characters)) --> f(,.?!+-*ز)    cyr[Cyrillic]-->cyr2((Circle shape Начало));     classDef green fill:#9f6,stroke:#333,stroke-width:2px;     classDef orange fill:#f96,stroke:#333,stroke-width:4px;     class sq,e green     class di orange
```

A

Two line  
edge comment

Rounded  
square  
shape

Odd shape

Diamond with  
line break

Rounded square shape

Square shape

Circle shape

Inner / circle  
and some odd  
special characters

Really long text with linebreak  
in an Odd shape

,.?!+-\*ز

Cyrillic

Circle shape Начало

## [SequenceDiagram: Loops, alt and opt](https://mermaid-js.github.io/mermaid/#/examples?id=sequencediagram-loops-alt-and-opt)

```
sequenceDiagram    loop Daily query        Alice->>Bob: Hello Bob, how are you?        alt is sick            Bob->>Alice: Not so good :(        else is well            Bob->>Alice: Feeling fresh like a daisy        end        opt Extra response            Bob->>Alice: Thanks for asking        end    end
```

AliceBobalt\[is sick\]\[is well\]opt\[Extra response\]loop\[Daily query\]Hello Bob, how are you?Not so good :(Feeling fresh like a daisyThanks for askingAliceBob

## [SequenceDiagram: Message to self in loop](https://mermaid-js.github.io/mermaid/#/examples?id=sequencediagram-message-to-self-in-loop)

```
sequenceDiagram    participant Alice    participant Bob    Alice->>John: Hello John, how are you?    loop Healthcheck        John->>John: Fight against hypochondria    end    Note right of John: Rational thoughts<br/>prevail...    John-->>Alice: Great!    John->>Bob: How about you?    Bob-->>John: Jolly good!
```

AliceBobJohnloop\[Healthcheck\]Rational thoughtsprevail...Hello John, how are you?Fight against hypochondriaGreat!How about you?Jolly good!AliceBobJohn

## [Sequence Diagram: Blogging app service communication](https://mermaid-js.github.io/mermaid/#/examples?id=sequence-diagram-blogging-app-service-communication)

```
sequenceDiagram    participant web as Web Browser    participant blog as Blog Service    participant account as Account Service    participant mail as Mail Service    participant db as Storage    Note over web,db: The user must be logged in to submit blog posts    web->>+account: Logs in using credentials    account->>db: Query stored accounts    db->>account: Respond with query result    alt Credentials not found        account->>web: Invalid credentials    else Credentials found        account->>-web: Successfully logged in        Note over web,db: When the user is authenticated, they can now submit new posts        web->>+blog: Submit new post        blog->>db: Store post data        par Notifications            blog--)mail: Send mail to blog subscribers            blog--)db: Store in-site notifications        and Response            blog-->>-web: Successfully posted        end    end
```

Web BrowserBlog ServiceAccount ServiceMail ServiceStorageThe user must be logged in to submit blog postsWhen the user is authenticated, they can now submit new postspar\[Notifications\]\[Response\]alt\[Credentials not found\]\[Credentials found\]Logs in using credentialsQuery stored accountsRespond with query resultInvalid credentialsSuccessfully logged inSubmit new postStore post dataSend mail to blog subscribersStore in-site notificationsSuccessfully postedWeb BrowserBlog ServiceAccount ServiceMail ServiceStorage

## [A commit flow diagram.](https://mermaid-js.github.io/mermaid/#/examples?id=a-commit-flow-diagram)

mainnewbranchb20-de5349411112-08df86ctest3-a812d484-945351a6-0a82e547-02e4011