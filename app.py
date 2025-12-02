from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def inicio():
    return render_template("index.html")

@app.route("/contenido")
def contenido():
    return render_template("contenido.html")

@app.route("/ventas")
def ventas():
    return render_template("ventas.html")

@app.route("/login")
def login():
    return render_template("login.html")

@app.route("/registro")
def registro():
    return render_template("registro.html")

if __name__ == "__main__":
    app.run(debug=True)
