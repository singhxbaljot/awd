#!/bin/bash
read -p "Commit description: " desc
git add -A .
git commit -m "$desc" && \
# git push https://github.com/singhxbaljot/awd-ci.git main

git push 'https://singhxbaljot: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@github.com/singhxbaljot/awd-ci.git' main
