start /wait cmd.exe /c "net stop winnat && cd laradock && docker-compose up -u root -d nginx mysql workspace"
start cmd.exe /c "cd laradock && docker-compose exec -u root workspace npm run watch-poll"
