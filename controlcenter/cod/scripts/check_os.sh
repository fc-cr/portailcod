echo $(nmap -p 22 10.130.0.20 | grep "Host seems down" | wc -l)