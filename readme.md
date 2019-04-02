# package development (quick guide)


## init
- create a new repository (github)
- clone repo
- file -> settings -> directories -> remove excluded (phpstorm)
- add composer.json 
- add service provider
- add routes

### test package without git
- *** for testing
- composer.json:
	"Dimitricasierhowest\\Log\\": "vendor/dimitricasierhowest/log/src/"
- composer dumpautoload
- add to app.php

### remove test so we can add it to git
- **** removing test
- remove psr4 from composer.json
- remove sp from app.php
- composer dumpautoload


## adding to git repo
- **** git package
- push to git master
- push to git develop
- delete log folder in vender
- add in composer.json:
	"dimitricasierhowest/log": "dev-develop",


- composer update in root folder (will not work!!!)

- add in composer.json:
	{
        "type": "vcs",
        "url": "git@github.com:dimitricasierhowest/log.git"
    }

- composer update



- TEST IT

## prepare for developing
- NEXT
- *** developing
- remove dimitricaserhowest/log in vendor
- git clone repo
- checkout develop
- create dev branch


## folder structure package
	- namespace

	- composer.json
	- config
	- database
		- migrations
	- resources
		- lang
			- en
	- src	
	README.md
	CHANGELOG.md


# Service providers and packages
- explain Service Provider:
	
	- boot
		- publishing files
		- adding routes		
	
	- register
		- LogInterface
			FileLog
			ScreenLog
			Database log
			- migration
			- model 
			- config: log:file,screen,database