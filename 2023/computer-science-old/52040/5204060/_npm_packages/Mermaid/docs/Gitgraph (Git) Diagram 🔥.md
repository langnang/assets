 [![memo](https://github.githubassets.com/images/icons/emoji/memo.png) Edit this Page](https://github.com/mermaid-js/mermaid/blob/develop/docs/gitgraph.md)

## [Gitgraph Diagrams](https://mermaid-js.github.io/mermaid/#/gitgraph?id=gitgraph-diagrams)

**Edit this Page** [![N|Solid](https://mermaid-js.github.io/mermaid/img/GitHub-Mark-32px.png)](https://github.com/mermaid-js/mermaid/blob/develop/docs/gitgraph.md)

> A Git Graph is a pictorial representation of git commits and git actions(commands) on various branches.

These kind of diagram are particularly helpful to developers and devops teams to share their Git branching strategies. For example, it makes it easier to visualize how git flow works.

Mermaid can render Git diagrams

```
    gitGraph       commit       commit       branch develop       checkout develop       commit       commit       checkout main       merge develop       commit       commit
```

maindevelop0-ab28c2a1-4b671982-200c7be3-31399355-b2a1f456-fd2f4a2

In Mermaid, we support the basic git operations like:

-   _commit_ : Representing a new commit on the current branch.
-   _branch_ : To create & switch to a new branch, setting it as the current branch.
-   _checkout_ : To checking out an existing branch and setting it as the current branch.
-   _merge_ : To merge an existing branch onto the current branch.

With the help of these key git commands, you will be able to draw a gitgraph in Mermaid very easily and quickly. Entity names are often capitalized, although there is no accepted standard on this, and it is not required in Mermaid.

## [Syntax](https://mermaid-js.github.io/mermaid/#/gitgraph?id=syntax)

Mermaid syntax for a gitgraph is very straight-forward and simple. It follows a declarative-approach, where each commit is drawn on the timeline in the diagram, in order of its occurrences/presence in code. Basically, it follows the insertion order for each command.

First thing you do is to declare your diagram type using the **gitgraph** keyword. This `gitgraph` keyword, tells Mermaid that you wish to draw a gitgraph, and parse the diagram code accordingly.

Each gitgraph, is initialized with **_main_** branch. So unless you create a different branch, by-default the commits will go to the main branch. This is driven with how git works, where in the beginning you always start with the main branch (formerly called as **_master_** branch). And by-default, `main` branch is set as your **_current branch_**.

You make use of **_commit_** keyword to register a commit on the current branch. Let see how this works:

A simple gitgraph showing three commits on the default (**_main_**) branch:

```
    gitGraph       commit       commit       commit
```

main0-f9dc9e31-b704de32-e13bd51

If you look closely at the previous example, you can see the default branch `main` along with three commits. Also, notice that by default each commit has been given a unique & random ID. What if you wanted to give your own custom ID to a commit? Yes, it is possible to do that with Mermaid.

### [Adding custom commit id](https://mermaid-js.github.io/mermaid/#/gitgraph?id=adding-custom-commit-id)

For a given commit you may specify a custom ID at the time of declaring it using the `id` attribute, followed by `:` and your custom value within a `""` quote. For example: `commit id: "your_custom_id"`

Let us see how this works with the help of the following diagram:

```
    gitGraph       commit id: "Alpha"       commit id: "Beta"       commit id: "Gamma"
```

mainAlphaBetaGamma

In this example, we have given our custom IDs to the commits.

### [Modifying commit type](https://mermaid-js.github.io/mermaid/#/gitgraph?id=modifying-commit-type)

In Mermaid, a commit can be of three type, which render a bit different in the diagram. These types are:

-   `NORMAL` : Default commit type. Represented by a solid circle in the diagram
-   `REVERSE` : To emphasize a commit as a reverse commit. Represented by a crossed solid circle in the diagram.
-   `HIGHLIGHT` : To highlight a particular commit in the diagram. Represented by a filled rectangle in the diagram.

For a given commit you may specify its type at the time of declaring it using the `type` attribute, followed by `:` and the required type option discussed above. For example: `commit type: HIGHLIGHT`

NOTE: If no commit type is specified, `NORMAL` is picked as default.

Let us see how these different commit type look with the help of the following diagram:

```
    gitGraph       commit id: "Normal"       commit       commit id: "Reverse" type: REVERSE       commit       commit id: "Highlight" type: HIGHLIGHT       commit
```

mainNormal1-325d4d0Reverse3-5e95906Highlight5-f7d5dec

In this example, we have specified different types to each commit. Also, see how we have included both `id` and `type` together at the time of declaring our commits.

### [Adding Tags](https://mermaid-js.github.io/mermaid/#/gitgraph?id=adding-tags)

For a given commit you may decorate it as a **tag**, similar to the concept of tags or release version in git world. You can attach a custom tag at the time of declaring a commit using the `tag` attribute, followed by `:` and your custom value within `""` quote. For example: `commit tag: "your_custom_tag"`

Let us see how this works with the help of the following diagram:

```
    gitGraph       commit       commit id: "Normal" tag: "v1.0.0"       commit       commit id: "Reverse" type: REVERSE tag: "RC_1"       commit       commit id: "Highlight" type: HIGHLIGHT tag: "8.8.4"       commit
```

main0-5997d1aNormalv1.0.02-81f7f42ReverseRC\_14-95525efHighlight8.8.46-ee3eef5

In this example, we have given custom tags to the commits. Also, see how we have combined all these attributes in a single commit declaration. You can mix-match these attributes as you like.

### [Create a new branch](https://mermaid-js.github.io/mermaid/#/gitgraph?id=create-a-new-branch)

In Mermaid, in-order to create a new branch, you make use of the `branch` keyword. You also need to provide a name of the new branch. The name has to be unique and cannot be that of an existing branch. Usage example: `branch develop`

When Mermaid, reads the `branch` keyword, it creates a new branch and sets it as the current branch. Equivalent to you creating a new branch and checking it out in Git world.

Let see this in an example:

```
    gitGraph       commit       commit       branch develop       commit       commit       commit
```

maindevelop0-8b527121-336f6092-051080a3-a1ce4ee4-3acc1ca

In this example, see how we started with default `main` branch, and pushed two commits on that. Then we created the `develop` branch, and all commits afterwards are put on the `develop` branch as it became the current branch.

### [Checking out an existing branch](https://mermaid-js.github.io/mermaid/#/gitgraph?id=checking-out-an-existing-branch)

In Mermaid, in order to switch to an existing branch, you make use of the `checkout` keyword. You also need to provide a name of an existing branch. If no branch is found with the given name, it will result in console error. Usage example: `checkout develop`

When Mermaid, reads the `checkout` keyword, it finds the given branch and sets it as the current branch. Equivalent to checking out a branch in the Git world.

Let see modify our previous example:

```
    gitGraph       commit       commit       branch develop       commit       commit       commit       checkout main       commit       commit
```

maindevelop0-3b3f8731-03e68b52-01552c23-09ed0ea4-6ae87395-a96b89a6-b05a7bb

In this example, see how we started with default `main` branch, and pushed two commits on that. Then we created the `develop` branch, and all three commits afterwards are put on the `develop` branch as it became the current branch. After this we made use of the `checkout` keyword to set the current branch as `main`, and all commit that follow are registered against the current branch, i.e. `main`.

### [Merging two branches](https://mermaid-js.github.io/mermaid/#/gitgraph?id=merging-two-branches)

In Mermaid, in order to merge or join to an existing branch, you make use of the `merge` keyword. You also need to provide the name of an existing branch to merge from. If no branch is found with the given name, it will result in console error. Also, you can only merge two separate branches, and cannot merge a branch with itself. In such case an error is throw.

Usage example: `merge develop`

When Mermaid, reads the `merge` keyword, it finds the given branch and its head commit (the last commit on that branch), and joins it with the head commit on the **current branch**. Each merge results in a **_merge commit_**, represented in the diagram with **filled double circle**.

Let us modify our previous example to merge our two branches:

```
    gitGraph       commit       commit       branch develop       commit       commit       commit       checkout main       commit       commit       merge develop       commit       commit
```

maindevelop0-56ca1c41-59947752-a18e69d3-34413024-28c36895-119819f6-ac1c3848-fa716d99-8cd0f98

In this example, see how we started with default `main` branch, and pushed two commits on that. Then we created the `develop` branch, and all three commits afterwards are put on the `develop` branch as it became the current branch. After this we made use of the `checkout` keyword to set the current branch as `main`, and all commits that follow are registered against the current branch, i.e. `main`. After this we merge the `develop` branch onto the current branch `main`, resulting in a merge commit. Since the current branch at this point is still `main`, the last two commits are registered against that.

### [Cherry Pick commit from another branch](https://mermaid-js.github.io/mermaid/#/gitgraph?id=cherry-pick-commit-from-another-branch)

Similar to how 'git' allows you to cherry-pick a commit from **another branch** onto the **current** branch, Mermaid also supports this functionality. You can also cherry-pick a commit from another branch using the `cherry-pick` keyword.

To use the `cherry-pick` keyword, you must specify the id using the `id` attribute, followed by `:` and your desired commit id within a `""` quote. For example:

`cherry-pick id: "your_custom_id"`

Here, a new commit representing the cherry-pick is created on the current branch, and is visually highlighted in the diagram with a **cherry** and a tag depicting the commit id from which it is cherry-picked from.

A few important rules to note here are:

1.  You need to provide the `id` for an existing commit to be cherry-picked. If given commit id does not exist it will result in an error. For this, make use of the `commit id:$value` format of declaring commits. See the examples from above.
2.  The given commit must not exist on the current branch. The cherry-picked commit must always be a different branch than the current branch.
3.  Current branch must have at least one commit, before you can cherry-pick, otherwise it will cause an error is throw.

Let see an example:

```
    gitGraph       commit id: "ZERO"       branch develop       commit id:"A"       checkout main       commit id:"ONE"       checkout develop       commit id:"B"       checkout main       commit id:"TWO"       cherry-pick id:"A"       commit id:"THREE"       checkout develop       commit id:"C"
```

maindevelopZEROAONEBTWOcherry-pick:ATHREEC

## [Gitgraph specific configuration options](https://mermaid-js.github.io/mermaid/#/gitgraph?id=gitgraph-specific-configuration-options)

In Mermaid, you have the option to configure the gitgraph diagram. You can configure the following options:

-   `showBranches` : Boolean, default is `true`. If set to `false`, the branches are not shown in the diagram.
-   `showCommitLabel` : Boolean, default is `true`. If set to `false`, the commit labels are not shown in the diagram.
-   `mainBranchName` : String, default is `main`. The name of the default/root branch.
-   `mainBranchOrder` : Position of the main branch in the list of branches. default is `0`, meaning, by default `main` branch is the first in the order.

Let's look at them one by one.

## [Hiding Branch names and lines](https://mermaid-js.github.io/mermaid/#/gitgraph?id=hiding-branch-names-and-lines)

Sometimes you may want to hide the branch names and lines from the diagram. You can do this by using the `showBranches` keyword. By default its value is `true`. You can set it to `false` using directives.

Usage example:

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'showBranches': false}} }%%      gitGraph        commit        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash" tag:"abc"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

0-67be78e1-6997f8aashabc3-8e3e4ed4-a84d0515-a2776fa6-860862a8-dd243fe9-33bf16d11-415e22d12-a45fba014-fe02fc115-6800985

## [Commit labels Layout: Rotated or Horizontal](https://mermaid-js.github.io/mermaid/#/gitgraph?id=commit-labels-layout-rotated-or-horizontal)

Mermaid supports two types of commit labels layout. The default layout is **rotated**, which means the labels are placed below the commit circle, rotated at 45 degrees for better readability. This is particularly useful for commits with long labels.

The other option is **horizontal**, which means the labels are placed below the commit circle centred horizontally, and are not rotated. This is particularly useful for commits with short labels.

You can change the layout of the commit labels by using the `rotateCommitLabel` keyword in the directive. It defaults to `true`, which means the commit labels are rotated.

Usage example: Rotated commit labels

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'rotateCommitLabel': true}} }%%gitGraph  commit id: "feat(api): ..."  commit id: "a"  commit id: "b"  commit id: "fix(client): .extra long label.."  branch c2  commit id: "feat(modules): ..."  commit id: "test(client): ..."  checkout main  commit id: "fix(api): ..."  commit id: "ci: ..."  branch b1  commit  branch b2  commit
```

mainc2b1b2feat(api): ...abfix(client): .extra long label..feat(modules): ...test(client): ...fix(api): ...ci: ...8-51f55ca9-f8a38df

Usage example: Horizontal commit labels

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'rotateCommitLabel': false}} }%%gitGraph  commit id: "feat(api): ..."  commit id: "a"  commit id: "b"  commit id: "fix(client): .extra long label.."  branch c2  commit id: "feat(modules): ..."  commit id: "test(client): ..."  checkout main  commit id: "fix(api): ..."  commit id: "ci: ..."  branch b1  commit  branch b2  commit
```

mainc2b1b2feat(api): ...abfix(client): .extra long label..feat(modules): ...test(client): ...fix(api): ...ci: ...8-cfd9c3e9-ca4107f

## [Hiding commit labels](https://mermaid-js.github.io/mermaid/#/gitgraph?id=hiding-commit-labels)

Sometimes you may want to hide the commit labels from the diagram. You can do this by using the `showCommitLabel` keyword. By default its value is `true`. You can set it to `false` using directives.

Usage example:

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'showBranches': false,'showCommitLabel': false}} }%%      gitGraph        commit        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

## [Customizing main branch name](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-main-branch-name)

Sometimes you may want to customize the name of the main/default branch. You can do this by using the `mainBranchName` keyword. By default its value is `main`. You can set it to any string using directives.

Usage example:

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'showBranches': true, 'showCommitLabel':true,'mainBranchName': 'MetroLine1'}} }%%      gitGraph        commit id:"NewYork"        commit id:"Dallas"        branch MetroLine2        commit id:"LosAngeles"        commit id:"Chicago"        commit id:"Houston"        branch MetroLine3        commit id:"Phoenix"        commit type: HIGHLIGHT id:"Denver"        commit id:"Boston"        checkout MetroLine1        commit id:"Atlanta"        merge MetroLine3        commit id:"Miami"        commit id:"Washington"        merge MetroLine2 tag:"MY JUNCTION"        commit id:"Boston"        commit id:"Detroit"        commit type:REVERSE id:"SanFrancisco"
```

MetroLine1MetroLine2MetroLine3NewYorkDallasLosAngelesChicagoHoustonPhoenixDenverAtlantaMiamiWashingtonMY JUNCTIONBostonDetroitSanFrancisco

Look at the imaginary railroad map created using Mermaid. Here, we have changed the default main branch name to `MetroLine1`.

## [Customizing branch ordering](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-branch-ordering)

In Mermaid, by default the branches are shown in the order of their definition or appearance in the diagram code.

Sometimes you may want to customize the order of the branches. You can do this by using the `order` keyword next the branch definition. You can set it to a positive number.

Mermaid follows the given precedence order of the `order` keyword.

-   Main branch is always shown first as it has default order value of `0`. (unless its order is modified and changed from `0` using the `mainBranchOrder` keyword in the config)
-   Next, All branches without an `order` are shown in the order of their appearance in the diagram code.
-   Next, All branches with an `order` are shown in the order of their `order` value.

To fully control the order of all the branches, you must define `order` for all the branches.

Usage example:

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'showBranches': true, 'showCommitLabel':true}} }%%      gitGraph      commit      branch test1 order: 3      branch test2 order: 2      branch test3 order: 1
```

maintest3test2test10-1733434

Look at the diagram, all the branches are following the order defined.

Usage example:

```
%%{init: { 'logLevel': 'debug', 'theme': 'base', 'gitGraph': {'showBranches': true, 'showCommitLabel':true,'mainBranchOrder': 2}} }%%      gitGraph      commit      branch test1 order: 3      branch test2      branch test3      branch test4 order: 1
```

test2test3test4maintest10-6b7effa

Look at the diagram, here, all the branches without a specified order are drawn in their order of definition. Then, `test4` branch is drawn because the order of `1`. Then, `main` branch is drawn because the order of `2`. And, lastly `test1`is drawn because the order of `3`.

NOTE: Because we have overridden the `mainBranchOrder` to `2`, the `main` branch is not drawn in the beginning, instead follows the ordering.

Here, we have changed the default main branch name to `MetroLine1`.

## [Themes](https://mermaid-js.github.io/mermaid/#/gitgraph?id=themes)

Mermaid supports a bunch of pre-defined themes which you can use to find the right one for you. PS: you can actually override an existing theme's variable to get your own custom theme going. Learn more about theming your diagram [here](https://mermaid-js.github.io/mermaid/#/./theming).

The following are the different pre-defined theme options:

-   `base`
-   `forest`
-   `dark`
-   `default`
-   `neutral`

**NOTE**: To change theme you can either use the `initialize` call or _directives_. Learn more about [directives](https://mermaid-js.github.io/mermaid/#/./directives) Let's put them to use, and see how our sample diagram looks in different themes:

### [Base Theme](https://mermaid-js.github.io/mermaid/#/gitgraph?id=base-theme)

```
%%{init: { 'logLevel': 'debug', 'theme': 'base' } }%%      gitGraph        commit        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash" tag:"abc"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

mainhotfixdevelopfeatureBfeatureArelease0-3f1930a1-3b8f807ashabc3-fccce5f4-1c5d7445-83254336-0aedb698-66cc5ce9-349d9c211-7b0474b12-dc21fb914-d9b642415-860b9ee

### [Forest Theme](https://mermaid-js.github.io/mermaid/#/gitgraph?id=forest-theme)

```
%%{init: { 'logLevel': 'debug', 'theme': 'forest' } }%%      gitGraph        commit        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash" tag:"abc"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

mainhotfixdevelopfeatureBfeatureArelease0-a105bec1-26b46c6ashabc3-f6e05b84-fabe4f35-8cd23546-a77d2fe8-d7ab9489-b7989ac11-c9846b112-b946f8a14-5d272c915-9f7fc0c

### [Default Theme](https://mermaid-js.github.io/mermaid/#/gitgraph?id=default-theme)

```
%%{init: { 'logLevel': 'debug', 'theme': 'default' } }%%      gitGraph        commit type:HIGHLIGHT        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash" tag:"abc"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

mainhotfixdevelopfeatureBfeatureArelease0-2c319601-fd02908ashabc3-3ccb1cf4-4af568a5-6a8523e6-85c49d58-e8189ae9-6787d8611-bfc5e3012-2823ec914-a65036f15-3e8975e

### [Dark Theme](https://mermaid-js.github.io/mermaid/#/gitgraph?id=dark-theme)

```
%%{init: { 'logLevel': 'debug', 'theme': 'dark' } }%%      gitGraph        commit        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash" tag:"abc"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

mainhotfixdevelopfeatureBfeatureArelease0-ddacc7b1-51f5605ashabc3-d53c1ea4-83d17155-9182a126-844d7ae8-7b165009-5044efc11-8ab7ff612-896c46014-27d44de15-5c57165

### [Neutral Theme](https://mermaid-js.github.io/mermaid/#/gitgraph?id=neutral-theme)

```
%%{init: { 'logLevel': 'debug', 'theme': 'neutral' } }%%      gitGraph        commit        branch hotfix        checkout hotfix        commit        branch develop        checkout develop        commit id:"ash" tag:"abc"        branch featureB        checkout featureB        commit type:HIGHLIGHT        checkout main        checkout hotfix        commit type:NORMAL        checkout develop        commit type:REVERSE        checkout featureB        commit        checkout main        merge hotfix        checkout featureB        commit        checkout develop        branch featureA        commit        checkout develop        merge hotfix        checkout featureA        commit        checkout featureB        commit        checkout develop        merge featureA        branch release        checkout release        commit        checkout main        commit        checkout release        merge main        checkout develop        merge release
```

mainhotfixdevelopfeatureBfeatureArelease0-c1e624f1-21b289aashabc3-6fcd4f34-5aae5085-8d2260d6-86758018-2e2f8f29-e0f15c911-d3c66f112-438b5e214-24e952115-64ead90

## [Customize using Theme Variables](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customize-using-theme-variables)

Mermaid allows you to customize your diagram using theme variables which govern the look and feel of various elements of the diagram.

For understanding let us take a sample diagram with theme `default`, the default values of the theme variables is picked automatically from the theme. Later on we will see how to override the default values of the theme variables.

See how the default theme is used to set the colors for the branches:

```
%%{init: { 'logLevel': 'debug', 'theme': 'default' } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-db1f8951-0633e5dv1.0.02-197e7683-60f23dc4-fef8ed06-a56b9397-db20228

> #### [IMPORTANT:](https://mermaid-js.github.io/mermaid/#/gitgraph?id=important)
> 
> Mermaid supports the theme variables to override the default values for **up to 8 branches**, i.e., you can set the color/styling of up to 8 branches using theme variables. After this threshold of 8 branches, the theme variables are reused in the cyclic manner, i.e. the 9th branch will use the color/styling of the 1st branch, or the branch at index position '8' will use the color/styling of the branch at index position '0'. _More on this in the next section. See examples on **Customizing branch label colors** below_

### [Customizing branch colors](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-branch-colors)

You can customize the branch colors using the `git0` to `git7` theme variables. Mermaid allows you to set the colors for up-to 8 branches, where `git0` variable will drive the value of the first branch, `git1` will drive the value of the second branch and so on.

NOTE: Default values for these theme variables are picked from the selected theme. If you want to override the default values, you can use the `initialize` call to add your custom theme variable values.

Example:

Now let's override the default values for the `git0` to `git3` variables:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {              'git0': '#ff0000',              'git1': '#00ff00',              'git2': '#0000ff',              'git3': '#ff00ff',              'git4': '#00ffff',              'git5': '#ffff00',              'git6': '#ff00ff',              'git7': '#00ffff'       } } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-849f76a1-0ebceb8v1.0.02-a9670053-2042d414-11a50006-ee32af97-fafb7f9

See how the branch colors are changed to the values specified in the theme variables.

### [Customizing branch label colors](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-branch-label-colors)

You can customize the branch label colors using the `gitBranchLabel0` to `gitBranchLabel7` theme variables. Mermaid allows you to set the colors for up-to 8 branches, where `gitBranchLabel0` variable will drive the value of the first branch label, `gitBranchLabel1` will drive the value of the second branch label and so on.

Lets see how the default theme is used to set the colors for the branch labels:

Now let's override the default values for the `gitBranchLabel0` to `gitBranchLabel2` variables:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {        'gitBranchLabel0': '#ffffff',        'gitBranchLabel1': '#ffffff',        'gitBranchLabel2': '#ffffff',        'gitBranchLabel3': '#ffffff',        'gitBranchLabel4': '#ffffff',        'gitBranchLabel5': '#ffffff',        'gitBranchLabel6': '#ffffff',        'gitBranchLabel7': '#ffffff',        'gitBranchLabel8': '#ffffff',        'gitBranchLabel9': '#ffffff'  } } }%%  gitGraph    checkout main    branch branch1    branch branch2    branch branch3    branch branch4    branch branch5    branch branch6    branch branch7    branch branch8    branch branch9    checkout branch1    commit
```

mainbranch1branch2branch3branch4branch5branch6branch7branch8branch90-75e2c80

Here, you can see that `branch8` and `branch9` colors and the styles are being picked from branch at index position `0` (`main`) and `1`(`branch1`) respectively, i.e., **branch themeVariables are repeated cyclically**.

### [Customizing Commit colors](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-commit-colors)

You can customize commit using the `commitLabelColor` and `commitLabelBackground` theme variables for changes in the commit label color and background color respectively.

Example: Now let's override the default values for the `commitLabelColor` to `commitLabelBackground` variables:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {              'commitLabelColor': '#ff0000',              'commitLabelBackground': '#00ff00'       } } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-9520e8b1-e6dc8b3v1.0.02-803f8db3-bf719724-129f8036-5a74faf7-9e1bb56

See how the commit label color and background color are changed to the values specified in the theme variables.

### [Customizing Commit Label Font Size](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-commit-label-font-size)

You can customize commit using the `commitLabelFontSize` theme variables for changing in the font soze of the commit label .

Example: Now let's override the default values for the `commitLabelFontSize` variable:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {              'commitLabelColor': '#ff0000',              'commitLabelBackground': '#00ff00',              'commitLabelFontSize': '16px'       } } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-001ef451-9d0803dv1.0.02-dac3c293-1ef5df84-c1430706-6c76ceb7-565b30a

See how the commit label font size changed.

### [Customizing Tag Label Font Size](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-tag-label-font-size)

You can customize commit using the `tagLabelFontSize` theme variables for changing in the font soze of the tag label .

Example: Now let's override the default values for the `tagLabelFontSize` variable:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {              'commitLabelColor': '#ff0000',              'commitLabelBackground': '#00ff00',              'tagLabelFontSize': '16px'       } } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-4d999441-b3812a2v1.0.02-341134f3-de1f9bc4-1abceed6-b2741b17-2c27b47

See how the tag label font size changed.

### [Customizing Tag colors](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-tag-colors)

You can customize tag using the `tagLabelColor`,`tagLabelBackground` and `tagLabelBorder` theme variables for changes in the tag label color,tag label background color and tag label border respectively. Example: Now let's override the default values for the `tagLabelColor`, `tagLabelBackground` and to `tagLabelBorder` variables:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {              'tagLabelColor': '#ff0000',              'tagLabelBackground': '#00ff00',              'tagLabelBorder': '#0000ff'       } } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-ef48ef41-76f36efv1.0.02-aa6d0e43-cd6f12b4-be463fd6-92bd7667-35ea74c

See how the tag colors are changed to the values specified in the theme variables.

### [Customizing Highlight commit colors](https://mermaid-js.github.io/mermaid/#/gitgraph?id=customizing-highlight-commit-colors)

You can customize the highlight commit colors in relation to the branch it is on using the `gitInv0` to `gitInv7` theme variables. Mermaid allows you to set the colors for up-to 8 branches specific highlight commit, where `gitInv0` variable will drive the value of the first branch's highlight commits, `gitInv1` will drive the value of the second branch's highlight commit label and so on.

Example:

Now let's override the default values for the `git0` to `git3` variables:

```
    %%{init: { 'logLevel': 'debug', 'theme': 'default' , 'themeVariables': {              'gitInv0': '#ff0000'       } } }%%       gitGraph       commit       branch develop       commit tag:"v1.0.0"       commit       checkout main       commit type: HIGHLIGHT       commit       merge develop       commit       branch featureA       commit
```

maindevelopfeatureA0-682cfe61-36a5ec3v1.0.02-fbf3b6f3-90917f54-901706e6-c8e79187-0a5f3ec

See how the highlighted commit color on the first branch is changed to the value specified in the theme variable `gitInv0`.