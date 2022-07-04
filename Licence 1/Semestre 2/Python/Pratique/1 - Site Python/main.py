# -*- coding: utf-8 -*-
"""
Created on Wed Jun 22 07:29:42 2022

@author: Muriel
"""
from flask import *

app = Flask(__name__)

@app.route('/')

def index():
    return render_template("index.html")

app.run(host="localhost", port=9000, debug=True)
