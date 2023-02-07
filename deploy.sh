#!/bin/bash
echo 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
read -p "Commit description: " desc
git add -A .
git commit -m "$desc" && \
# git push https://github.com/singhxbaljot/awd-ci.git main

git push 'https://singhxbaljot@github.com/singhxbaljot/awd-ci.git' main
