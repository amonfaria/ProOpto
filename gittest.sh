if [ -n "$(git status --porcelain)" ]; then
  echo "there are changes";
else
  echo "no changes";
fi
