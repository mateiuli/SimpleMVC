A very simple MVC Framework based on PHP5 that uses PDO.

Files hierarchy:
.
├── config.php
├── controllers
│   ├── ContactController.php
│   ├── Controller.php
│   └── NewsController.php
├── includes
│   └── menu.inc.php
├── index.php
├── models
│   ├── ContactModel.php
│   ├── Model.php
│   └── NewsModel.php
├── README.md
├── template
│   └── index.tpl
├── utilities
│   ├── bootstrap.php
│   ├── database.php
│   └── helpers.php
└── views
    ├── contact
    │   ├── index.tpl
    │   └── success.tpl
    ├── news
    │   ├── details.tpl
    │   └── index.tpl
    └── View.php
