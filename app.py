from flask import Flask, render_template, request

app = Flask(__name__)

@app.route("/")
def index():
    return render_template("index.html")

@app.route("/tips")
def tips():
    return render_template("tipsdantrik.html")

@app.route("/forum")
def forum():
    return render_template("forumdiskusi.html")

@app.route("/daftar")
def daftar():
    return render_template("daftarP.html")

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/tentang")
def tentang():
    return render_template("tentang.html")

@app.route("/faq")
def faq():
    return render_template("faq.html")

@app.route("/login/handle", methods=["POST"])
def func():
    username = request.values["username"]
    password = request.values["password"]
    return "hallo "+username

if __name__ == "__main__":
    app.run(debug=True)