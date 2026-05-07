import requests

url = 'http://localhost/First-PHP/webservice.php'
r=requests.get(url)
data=r.json()
print(data)