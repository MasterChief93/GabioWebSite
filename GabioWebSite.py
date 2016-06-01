import sys

from flask import Flask, render_template
from flask_flatpages import FlatPages
from flask_frozen import Freezer

DEBUG = True
FLATPAGES_AUTO_RELOAD = DEBUG
FLATPAGES_EXTENSION = '.md'

app = Flask(__name__)
app.config.from_object(__name__)
pages = FlatPages(app)
freezer = Freezer(app)


@app.route('/')
def index():
    page = pages.get_or_404("home")
    return render_template('article.html', page=page)


@app.route('/<path:path>/')
def page(path):
    page = pages.get_or_404(path)
    return render_template('article.html', page=page)


@app.route('/richiedi-servizio/')
def richiedi_servizio():
    return render_template("service.html")


@app.route('/contattaci/')
def contattaci():
    return render_template("contacts.html")


@freezer.register_generator
def page():
    for page in pages._pages:
        yield {'path': page}


if __name__ == '__main__':
    if len(sys.argv) > 1 and sys.argv[1] == "build":
        freezer.freeze()
    else:
        app.run(host="0.0.0.0", port=8080)
