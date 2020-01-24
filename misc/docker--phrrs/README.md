# This directory contains Docker files to build and run PHRRS image.

**Build**:
```
    docker build -t phrrs .
```
or (to remove untagged images before building)
```
    bash build-rebuild.sh
```
***
**Run**:
```
    docker-compose up -d
```
or (less cluttered)
```
    bash start-restart.sh
```
