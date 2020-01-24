#!/bin/bash

export DIR_NAME="lib"
export LIBRARY="${DIR_NAME}/ExampleLibrary.php"
export PORT=11996

php src/StartRobotRemoteServer.php $LIBRARY $PORT
