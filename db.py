from flask import g
from pymongo import MongoClient


def get_db():
  if "db" not in g:
    g.db = MongoClient("mongodb+srv://utsman:fajar@cluster0.x6pn4.mongodb.net/fyi?retryWrites=true&w=majority")

  return g.db["fyi"]