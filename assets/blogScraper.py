import requests
from bs4 import BeautifulSoup

print()

url = 'https://jadelaide.github.io/-JaBlog-/'
res = requests.get(url).content
soup = BeautifulSoup(res, 'html.parser')
links = soup.find_all('a')
blogs = "https"
count = 0
latest = {}

def addBlog(number, link):
    latest[number] = link

for link in links:
    if blogs in link['href']:
        continue
    else:
        # print('https://jadelaide.github.io' + link['href'])
        addBlog(count, 'https://jadelaide.github.io' + link['href'])
        count += 1
        if count == 3:
            break

print(latest[0])
print(latest[1])
print(latest[2])



# for posts in soup.find_all('li'):                                     # prints each blog title
#     for item in posts.find_all('a'):
#         print(str(item.string))
