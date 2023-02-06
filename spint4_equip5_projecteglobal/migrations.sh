#!/bin/bash
wget -O pymedb.zip https://github.com/Tupiet-Classe/PymeDB/archive/refs/heads/main.zip
unzip pymedb.zip -d pymedb
folder='pymedb/PymeDB-main'
mv $folder/factories/* database/factories 
mv $folder/migrations/* database/migrations 
mv $folder/seeders/* database/seeders 
mv $folder/Models/* app/Models 
rm -rf pymedb
rm pymedb.zip