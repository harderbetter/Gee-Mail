Command for makefile

g++ -o check_login check_login.cpp -lsqlite3 -lgcrypt    
./check_login [username] [passwd]


g++ -o register register.cpp -lsqlite3 -lgcrypt
./register [username] [passwd]

g++ -I/usr/local/include/cryptopp -o write_message write_message.cpp -lgcrypt -lsqlite3 -lcryptopp
./write_message [sender] [receiver] ['message'] ['passphrase']

g++ -I/usr/local/include/cryptopp -o read_message read_message.cpp -lgcrypt -lsqlite3 -lcryptopp
./read_message [message_id] ['passphrase']

***********************************************************************************************************

Gee-Mail Project Description:
Here is a secure asynchronous (same-machine) message platform. Here is what is we accomplish: When loaded prompt the user to sign-in or register. When a user registers get their username and password. When a user logs in ask for username and validate password. If login fails, choose your response. Once logged in, tell them the number of messages they have, list the users that have sent them a message. 2.) Then ask if they want to read messages or write messages. When writing messages prompt them for the receipient username, the message, and a shared passphrase with that receipient. When they read a message let them select the message somehow, then prompt them for the shared passphrase with that receipient, then show a plaintext message. IMPORTANT: do not ever store passwords, messages, or passphrases in plaintext, this is an encrypted messaging system. The rule sets in play for this stage are FIO and ERR.
