import time
import requests

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
        lista.append(data['weather'][0]['main'])
        lista.append(str(data['main']['temp'])+'ºF')
        lista.append(str(data['main']['humidity'])+'%')
        with open('datos', 'w') as archivo:
            for valor in lista:
                archivo.write(str(valor)+'\n')
        print(lista)
        time.sleep(60)
