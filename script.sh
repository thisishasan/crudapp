minikube start
kubectl delete -k ./
kubectl apply -k ./
kubectl get all
minikube service crudapp-service --url