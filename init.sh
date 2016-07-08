#!/usr/bin/env bash
[ -e sample ] && rm -rf sample
[ -e tests ] && rm -rf tests
[ -e codeception.yml ] && rm codeception.yml

yes | ./vendor/bin/yiic webapp sample
./vendor/bin/codecept bootstrap

# modify functional.suite.yml
echo '' >> tests/functional.suite.yml
echo '        - Yii1' >> tests/functional.suite.yml
echo '    config:' >> tests/functional.suite.yml
echo '        Yii1:' >> tests/functional.suite.yml
echo '            appPath: tests/index.php' >> tests/functional.suite.yml
echo '            url: http://sample.com/index.php' >> tests/functional.suite.yml

cp init/index.php tests/
ln -snf ../sample/assets tests/assets

# add ExtendedUrlManager
cp init/ExtendedUrlManager.php sample/protected/components/
cp init/main.php sample/protected/config/main.php
