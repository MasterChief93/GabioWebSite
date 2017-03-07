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


@app.route('/sostienici/')
def sostienici():
    return render_template('sostienici.html')

@app.route('/chi-siamo/')
def chi_siamo():
    return render_template('chi-siamo.html')


@app.route('/richiedi-servizio/')
def richiedi_servizio():
    return render_template("service.html")


@app.route('/contattaci/')
def contattaci():
    return render_template("contacts.html")

@app.route('/unisciti/')
def unisciti():
    return render_template("unisciti.html")


# @freezer.register_generator
# def page_links():
#     for page in pages._pages:
#         yield {'path': page}


if __name__ == '__main__':
    if len(sys.argv) > 1 and sys.argv[1] == "build":
        freezer.freeze()
    else:
        app.run(host="0.0.0.0", port=8080)
