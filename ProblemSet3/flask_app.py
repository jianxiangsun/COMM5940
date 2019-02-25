from flask import Flask, render_template, json, request
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/index.html")
def main():
   user = {"name":"Barnett"}
   return render_template("index.html",user=user,title="Home Page")

@app.route("/ps2.html")
def table():
   user = {"name":"Barnett"}
   return render_template("ps2.html",user=user,title="Problem Set 2")

@app.route("/ps3.html")
def chart():

    r1 = requests.get('https://api.airtable.com/v0/appexYfPcZznAu97d/creds_calculation?api_key=keyLZQGPBz655pCmy')
    dict1 = r1.json()
    dict2 = {}
    dataset1 = []
    name_list = []
    total_crets_list = []
    for i in dict1['records']:
         dict2 = i['fields']
         dataset1.append(dict2)
    for item in dataset1:
        name_list.append(item.get('Name'))
        total_crets_list.append(item.get('creds'))

    r2 = requests.get('https://api.airtable.com/v0/appexYfPcZznAu97d/activity_by_date?api_key=keyLZQGPBz655pCmy')
    dict3 = r2.json()
    dict4 = {}
    dataset2 = []
    date_list = []
    times_list = []
    for i in dict3['records']:
         dict4 = i['fields']
         dataset2.append(dict4)
    for item in dataset2:
        date_list.append(item.get('Date'))
        times_list.append(item.get('number_of_logging_in'))

    return render_template('ps3.html', chart1=zip(name_list, total_crets_list),chart2=zip(date_list,times_list))

