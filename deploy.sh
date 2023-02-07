#!/bin/bash
echo TOKEN: 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
read -p "Commit description: " desc
git add -A .
git commit -m "$desc" && \
# git push https://github.com/singhxbaljot/awd-ci.git main

git push 'https://singhxbaljot@github.com/singhxbaljot/awd-ci.git' main
