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
Either of run methods - don't forget to update docker-compose.yml or start-restart.sh with ENV variables:
1. **DIR_NAME** - directory name for storing libraries
2. **LIBRARY** - library filename with extension (and DIR_NAME variable as path)
3. **PORT** - server port number
