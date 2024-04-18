# gh-api

GitHub API

## 安装

```bash
npm i -S @langnang/gh-api
```

## axios

```js
axios.defaults.baseURL = "https://api.github.com";

// 添加请求拦截器
axios.interceptors.request.use(
  function (config) {
    // 在发送请求之前做些什么
    return config;
  },
  function (error) {
    // 对请求错误做些什么
    return Promise.reject(error);
  }
);

// 添加响应拦截器
axios.interceptors.response.use(
  function (response) {
    // 对响应数据做点什么
    return response.data;
  },
  function (error) {
    // 对响应错误做点什么
    return Promise.reject(error);
  }
);
```

## APIs

### Emojis - 表情符号

- [x] `GET /emojis`: 表情符号列表

### Issues - 议题

- [ ] ``: List issues assigned to the authenticated user
- [ ] ``: List organization issues assigned to the authenticated user
- [ ] `GET /repos/{owner}/{repo}/issues`: List repository issues
  > 仓库问题列表
- [ ] ``: Create an issue
- [ ] ``: Get an issue
- [ ] ``: Update an issue
- [ ] ``: Lock an issue
- [ ] ``: Unlock an issue
- [ ] ``: List user account issues assigned to the authenticated user

#### Assignees - 受理人

- [ ] ``: List assignees
- [ ] ``: Check if a user can be assigned
- [ ] ``: Add assignees to an issue
- [ ] ``: Remove assignees from an issue

#### Comments - 评论

- [ ] ``: List issue comments for a repository
- [ ] ``: Get an issue comment
- [ ] ``: Update an issue comment
- [ ] ``: Delete an issue comment
- [ ] ``: List issue comments
- [ ] ``: Create an issue comment

#### Events - 事件

- [ ] ``: List issue events for a repository
- [ ] ``: Get an issue event
- [ ] ``: List issue events

#### Labels - 标签

- [ ] ``: List labels for an issue
- [ ] ``: Add labels to an issue
- [ ] ``: Set labels for an issue
- [ ] ``: Remove all labels from an issue
- [ ] ``: Remove a label from an issue
- [ ] ``: List labels for a repository
- [ ] ``: Create a label
- [ ] ``: Get a label
- [ ] ``: Update a label
- [ ] ``: Delete a label
- [ ] ``: List labels for issues in a milestone

#### Milestones - 里程碑

- [ ] ``: List milestones
- [ ] ``: Create a milestone
- [ ] ``: Get a milestone
- [ ] ``: Update a milestone
- [ ] ``: Delete a milestone

#### Timeline - 时间表

- [ ] ``: List timeline events for an issue

### Repositories - 仓库

- [ ] ``: In this article
- [ ] ``: List organization repositories
- [ ] ``: Create an organization repository
- [ ] ``: Get a repository
- [ ] ``: Update a repository
- [ ] ``: Delete a repository
- [ ] ``: Enable automated security fixes
- [ ] ``: Disable automated security fixes
- [ ] ``: List repository contributors
- [ ] ``: Create a repository dispatch event
- [ ] ``: List repository languages
- [ ] ``: List repository tags
- [ ] ``: List repository teams
- [ ] ``: Get all repository topics
- [ ] ``: Replace all repository topics
- [ ] ``: Transfer a repository
- [ ] ``: Check if vulnerability alerts are enabled for a repository
- [ ] ``: Enable vulnerability alerts
- [ ] ``: Disable vulnerability alerts
- [ ] ``: Create a repository using a template
- [ ] ``: List public repositories
- [ ] ``: List repositories for the authenticated user
- [ ] ``: Create a repository for the authenticated user
- [ ] `GET /users/{username}/repos`: List repositories for a user

#### Branches - 分支

- [ ] ``: List branches
- [ ] ``: Get a branch
- [ ] ``: Get branch protection
- [ ] ``: Update branch protection
- [ ] ``: Delete branch protection
- [ ] ``: Get admin branch protection
- [ ] ``: Set admin branch protection
- [ ] ``: Delete admin branch protection
- [ ] ``: Get pull request review protection
- [ ] ``: Update pull request review protection
- [ ] ``: Delete pull request review protection
- [ ] ``: Get commit signature protection
- [ ] ``: Create commit signature protection
- [ ] ``: Delete commit signature protection
- [ ] ``: Get status checks protection
- [ ] ``: Update status check protection
- [ ] ``: Remove status check protection
- [ ] ``: Get all status check contexts
- [ ] ``: Add status check contexts
- [ ] ``: Set status check contexts
- [ ] ``: Remove status check contexts
- [ ] ``: Get access restrictions
- [ ] ``: Delete access restrictions
- [ ] ``: Get apps with access to the protected branch
- [ ] ``: Add app access restrictions
- [ ] ``: Set app access restrictions
- [ ] ``: Remove app access restrictions
- [ ] ``: Get teams with access to the protected branch
- [ ] ``: Add team access restrictions
- [ ] ``: Set team access restrictions
- [ ] ``: Remove team access restrictions
- [ ] ``: Get users with access to the protected branch
- [ ] ``: Add user access restrictions
- [ ] ``: Set user access restrictions
- [ ] ``: Remove user access restrictions

#### Collaborators - 协作者

- [ ] ``: List repository collaborators
- [ ] ``: Check if a user is a repository collaborator
- [ ] ``: Add a repository collaborator
- [ ] ``: Remove a repository collaborator
- [ ] ``: Get repository permissions for a user

#### Comments - 评论

- [ ] ``: Custom media types for commit comments
- [ ] ``: List commit comments for a repository
- [ ] ``: Get a commit comment
- [ ] ``: Update a commit comment
- [ ] ``: Delete a commit comment
- [ ] ``: List commit comments
- [ ] ``: Create a commit comment

#### Commits - 提交

- [ ] ``: List commits
- [ ] ``: List branches for HEAD commit
- [ ] ``: List pull requests associated with a commit
- [ ] ``: Get a commit
- [ ] ``: Compare two commits

#### Community

- [ ] ``: Get community profile metrics

#### Contents

- [ ] ``: Custom media types for repository contents
- [ ] ``: Get repository content
- [ ] ``: Create or update file contents
- [ ] ``: Delete a file
- [ ] ``: Get a repository README
- [ ] ``: Download a repository archive (tar)
- [ ] ``: Download a repository archive (zip)

#### Deploy keys

- [ ] ``: List deploy keys
- [ ] ``: Create a deploy key
- [ ] ``: Get a deploy key
- [ ] ``: Delete a deploy key

#### Deployments

- [ ] ``: Inactive deployments
- [ ] ``: List deployments
- [ ] ``: Create a deployment
- [ ] ``: Get a deployment
- [ ] ``: Delete a deployment
- [ ] ``: List deployment statuses
- [ ] ``: Create a deployment status
- [ ] ``: Get a deployment status

#### Forks

- [ ] ``: List forks
- [ ] ``: Create a fork

#### Invitations

- [ ] ``: Invite a user to a repository
- [ ] ``: List repository invitations
- [ ] ``: Update a repository invitation
- [ ] ``: Delete a repository invitation
- [ ] ``: List repository invitations for the authenticated user
- [ ] ``: Accept a repository invitation
- [ ] ``: Decline a repository invitation

#### Merging

- [ ] ``: Merge a branch

#### Pages

- [ ] ``: Get a GitHub Pages site
- [ ] ``: Create a GitHub Pages site
- [ ] ``: Update information about a GitHub Pages site
- [ ] ``: Delete a GitHub Pages site
- [ ] ``: List GitHub Pages builds
- [ ] ``: Request a GitHub Pages build
- [ ] ``: Get latest Pages build
- [ ] ``: Get GitHub Pages build

#### Releases

- [ ] ``: List releases
- [ ] ``: Create a release
- [ ] ``: Get a release asset
- [ ] ``: Update a release asset
- [ ] ``: Delete a release asset
- [ ] ``: Get the latest release
- [ ] ``: Get a release by tag name
- [ ] ``: Get a release
- [ ] ``: Update a release
- [ ] ``: Delete a release
- [ ] ``: List release assets
- [ ] ``: Upload a release asset

#### Statistics

- [ ] ``: A word about caching
- [ ] ``: Statistics exclude some types of commits
- [ ] ``: Get the weekly commit activity
- [ ] ``: Get the last year of commit activity
- [ ] ``: Get all contributor commit activity
- [ ] ``: Get the weekly commit count
- [ ] ``: Get the hourly commit count for each day

#### Statuses

- [ ] ``: Get the combined status for a specific reference
- [ ] ``: List commit statuses for a reference
- [ ] ``: Create a commit status

#### Traffic

- [ ] ``: Get repository clones
- [ ] ``: Get top referral paths
- [ ] ``: Get top referral sources
- [ ] ``: Get page views

#### Webhooks

- [ ] ``: List repository webhooks
- [ ] ``: Create a repository webhook
- [ ] ``: Get a repository webhook
- [ ] ``: Update a repository webhook
- [ ] ``: Delete a repository webhook
- [ ] ``: Get a webhook configuration for a repository
- [ ] ``: Update a webhook configuration for a repository
- [ ] ``: Ping a repository webhook
- [ ] ``: Test the push repository webhook
- [ ] ``: Receiving Webhooks
- [ ] ``: PubSubHubbub
