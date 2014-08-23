if [ -n "$(git status --porcelain)" ]; then 
  echo "there are changes"; 
  git add .
  git commit -a -m "Changed files exist - Auto updating"
  git push
else 
  echo "no changes";
fi
