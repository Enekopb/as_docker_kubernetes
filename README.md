Para ejecutar el programa:


Antes de nada situarse en el directorio donde esta el archivo docker-compose.yml

Docker: sudo docker-compose up      

Minikube: Minikube start 

          //Esto creara todos los deployments, service y pvc de golpe. El pod de python dara error hasta que el de db se inicie. Se puede hacer de archivo en archivo haciendo kubectl apply -f cadaArchivo.yml

          
          kubectl create -f kubernetes/      
          
          minikube service apache-service
