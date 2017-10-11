#!/usr/bin/env bash

while true
do
    echo ""
    echo "trying to update matchresponses!"
    curl https://docs.google.com/spreadsheets/d/1bJv6WSn02bEDVI8QLC1iKH30MAZWlz4Hs7AbGxFOBa8/pub?output=csv > matchresponses.csv
    git pull origin master
    git add matchresponses.csv
    git commit -m "updated matchresponses.csv"
    git push origin master
    sleep 60
done