# -*- coding: utf-8 -*-
"""
Created on Wed Jun 29 07:58:04 2022

@author: Muriel
"""

from socket import *

host = "192.168.11.83"#gethostname()
port = 5000

server_socket = socket()
server_socket.bind((host, port))
server_socket.listen(2)
conx, address = server_socket.accept()

print("Connextion from : "+ str(address))

while True:
    data = conx.recv(1024).decode()
    if not data:
        break
    print("from connected user : "+str(data))
    data = input("->")
    conx.send(data.encode())

conx.close()
    