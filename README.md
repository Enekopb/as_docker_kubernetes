Para ejecutar el programa:


Antes de nada situarse en el directorio donde esta el archivo docker-compose.yml. Los puerto 8080, 8890, 3306, 3000 y 19999 no deberían estar ocupados. Y a la hora de buscar en el navegador hacerlo con http y no htpps.

Docker: sudo docker-compose up      

Minikube: 
Minikube start 

//Esto creara todos los deployments, service y pvc de golpe. 
El pod de python dara error hasta que el de db se inicie. 
Se puede hacer de archivo en archivo haciendo kubectl apply -f cadaArchivo.yml   

kubectl create -f kubernetes/      
          
minikube service apache-service
