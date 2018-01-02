### Test for yandex video service
#### Preparation
You have two ways for run this test:
1) Docker
2) On your machine

##### Docker
Need install docker for your OS:

https://www.docker.com/get-docker

Then use makefile:

`make all` 

It will be do next:
1. Clear output directory
2. Run tests in docker
3. Stop docker
4. Show result in html report and open output directory

More commands in makefile you can see with

`make help`


##### On your machine
You must do next:
1. Remove from tests/acceptance.suite.yml line `host: chrome`
2. Install codeception from composer.json
3. Add to project path selenium server

    `http://www.seleniumhq.org/download/`
    
4. Add to project path chrome driver

    `https://sites.google.com/a/chromium.org/chromedriver/downloads`
    
5. Run selenium server by command:

    `java -jar selenium-server-standalone-3.5.3.jar`
    
6. Run tests by codecept, for example if your codeception in vendor folder:

    `vendor/codeception/codeception/codecept run acceptance`