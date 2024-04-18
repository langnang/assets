 [![memo](https://github.githubassets.com/images/icons/emoji/memo.png) Edit this Page](https://github.com/mermaid-js/mermaid/blob/develop/docs/user-journey.md)

## [User Journey Diagram](https://mermaid-js.github.io/mermaid/#/user-journey?id=user-journey-diagram)

> User journeys describe at a high level of detail exactly what steps different users take to complete a specific task within a system, application or website. This technique shows the current (as-is) user workflow, and reveals areas of improvement for the to-be workflow. (Wikipedia)

Mermaid can render user journey diagrams:

```
journey    title My working day    section Go to work      Make tea: 5: Me      Go upstairs: 3: Me      Do work: 1: Me, Cat    section Go home      Go downstairs: 5: Me      Sit down: 5: Me
```

My working dayCatMeGo to workMeMake teaMeGo upstairsMeCatDo workGo homeMeGo downstairsMeSit downMy working day

Each user journey is split into sections, these describe the part of the task the user is trying to complete.

Tasks syntax is `Task name: <score>: <comma separated list of actors>`