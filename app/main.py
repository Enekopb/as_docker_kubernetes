import time
import mysql.connector
import requests

connection = mysql.connector.connect(host="db", user="root", password="root123#", database="database")
while(True):
    apiKey = '860c319a8d435bacb93e96e41ef9870c'
    ciudad = 'Bilbao'
    url = 'http://api.openweathermap.org/geo/1.0/direct?q='+ciudad+'&appid='+apiKey
    response = requests.get(url)
    lat = response.json()[0]['lat']
    lon = response.json()[0]['lon']
    url2 = 'http://api.openweathermap.org/data/2.5/weather?lat='+str(lat)+'&lon='+str(lon)+'&appid='+apiKey
    response2 = requests.get(url2)
    if response.status_code == 200:
        data = response2.json()
        print(data)
        lista = []
        lista.append(ciudad)
        tiempo = str(data['weather'][0]['main'])
        temperatura = str(data['main']['temp'])+'ºF'
        humedad = str(data['main']['humidity'])+'%'
        # La consulta a mysql
        print(connection)
        cursor = connection.cursor()
        cursor.execute("SELECT * FROM tiempo")
        resultado = cursor.fetchone()
        if resultado:
            cursor.execute("UPDATE tiempo SET ciudad = %s, tiempo = %s, temperatura = %s, humedad = %s", (ciudad, tiempo, temperatura, humedad))
            connection.commit()
        else:
            cursor.execute("INSERT INTO tiempo (ciudad, tiempo, temperatura, humedad)VALUES (%s, %s, %s, %s)", (ciudad, tiempo, temperatura, humedad))
            connection.commit()
        time.sleep(60)
