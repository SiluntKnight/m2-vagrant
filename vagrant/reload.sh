file=/webroot/vagrant/project-messages.txt
if [ -e "$file" ]; then
    printf "\n"
    cat $file
    printf "\n\n -- END OF MESSAGES -- \n\n"
fi