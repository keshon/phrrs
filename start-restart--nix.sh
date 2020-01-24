#!/bin/bash

export DIR_NAME="lib"                           # if empty - root directory of docker-compose file is used by default
export LIBRARY="${DIR_NAME}/ExampleLibrary.php" # if empty - "tests/test-libraries/ExampleLibrary.php" is used by default
export PORT=11996                               # if empty - 8111 port is used by default

php src/StartRobotRemoteServer.php $LIBRARY $PORT