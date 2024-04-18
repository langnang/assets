 [![memo](https://github.githubassets.com/images/icons/emoji/memo.png) Edit this Page](https://github.com/mermaid-js/mermaid/blob/develop/docs/requirementDiagram.md)

> A Requirement diagram provides a visualization for requirements and their connections, to each other and other documented elements. The modeling specs follow those defined by SysML v1.6.

Rendering requirements is straightforward.

```
    requirementDiagram    requirement test_req {    id: 1    text: the test text.    risk: high    verifymethod: test    }    element test_entity {    type: simulation    }    test_entity - satisfies -> test_req
```

<<Requirement>>test\_reqId: 1Text: the test text.Risk: HighVerification: Test<<Element>>test\_entityType: simulationDoc Ref: None<<satisfies>>

## [Syntax](https://mermaid-js.github.io/mermaid/#/requirementDiagram?id=syntax)

There are three types of components to a requirement diagram: requirement, element, and relationship.

The grammar for defining each is defined below. Words denoted in angle brackets, such as `<word>`, are enumerated keywords that have options elaborated in a table. `user_defined_...` is use in any place where user input is expected.

An important note on user text: all input can be surrounded in quotes or not. For example, both `Id: "here is an example"` and `Id: here is an example` are both valid. However, users must be careful with unquoted input. The parser will fail if another keyword is detected.

### [Requirement](https://mermaid-js.github.io/mermaid/#/requirementDiagram?id=requirement)

A requirement definition contains a requirement type, name, id, text, risk, and verification method. The syntax follows:

```
<type> user_defined_name {
    id: user_defined_id
    text: user_defined text
    risk: <risk>
    verifymethod: <method>
}
```

Type, risk, and method are enumerations defined in SysML.

| Keyword | Options |
| --- | --- |
| Type | requirement, functionalRequirement, interfaceRequirement, performanceRequirement, physicalRequirement, designConstraint |
| Risk | Low, Medium, High |
| VerificationMethod | Analysis, Inspection, Test, Demonstration |

### [Element](https://mermaid-js.github.io/mermaid/#/requirementDiagram?id=element)

An element definition contains an element name, type, and document reference. These three are all user defined. The element feature is intended to be lightweight but allow requirements to be connected to portions of other documents.

```
element user_defined_name {
    type: user_defined_type
    docref: user_defined_ref
}
```

### [Relationship](https://mermaid-js.github.io/mermaid/#/requirementDiagram?id=relationship)

Relationships are comprised of a source node, destination node, and relationship type.

Each follows the definition format of

```
{name of source} - <type> -> {name of destination}
```

or

```
{name of destination} <- <type> - {name of source}
```

"name of source" and "name of destination" should be names of requirement or element nodes defined elsewhere.

A relationship type can be one of contains, copies, derives, satisfies, verifies, refines, or traces.

Each relationship is labeled in the diagram.

## [Larger Example](https://mermaid-js.github.io/mermaid/#/requirementDiagram?id=larger-example)

This example uses all features of the diagram.

```
    requirementDiagram    requirement test_req {    id: 1    text: the test text.    risk: high    verifymethod: test    }    functionalRequirement test_req2 {    id: 1.1    text: the second test text.    risk: low    verifymethod: inspection    }    performanceRequirement test_req3 {    id: 1.2    text: the third test text.    risk: medium    verifymethod: demonstration    }    interfaceRequirement test_req4 {    id: 1.2.1    text: the fourth test text.    risk: medium    verifymethod: analysis    }    physicalRequirement test_req5 {    id: 1.2.2    text: the fifth test text.    risk: medium    verifymethod: analysis    }    designConstraint test_req6 {    id: 1.2.3    text: the sixth test text.    risk: medium    verifymethod: analysis    }    element test_entity {    type: simulation    }    element test_entity2 {    type: word doc    docRef: reqs/test_entity    }    element test_entity3 {    type: "test suite"    docRef: github.com/all_the_tests    }    test_entity - satisfies -> test_req2    test_req - traces -> test_req2    test_req - contains -> test_req3    test_req3 - contains -> test_req4    test_req4 - derives -> test_req5    test_req5 - refines -> test_req6    test_entity3 - verifies -> test_req5    test_req <- copies - test_entity2
```

<<Requirement>>test\_reqId: 1Text: the test text.Risk: HighVerification: Test<<Functional Requirement>>test\_req2Id: 1.1Text: the second test text.Risk: LowVerification: Inspection<<Performance Requirement>>test\_req3Id: 1.2Text: the third test text.Risk: MediumVerification: Demonstration<<Interface Requirement>>test\_req4Id: 1.2.1Text: the fourth test text.Risk: MediumVerification: Analysis<<Physical Requirement>>test\_req5Id: 1.2.2Text: the fifth test text.Risk: MediumVerification: Analysis<<Design Constraint>>test\_req6Id: 1.2.3Text: the sixth test text.Risk: MediumVerification: Analysis<<Element>>test\_entityType: simulationDoc Ref: None<<Element>>test\_entity2Type: word docDoc Ref: reqs/test\_entity<<Element>>test\_entity3Type: test suiteDoc Ref: github.com/all\_the\_tests<<satisfies>><<traces>><<contains>><<contains>><<derives>><<refines>><<verifies>><<copies>>