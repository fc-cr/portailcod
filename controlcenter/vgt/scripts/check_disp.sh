echo $(nmap -p 3300 10.133.0.10 | grep "3300/tcp" | grep "closed" | wc -l)