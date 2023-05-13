import time
from datetime import datetime, timedelta
import subprocess
import sqlite3

conn = sqlite3.connect('tsbd.db')


def run_task(task_info):
    subprocess.run(['bash_script.sh', task_info['param1'],
                   task_info['param2'], ...])


def get_tasks_for_hour():
    now = datetime.now()
    start_time = now - timedelta(minutes=5)
    end_time = now
    cur = conn.cursor()
    cur.execute("SELECT * FROM reservations WHERE datetime(date || ' ' || hour) BETWEEN ? AND ?",
                (start_time.strftime("%Y-%m-%d %H:%M"), end_time.strftime("%Y-%m-%d %H:%M")))
    tasks = cur.fetchall()
    return tasks


while True:

    # Consultar las tareas programadas para la hora actual
    tasks = get_tasks_for_hour()

    # Ejecutar cada tarea
    for task in tasks:
        run_task(task)

    # Esperar un tiempo determinado antes de volver a consultar la base de datos
    time.sleep(60)  # Esperar 1 minuto antes de volver a consultar
