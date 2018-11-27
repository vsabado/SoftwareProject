# SoftwareProject

This is a browser based file sharing system built with peerjs, a file handling library.

The frontend is built using React with a super light CSS framework called MUI. 

## RESOURCES

React (https://reactjs.org/)
MUI (https://www.muicss.com/)
Peerjs (https://peerjs.com/)

https://github.com/jmcker/Peer-to-Peer-Cue-System


# Guide how to start Nginx docker image

## Pull nginx docker image
reference image: https://docs.docker.com/samples/library/nginx/
```
docker pull nginx
```

## Clone the repo
```
git clone git@github.com:vsabado/SoftwareProject.git
```

## How to update the repo inside the droplet
```
cd /mnt/volume_nyc1_01
cd SoftwareProject
pwd #should say /mnt/volume_nyc1_01/SoftwareProject
git pull
```

## Running container and force rebuild
```
docker build -t peershare-nginx .
```

## If already exist, remove first
```
docker remove peershare-nginx
```

## Go into the container
```
docker exec -it peershare-nginx1 /bin/bash
```

## Running
```
docker run -it --name peershare-nginx1 -p 80:80 -d -v $(pwd)/peershare:/usr/share/nginx/html peershare-nginx
```

## nginx directory
```
/usr/share/nginx/html
```


# Project Server Link
fileproject.vsabado.com
