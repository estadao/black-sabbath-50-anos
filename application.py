from flask import Flask, render_template
import json

app = Flask(__name__)

@app.route("/")
def index():

    with open('static/data/structure.json') as f:
        content = json.load(f)

    tracks = content["tracks"]
    slides = content["slides"]
    
    return render_template("index.html", tracks = tracks, slides = slides)