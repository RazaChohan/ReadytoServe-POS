#Standards and Tools to follow in this Project:
- Coding standards of PHP must be observed. (Reference Document: 'PHP Coding Standards.md')
- Unit testing by using php unit testing framework.
- PHP QA tools: phpmd, phpcs, phpcpd, phpdcd, phpdocumentor, phpunit.
- Must use Grunt for PHP QA tools.
- OOP principles must be followed.
- Design/Architecture must be flexible enough to accomodate changes. It should be adaptable.
- Iterative development SDLC will be followed with extreme programming (XP).
- Commit messages must be proper (Reference: http://robots.thoughtbot.com/5-useful-tips-for-a-better-commit-message)
- Daily commit is mandatory.
- Test Driven Development will be followed.

### Branching standards:
- There must be two remote branches in project's repository: master and dev (or development)
- Active development will only be done on feature (local) branch.
 - If more than one persons are working on a task simultaneously then they can push that branch on remote but it must be removed from remote as soon as it is merged in dev as well as master.
 - If a task is divided in sub-tasks, then it is up to you to create multiple branches from that feature branch.
- You must not commit directly to dev or master.
- You must not merge an incomplete feature to dev and you must never merge an untested functionality to master.
- Never create a branch from dev. Always create a feature branch from master. If you have to work on a feature that hasn't been merged in master yet, then:
 - Either create branch from that feature branch (or rebase your branch to that feature branch)
 - Or create a branch from master and merge that feature branch into it

###Why you shouldn't create a feature branch from dev:
- Sometimes there are a few changes that were only intended for dev server and should never be merged to master. Creating a feature branch from dev will merge those changes to master once you merge your feature branch to master.
- The dev branch is usually ahead of master, having commits that aren't tested / reviewed yet. So they must not be merged to master. Creating a feature branch from dev will merge those changes to master once you merge your feature branch to master.

#### A good read to learn Git Branching Model:
http://nvie.com/posts/a-successful-git-branching-model/

![alt text](http://nvie.com/img/2009/12/Screen-shot-2009-12-24-at-11.32.03.png "Logo Title Text 1")
