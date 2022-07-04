# -*- coding: utf-8 -*-
"""
Created on Wed Jun 29 07:58:25 2022

@author: Muriel
"""

from socket import *

host = gethostname()
port = 5000

client_socket = socket()

client_socket.connect((host, port))

message = input("->")

while message.lower().strip() != "bye":
    client_socket.send(message.encode())
    data = client_socket.recv(1024).decode()
    print("Received from the server : "+str(data))
    message = input("->")

client_socket.close()