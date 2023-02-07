#!/bin/bash
read -p "Commit description: " desc
git add -A .
git commit -m "$desc" && \
# git push https://github.com/singhxbaljot/awd-ci.git main

git push https://singh@baljot@github.com/singhxbaljot/awd-ci.git main