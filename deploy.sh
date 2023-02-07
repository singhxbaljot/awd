#!/bin/bash
echo TOKEN: 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
read -p "Commit description: " desc
git add -A .
git commit -m "$desc" && \
# git push https://github.com/singhxbaljot/awd-ci.git main

git push 'https://singhxbaljot@github.com/singhxbaljot/awd-ci.git' main
