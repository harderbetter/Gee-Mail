Command for makefile

g++ -o check_login check_login.cpp -lsqlite3 -lgcrypt    
./check_login [username] [passwd]


g++ -o register register.cpp -lsqlite3 -lgcrypt
./register [username] [passwd]

g++ -I/usr/local/include/cryptopp -o write_message write_message.cpp -lgcrypt -lsqlite3 -lcryptopp
./write_message [sender] [receiver] ['message'] ['passphrase']

g++ -I/usr/local/include/cryptopp -o read_message read_message.cpp -lgcrypt -lsqlite3 -lcryptopp
./read_message [message_id] ['passphrase']