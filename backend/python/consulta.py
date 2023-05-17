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
    print('*' * 10)
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
    print('*' * 10)


def consulta_2():
    print('*' * 10)
    ruta_archivo = os.path.abspath(__file__)
    directorio_padre = os.path.dirname(os.path.dirname(ruta_archivo))
    ruta_bd = os.path.join(directorio_padre, "database", "tsbd.db")
    print(ruta_bd)
    conexion = sqlite3.connect(ruta_bd)

    # Obtener el cursor
    cursor = conexion.cursor()

    # Obtener la lista de tablas en la base de datos
    cursor.execute("SELECT name FROM sqlite_master WHERE type='table';")
    tables = cursor.fetchall()

    # Mostrar las tablas
    for table in tables:
        print(table[0])

    # Cerrar la conexión
    conexion.close()
    print('*' * 10)


# borra()
consulta_2()
consulta()
