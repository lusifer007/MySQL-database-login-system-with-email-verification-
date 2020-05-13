# MySQL-database-login-system-with-email-verification-


#Sendmail setup

Chnage the sendmail.ini file setting 


smtp_server=smtp.gmail.com
smtp_port=587

; SMTPS (SSL) support
;   auto = use SSL for port 465, otherwise try to use TLS
;   ssl  = alway use SSL
;   tls  = always use TLS
;   none = never try to use SSL

smtp_ssl=tls
default_domain=localhost
error_logfile=error.log

auth_username=example@gmail.com
auth_password=Examplepassword

pop3_server=
pop3_username=
pop3_password=
force_sender=example@gmail.com

; force the sender to always be the following email address
; this will only affect the "RCTP TO" command, it won't modify 
; the "To: " header of the message content

force_recipient=
hostname=localhost

#configuration file for wamp server php.ini file 

[mail function]
sendmail_path =c:\wamp64\sendmail\sendmail.exe
#please change the sendmail.exe path



#All file should under the wamp server www file

#for database run users.sql file in your mysql database
