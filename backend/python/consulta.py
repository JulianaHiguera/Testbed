import sqlite3
import os


def borra():
    conexion = sqlite3.connect('../database/tsbd.db')
    cursor = conexion.cursor()
    consulta = '''DELETE FROM usuarios;'''
    cursor.execute(consulta)
    conexion.commit()
    conexion.close()


def consulta():
    ruta_archivo = os.path.abspath(__file__)
    directorio_padre = os.path.dirname(os.path.dirname(ruta_archivo))
    ruta_bd = os.path.join(directorio_padre, "database", "tsbd.db")
    print(ruta_bd)
    conexion = sqlite3.connect(ruta_bd)
    cursor = conexion.cursor()
    consulta = '''select * from usuarios;'''
    cursor.execute(consulta)
    resultados = cursor.fetchall()

    for resultado in resultados:
        print(resultado)

    conexion.close()


# borra()
consulta()
