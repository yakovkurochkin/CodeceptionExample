include Makefile.base

all:	 ##@test [TEST] shorthand for run-tests open-vnc stop open-report
	$(MAKE) remove run-tests stop open-report

run-tests:	 ##@test run tests
	$(DOCKER_COMPOSE) run codecept build
	$(DOCKER_COMPOSE) run codecept run acceptance -vv --html=_report.html

open-report: ##@test open HTML reports
	$(OPEN_CMD) tests/_output/_report.html
	$(OPEN_CMD) tests/_output

stop:	 ##@test shutdown all containers
	$(DOCKER_COMPOSE) kill $(docker ps -q)

remove:	 ##@test remove old report files
	rm -rf tests/_output

local:	 ##@test-local run tests on local machine
	vendor/codeception/codeception/codecept run acceptance
