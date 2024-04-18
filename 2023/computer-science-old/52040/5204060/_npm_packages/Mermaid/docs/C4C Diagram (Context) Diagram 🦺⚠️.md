[![memo](https://github.githubassets.com/images/icons/emoji/memo.png) Edit this Page](https://github.com/mermaid-js/mermaid/blob/develop/docs/c4c.md)

## [C4 Diagrams](https://mermaid-js.github.io/mermaid/#/c4c?id=c4-diagrams)

**Edit this Page** [![N|Solid](https://mermaid-js.github.io/mermaid/img/GitHub-Mark-32px.png)](https://github.com/mermaid-js/mermaid/blob/develop/docs/gitgraph.md)

> C4 Diagram: This is an experimental diagram for now. The syntax and properties can change in future releases. Proper documentation will be provided when the syntax is stable.

Mermaid's c4 diagram syntax is compatible with plantUML. See example below:

```
    C4Context      title System Context diagram for Internet Banking System      Enterprise_Boundary(b0, "BankBoundary0") {        Person(customerA, "Banking Customer A", "A customer of the bank, with personal bank accounts.")        Person(customerB, "Banking Customer B")              Person_Ext(customerC, "Banking Customer C", "desc")                    Person(customerD, "Banking Customer D", "A customer of the bank, <br/> with personal bank accounts.")        System(SystemAA, "Internet Banking System", "Allows customers to view information about their bank accounts, and make payments.")          Enterprise_Boundary(b1, "BankBoundary") {                   SystemDb_Ext(SystemE, "Mainframe Banking System", "Stores all of the core banking information about customers, accounts, transactions, etc.")                System_Boundary(b2, "BankBoundary2") {              System(SystemA, "Banking System A")              System(SystemB, "Banking System B", "A system of the bank, with personal bank accounts. next line.")                  }           System_Ext(SystemC, "E-mail system", "The internal Microsoft Exchange e-mail system.")           SystemDb(SystemD, "Banking System D Database", "A system of the bank, with personal bank accounts.")           Boundary(b3, "BankBoundary3", "boundary") {              SystemQueue(SystemF, "Banking System F Queue", "A system of the bank.")                    SystemQueue_Ext(SystemG, "Banking System G Queue", "A system of the bank, with personal bank accounts.")           }        }      }            BiRel(customerA, SystemAA, "Uses")      BiRel(SystemAA, SystemE, "Uses")      Rel(SystemAA, SystemC, "Sends e-mails", "SMTP")      Rel(SystemC, customerA, "Sends e-mails to")      UpdateElementStyle(customerA, $fontColor="red", $bgColor="grey", $borderColor="red")      UpdateRelStyle(customerA, SystemAA, $textColor="blue", $lineColor="blue", $offsetX="5")      UpdateRelStyle(SystemAA, SystemE, $textColor="blue", $lineColor="blue", $offsetY="-10")      UpdateRelStyle(SystemAA, SystemC, $textColor="blue", $lineColor="blue", $offsetY="-40", $offsetX="-50")      UpdateRelStyle(SystemC, customerA, $textColor="red", $lineColor="red", $offsetX="-50", $offsetY="20")            UpdateLayoutConfig($c4ShapeInRow="3", $c4BoundaryInRow="1")
```

<<person>>Banking Customer AA customer of the bank,with personal bankaccounts.<<person>>Banking Customer B<<external_person>>Banking Customer Cdesc<<person>>Banking Customer DA customer of the bank, with personal bank accounts.<<system>>Internet Banking SystemAllows customers to viewinformation about theirbank accounts, and makepayments.<<external_system_db>>Mainframe BankingSystemStores all of the corebanking information aboutcustomers, accounts,transactions, etc.<<external_system>>E-mail systemThe internal MicrosoftExchange e-mail system.<<system_db>>Banking System DDatabaseA system of the bank, withpersonal bank accounts.<<system>>Banking System A<<system>>Banking System BA system of the bank, withpersonal bank accounts.next line.BankBoundary2\[ENTERPRISE\]<<system_queue>>Banking System FQueueA system of the bank.<<external_system_queue>>Banking System GQueueA system of the bank, withpersonal bank accounts.BankBoundary3\[boundary\]BankBoundary\[ENTERPRISE\]BankBoundary0\[ENTERPRISE\]UsesUsesSends e-mails\[SMTP\]Sends e-mails toSystem Context diagram for Internet Banking System

For an example, see the source code demos/index.html

5 types of C4 charts are supported.

- System Context (C4Context)
- Container diagram (C4Container)
- Component diagram (C4Component)
- Dynamic diagram (C4Dynamic)
- Deployment diagram (C4Deployment)

Please refer to the linked document [C4-PlantUML syntax](https://github.com/plantuml-stdlib/C4-PlantUML/blob/master/README.md) for how to write the c4 diagram.

C4 diagram is fixed style, such as css color, so different css is not provided under different skins. updateElementStyle and UpdateElementStyle are written in the diagram last part. updateElementStyle is inconsistent with the original definition and updates the style of the relationship, including the offset of the text label relative to the original position.

The layout does not use a fully automated layout algorithm. The position of shapes is adjusted by changing the order in which statements are written. So there is no plan to support the following Layout statements. The number of shapes per row and the number of boundaries can be adjusted using UpdateLayoutConfig.

- Layout
- - Lay_U, Lay_Up
- - Lay_D, Lay_Down
- - Lay_L, Lay_Left
- - Lay_R, Lay_Right

The following unfinished features are not supported in the short term.

- sprite
- tags
- link
- Legend
- System Context
- - Person(alias, label, ?descr, ?sprite, ?tags, $link)
- - Person_Ext
- - System(alias, label, ?descr, ?sprite, ?tags, $link)
- - SystemDb
- - SystemQueue
- - System_Ext
- - SystemDb_Ext
- - SystemQueue_Ext
- - Boundary(alias, label, ?type, ?tags, $link)
- - Enterprise_Boundary(alias, label, ?tags, $link)
- - System_Boundary
- Container diagram
- - Container(alias, label, ?techn, ?descr, ?sprite, ?tags, $link)
- - ContainerDb
- - ContainerQueue
- - Container_Ext
- - ContainerDb_Ext
- - ContainerQueue_Ext
- - Container_Boundary(alias, label, ?tags, $link)
- Component diagram
- - Component(alias, label, ?techn, ?descr, ?sprite, ?tags, $link)
- - ComponentDb
- - ComponentQueue
- - Component_Ext
- - ComponentDb_Ext
- - ComponentQueue_Ext
- Dynamic diagram
- - RelIndex(index, from, to, label, ?tags, $link)
- Deployment diagram
- - Deployment_Node(alias, label, ?type, ?descr, ?sprite, ?tags, $link)
- - Node(alias, label, ?type, ?descr, ?sprite, ?tags, $link): short name of Deployment_Node()
- - Node_L(alias, label, ?type, ?descr, ?sprite, ?tags, $link): left aligned Node()
- - Node_R(alias, label, ?type, ?descr, ?sprite, ?tags, $link): right aligned Node()
- Relationship Types
- - Rel(from, to, label, ?techn, ?descr, ?sprite, ?tags, $link)
- - BiRel (bidirectional relationship)
- - Rel_U, Rel_Up
- - Rel_D, Rel_Down
- - Rel_L, Rel_Left
- - Rel_R, Rel_Right
- - Rel_Back
- - RelIndex \* Compatible with C4-Plantuml syntax, but ignores the index parameter. The sequence number is determined by the order in which the rel statements are written.

- Custom tags/stereotypes support and skinparam updates
- - AddElementTag(tagStereo, ?bgColor, ?fontColor, ?borderColor, ?shadowing, ?shape, ?sprite, ?techn, ?legendText, ?legendSprite): Introduces a new element tag. The styles of the tagged elements are updated and the tag is displayed in the calculated legend.
- - AddRelTag(tagStereo, ?textColor, ?lineColor, ?lineStyle, ?sprite, ?techn, ?legendText, ?legendSprite): Introduces a new Relationship tag. The styles of the tagged relationships are updated and the tag is displayed in the calculated legend.
- - UpdateElementStyle(elementName, ?bgColor, ?fontColor, ?borderColor, ?shadowing, ?shape, ?sprite, ?techn, ?legendText, ?legendSprite): This call updates the default style of the elements (component, ...) and creates no additional legend entry.
- - UpdateRelStyle(from, to, ?textColor, ?lineColor, ?offsetX, ?offsetY): This call updates the default relationship colors and creates no additional legend entry. Two new parameters, offsetX and offsetY, are added to set the offset of the original position of the text.
- - RoundedBoxShape(): This call returns the name of the rounded box shape and can be used as ?shape argument.
- - EightSidedShape(): This call returns the name of the eight sided shape and can be used as ?shape argument.
- - DashedLine(): This call returns the name of the dashed line and can be used as ?lineStyle argument.
- - DottedLine(): This call returns the name of the dotted line and can be used as ?lineStyle argument.
- - BoldLine(): This call returns the name of the bold line and can be used as ?lineStyle argument.
- - UpdateLayoutConfig(?c4ShapeInRow, ?c4BoundaryInRow): New. This call updates the default c4ShapeInRow(4) and c4BoundaryInRow(2).

There are two ways to assign parameters with question marks. One uses the non-named parameter assignment method in the order of the parameters, and the other uses the named parameter assignment method, where the name must start with a $ symbol.

Example: UpdateRelStyle(from, to, ?textColor, ?lineColor, ?offsetX, ?offsetY)

```
UpdateRelStyle(customerA, bankA, "red", "blue", "-40", "60")
UpdateRelStyle(customerA, bankA, $offsetX="-40", $offsetY="60", $lineColor="blue", $textColor="red")
UpdateRelStyle(customerA, bankA, $offsetY="60")
```

## [C4 System Context Diagram (C4Context)](https://mermaid-js.github.io/mermaid/#/c4c?id=c4-system-context-diagram-c4context)

```
    C4Context      title System Context diagram for Internet Banking System      Enterprise_Boundary(b0, "BankBoundary0") {        Person(customerA, "Banking Customer A", "A customer of the bank, with personal bank accounts.")        Person(customerB, "Banking Customer B")              Person_Ext(customerC, "Banking Customer C", "desc")                    Person(customerD, "Banking Customer D", "A customer of the bank, <br/> with personal bank accounts.")        System(SystemAA, "Internet Banking System", "Allows customers to view information about their bank accounts, and make payments.")          Enterprise_Boundary(b1, "BankBoundary") {                   SystemDb_Ext(SystemE, "Mainframe Banking System", "Stores all of the core banking information about customers, accounts, transactions, etc.")                System_Boundary(b2, "BankBoundary2") {              System(SystemA, "Banking System A")              System(SystemB, "Banking System B", "A system of the bank, with personal bank accounts. next line.")                  }           System_Ext(SystemC, "E-mail system", "The internal Microsoft Exchange e-mail system.")           SystemDb(SystemD, "Banking System D Database", "A system of the bank, with personal bank accounts.")           Boundary(b3, "BankBoundary3", "boundary") {              SystemQueue(SystemF, "Banking System F Queue", "A system of the bank.")                    SystemQueue_Ext(SystemG, "Banking System G Queue", "A system of the bank, with personal bank accounts.")           }        }      }            BiRel(customerA, SystemAA, "Uses")      BiRel(SystemAA, SystemE, "Uses")      Rel(SystemAA, SystemC, "Sends e-mails", "SMTP")      Rel(SystemC, customerA, "Sends e-mails to")      UpdateElementStyle(customerA, $fontColor="red", $bgColor="grey", $borderColor="red")      UpdateRelStyle(customerA, SystemAA, $textColor="blue", $lineColor="blue", $offsetX="5")      UpdateRelStyle(SystemAA, SystemE, $textColor="blue", $lineColor="blue", $offsetY="-10")      UpdateRelStyle(SystemAA, SystemC, $textColor="blue", $lineColor="blue", $offsetY="-40", $offsetX="-50")      UpdateRelStyle(SystemC, customerA, $textColor="red", $lineColor="red", $offsetX="-50", $offsetY="20")            UpdateLayoutConfig($c4ShapeInRow="3", $c4BoundaryInRow="1")
```

<<person>>Banking Customer AA customer of the bank,with personal bankaccounts.<<person>>Banking Customer B<<external_person>>Banking Customer Cdesc<<person>>Banking Customer DA customer of the bank, with personal bank accounts.<<system>>Internet Banking SystemAllows customers to viewinformation about theirbank accounts, and makepayments.<<external_system_db>>Mainframe BankingSystemStores all of the corebanking information aboutcustomers, accounts,transactions, etc.<<external_system>>E-mail systemThe internal MicrosoftExchange e-mail system.<<system_db>>Banking System DDatabaseA system of the bank, withpersonal bank accounts.<<system>>Banking System A<<system>>Banking System BA system of the bank, withpersonal bank accounts.next line.BankBoundary2\[ENTERPRISE\]<<system_queue>>Banking System FQueueA system of the bank.<<external_system_queue>>Banking System GQueueA system of the bank, withpersonal bank accounts.BankBoundary3\[boundary\]BankBoundary\[ENTERPRISE\]BankBoundary0\[ENTERPRISE\]UsesUsesSends e-mails\[SMTP\]Sends e-mails toSystem Context diagram for Internet Banking System

## [C4 Container diagram (C4Container)](https://mermaid-js.github.io/mermaid/#/c4c?id=c4-container-diagram-c4container)

```
    C4Container    title Container diagram for Internet Banking System    System_Ext(email_system, "E-Mail System", "The internal Microsoft Exchange system", $tags="v1.0")    Person(customer, Customer, "A customer of the bank, with personal bank accounts", $tags="v1.0")    Container_Boundary(c1, "Internet Banking") {        Container(spa, "Single-Page App", "JavaScript, Angular", "Provides all the Internet banking functionality to cutomers via their web browser")        Container_Ext(mobile_app, "Mobile App", "C#, Xamarin", "Provides a limited subset of the Internet banking functionality to customers via their mobile device")        Container(web_app, "Web Application", "Java, Spring MVC", "Delivers the static content and the Internet banking SPA")        ContainerDb(database, "Database", "SQL Database", "Stores user registration information, hashed auth credentials, access logs, etc.")        ContainerDb_Ext(backend_api, "API Application", "Java, Docker Container", "Provides Internet banking functionality via API")    }    System_Ext(banking_system, "Mainframe Banking System", "Stores all of the core banking information about customers, accounts, transactions, etc.")    Rel(customer, web_app, "Uses", "HTTPS")    UpdateRelStyle(customer, web_app, $offsetY="60", $offsetX="90")         Rel(customer, spa, "Uses", "HTTPS")    UpdateRelStyle(customer, spa, $offsetY="-40")        Rel(customer, mobile_app, "Uses")    UpdateRelStyle(customer, mobile_app, $offsetY="-30")     Rel(web_app, spa, "Delivers")    UpdateRelStyle(web_app, spa, $offsetX="130")     Rel(spa, backend_api, "Uses", "async, JSON/HTTPS")    Rel(mobile_app, backend_api, "Uses", "async, JSON/HTTPS")    Rel_Back(database, backend_api, "Reads from and writes to", "sync, JDBC")    Rel(email_system, customer, "Sends e-mails to")    UpdateRelStyle(email_system, customer, $offsetX="-45")        Rel(backend_api, email_system, "Sends e-mails using", "sync, SMTP")    UpdateRelStyle(backend_api, email_system, $offsetY="-60")        Rel(backend_api, banking_system, "Uses", "sync/async, XML/HTTPS")    UpdateRelStyle(backend_api, banking_system, $offsetY="-50", $offsetX="-140") 
```

<<external_system>>E-Mail SystemThe internal MicrosoftExchange system<<person>>CustomerA customer of the bank,with personal bankaccounts<<external_system>>Mainframe BankingSystemStores all of the corebanking information aboutcustomers, accounts,transactions, etc.<<container>>Single-Page AppProvides all the Internetbanking functionality tocutomers via their webbrowser<<external_container>>Mobile AppProvides a limited subsetof the Internet bankingfunctionality to customersvia their mobile device<<container>>Web ApplicationDelivers the static contentand the Internet bankingSPA<<container_db>>DatabaseStores user registrationinformation, hashed authcredentials, access logs,etc.<<external_container_db>>API ApplicationProvides Internet bankingfunctionality via APIInternet Banking\[CONTAINER\]Uses\[HTTPS\]Uses\[HTTPS\]UsesDeliversUses\[async, JSON/HTTPS\]Uses\[async, JSON/HTTPS\]Reads from and writes to\[sync, JDBC\]Sends e-mails toSends e-mails using\[sync, SMTP\]Uses\[sync/async, XML/HTTPS\]Container diagram for Internet Banking System

## [C4 Component diagram (C4Component)](https://mermaid-js.github.io/mermaid/#/c4c?id=c4-component-diagram-c4component)

```
    C4Component    title Component diagram for Internet Banking System - API Application    Container(spa, "Single Page Application", "javascript and angular", "Provides all the internet banking functionality to customers via their web browser.")    Container(ma, "Mobile App", "Xamarin", "Provides a limited subset ot the internet banking functionality to customers via their mobile mobile device.")    ContainerDb(db, "Database", "Relational Database Schema", "Stores user registration information, hashed authentication credentials, access logs, etc.")    System_Ext(mbs, "Mainframe Banking System", "Stores all of the core banking information about customers, accounts, transactions, etc.")    Container_Boundary(api, "API Application") {        Component(sign, "Sign In Controller", "MVC Rest Controlle", "Allows users to sign in to the internet banking system")        Component(accounts, "Accounts Summary Controller", "MVC Rest Controller", "Provides customers with a summary of their bank accounts")        Component(security, "Security Component", "Spring Bean", "Provides functionality related to singing in, changing passwords, etc.")        Component(mbsfacade, "Mainframe Banking System Facade", "Spring Bean", "A facade onto the mainframe banking system.")        Rel(sign, security, "Uses")        Rel(accounts, mbsfacade, "Uses")        Rel(security, db, "Read & write to", "JDBC")        Rel(mbsfacade, mbs, "Uses", "XML/HTTPS")    }    Rel_Back(spa, sign, "Uses", "JSON/HTTPS")    Rel(spa, accounts, "Uses", "JSON/HTTPS")    Rel(ma, sign, "Uses", "JSON/HTTPS")    Rel(ma, accounts, "Uses", "JSON/HTTPS")    UpdateRelStyle(spa, sign, $offsetY="-40")     UpdateRelStyle(spa, accounts, $offsetX="40", $offsetY="40")    UpdateRelStyle(ma, sign, $offsetX="-90", $offsetY="40")    UpdateRelStyle(ma, accounts, $offsetY="-40")        UpdateRelStyle(sign, security, $offsetX="-160", $offsetY="10")        UpdateRelStyle(accounts, mbsfacade, $offsetX="140", $offsetY="10")        UpdateRelStyle(security, db, $offsetY="-40")        UpdateRelStyle(mbsfacade, mbs, $offsetY="-40")
```

<<container>>Single Page ApplicationProvides all the internetbanking functionality tocustomers via their webbrowser.<<container>>Mobile AppProvides a limited subsetot the internet bankingfunctionality to customersvia their mobile mobiledevice.<<container_db>>DatabaseStores user registrationinformation, hashedauthentication credentials,access logs, etc.<<external_system>>Mainframe BankingSystemStores all of the corebanking information aboutcustomers, accounts,transactions, etc.<<component>>Sign In ControllerAllows users to sign in tothe internet bankingsystem<<component>>Accounts SummaryControllerProvides customers with asummary of their bankaccounts<<component>>Security ComponentProvides functionalityrelated to singing in,changing passwords, etc.<<component>>Mainframe BankingSystem FacadeA facade onto themainframe bankingsystem.API Application\[CONTAINER\]UsesUsesRead & write to\[JDBC\]Uses\[XML/HTTPS\]Uses\[JSON/HTTPS\]Uses\[JSON/HTTPS\]Uses\[JSON/HTTPS\]Uses\[JSON/HTTPS\]Component diagram for Internet Banking System - API Application

## [C4 Dynamic diagram (C4Dynamic)](https://mermaid-js.github.io/mermaid/#/c4c?id=c4-dynamic-diagram-c4dynamic)

```
    C4Dynamic    title Dynamic diagram for Internet Banking System - API Application    ContainerDb(c4, "Database", "Relational Database Schema", "Stores user registration information, hashed authentication credentials, access logs, etc.")    Container(c1, "Single-Page Application", "JavaScript and Angular", "Provides all of the Internet banking functionality to customers via their web browser.")    Container_Boundary(b, "API Application") {      Component(c3, "Security Component", "Spring Bean", "Provides functionality Related to signing in, changing passwords, etc.")      Component(c2, "Sign In Controller", "Spring MVC Rest Controller", "Allows users to sign in to the Internet Banking System.")    }    Rel(c1, c2, "Submits credentials to", "JSON/HTTPS")    Rel(c2, c3, "Calls isAuthenticated() on")    Rel(c3, c4, "select * from users where username = ?", "JDBC")    UpdateRelStyle(c1, c2, $textColor="red", $offsetY="-40")    UpdateRelStyle(c2, c3, $textColor="red", $offsetX="-40", $offsetY="60")    UpdateRelStyle(c3, c4, $textColor="red", $offsetY="-40", $offsetX="10")
```

<<container_db>>DatabaseStores user registrationinformation, hashedauthentication credentials,access logs, etc.<<container>>Single-Page ApplicationProvides all of the Internetbanking functionality tocustomers via their webbrowser.<<component>>Security ComponentProvides functionalityRelated to signing in,changing passwords, etc.<<component>>Sign In ControllerAllows users to sign in tothe Internet BankingSystem.API Application\[CONTAINER\]1: Submits credentials to\[JSON/HTTPS\]2: Calls isAuthenticated() on3: select \* from users where username = ?\[JDBC\]Dynamic diagram for Internet Banking System - API Application

## [C4 Deployment diagram (C4Deployment)](https://mermaid-js.github.io/mermaid/#/c4c?id=c4-deployment-diagram-c4deployment)

```
    C4Deployment    title Deployment Diagram for Internet Banking System - Live    Deployment_Node(mob, "Customer's mobile device", "Apple IOS or Android"){        Container(mobile, "Mobile App", "Xamarin", "Provides a limited subset of the Internet Banking functionality to customers via their mobile device.")    }    Deployment_Node(comp, "Customer's computer", "Mircosoft Windows or Apple macOS"){        Deployment_Node(browser, "Web Browser", "Google Chrome, Mozilla Firefox,<br/> Apple Safari or Microsoft Edge"){            Container(spa, "Single Page Application", "JavaScript and Angular", "Provides all of the Internet Banking functionality to customers via their web browser.")        }    }    Deployment_Node(plc, "Big Bank plc", "Big Bank plc data center"){        Deployment_Node(dn, "bigbank-api*** x8", "Ubuntu 16.04 LTS"){            Deployment_Node(apache, "Apache Tomcat", "Apache Tomcat 8.x"){                Container(api, "API Application", "Java and Spring MVC", "Provides Internet Banking functionality via a JSON/HTTPS API.")            }        }        Deployment_Node(bb2, "bigbank-web*** x4", "Ubuntu 16.04 LTS"){            Deployment_Node(apache2, "Apache Tomcat", "Apache Tomcat 8.x"){                Container(web, "Web Application", "Java and Spring MVC", "Delivers the static content and the Internet Banking single page application.")            }        }        Deployment_Node(bigbankdb01, "bigbank-db01", "Ubuntu 16.04 LTS"){            Deployment_Node(oracle, "Oracle - Primary", "Oracle 12c"){                ContainerDb(db, "Database", "Relational Database Schema", "Stores user registration information, hashed authentication credentials, access logs, etc.")            }        }        Deployment_Node(bigbankdb02, "bigbank-db02", "Ubuntu 16.04 LTS") {            Deployment_Node(oracle2, "Oracle - Secondary", "Oracle 12c") {                ContainerDb(db2, "Database", "Relational Database Schema", "Stores user registration information, hashed authentication credentials, access logs, etc.")            }        }    }    Rel(mobile, api, "Makes API calls to", "json/HTTPS")    Rel(spa, api, "Makes API calls to", "json/HTTPS")    Rel_U(web, spa, "Delivers to the customer's web browser")    Rel(api, db, "Reads from and writes to", "JDBC")    Rel(api, db2, "Reads from and writes to", "JDBC")    Rel_R(db, db2, "Replicates data to")    UpdateRelStyle(spa, api, $offsetY="-40")    UpdateRelStyle(web, spa, $offsetY="-40")    UpdateRelStyle(api, db, $offsetY="-20", $offsetX="5")    UpdateRelStyle(api, db2, $offsetX="-40", $offsetY="-20")    UpdateRelStyle(db, db2, $offsetY="-10")
```

<<container>>Mobile AppProvides a limited subsetof the Internet Bankingfunctionality to customersvia their mobile device.Customer's mobile device\[Apple IOS or Android\]<<container>>Single Page ApplicationProvides all of the InternetBanking functionality tocustomers via their webbrowser.Web Browser\[Google Chrome, Mozilla Firefox, Apple Safari or Microsoft Edge\]Customer's computer\[Mircosoft Windows or Apple macOS\]<<container>>API ApplicationProvides Internet Bankingfunctionality via aJSON/HTTPS API.Apache Tomcat\[Apache Tomcat 8.x\]bigbank-api\*\*\* x8\[Ubuntu 16.04 LTS\]<<container>>Web ApplicationDelivers the static contentand the Internet Bankingsingle page application.Apache Tomcat\[Apache Tomcat 8.x\]bigbank-web\*\*\* x4\[Ubuntu 16.04 LTS\]<<container_db>>DatabaseStores user registrationinformation, hashedauthentication credentials,access logs, etc.Oracle - Primary\[Oracle 12c\]bigbank-db01\[Ubuntu 16.04 LTS\]<<container_db>>DatabaseStores user registrationinformation, hashedauthentication credentials,access logs, etc.Oracle - Secondary\[Oracle 12c\]bigbank-db02\[Ubuntu 16.04 LTS\]Big Bank plc\[Big Bank plc data center\]Makes API calls to\[json/HTTPS\]Makes API calls to\[json/HTTPS\]Delivers to the customer's web browserReads from and writes to\[JDBC\]Reads from and writes to\[JDBC\]Replicates data toDeployment Diagram for Internet Banking System - Live
