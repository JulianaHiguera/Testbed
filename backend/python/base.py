import sqlite3
import os

ruta_archivo = os.path.abspath(__file__)
directorio_padre = os.path.dirname(os.path.dirname(ruta_archivo))
ruta_bd = os.path.join(directorio_padre, "database", "tsbd.db")
print(ruta_bd)
conexion = sqlite3.connect(ruta_bd)
cursor = conexion.cursor()

tabla_usuarios = '''CREATE TABLE usuarios (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    nombre TEXT,
                    usuario TEXT,
                    contrasena TEXT,
                    correo TEXT
                );'''

cursor.execute(tabla_usuarios)

conexion.close()
