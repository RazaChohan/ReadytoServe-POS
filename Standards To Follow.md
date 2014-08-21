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

### Branching standards:
- There must be two remote branches in project's repository: master and dev (or development)
- Active development will only be done on dev. If more than one persons are working on a task simultaneously then they can push that  
  branch on remote but it must be removed from remote as soon as it is merged in dev as well as master
- You must not commit an incomplete feature to dev and you must never commit an untested functionality to master
- You must not commit directly to dev or master
- You must create a feature branch (local only) for a task. If a task is divided in sub-tasks, then it is up to you to create multiple  branches from that feature b.

