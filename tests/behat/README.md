# Use of behat in docksal

## prepare
### make sure selenium/standalone-chrome:3.4 is in docksal.yml
cp behat.yml.dist to behat.yml

## run with goutte/selenium (tags @javascript only)
fin behat --tags d7 
fin behat --tags javascript

## run all tests with chrome browser
### make sure alpeware/chrome-headless-stable is in docksal.yml
fin behat --tags d7 --config ./behat.chrome.yml
fin behat --tags javascript --config ./behat.chrome.yml
