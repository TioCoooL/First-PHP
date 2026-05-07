import requests

url = 'http://localhost/First-PHP/webservice.php'
payload = {'nim':'312310018', 'nama':'Gilbetch', 'jurusan':'TIF', 'alamat':'malang'}
r=requests.post(url,json=payload)
print(r.json())