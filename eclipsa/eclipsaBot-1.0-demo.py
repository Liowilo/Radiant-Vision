# -*- coding: utf-8 -*-
"""
Created on Sun Apr  7 17:49:17 2024

@author: jmame
"""

import requests
from bs4 import BeautifulSoup as bs
import random
import time
import pandas as pd
import numpy as np
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import undetected_chromedriver as uc


##Obtener HTML/pagina del perfil

#browser = uc.Chrome()
options = Options()
options.page_load_strategy = 'normal'
browser = webdriver.Chrome(options=options)
browser.set_page_load_timeout(20)
url = "https://tracker.gg/valorant/profile/riot/CDC%20JuuzouJoseph%23Okami/overview"
##browser.get(url)
try:
   browser.get(url)
except:
  pass

##Tobtener y acomodar HTML

html = browser.page_source
print(html)

soup = bs(html, 'lxml')
soup

##Cerrar pestaña y navegador
browser.close()
browser.quit()

##Extraccion de datos de IDENTIFICACION

player = soup.find('span', {'class':'trn-ign__username'}).text.strip()
player
tag = soup.find('span', {'class':'trn-ign__discriminator'}).text.strip()
tag

##Extraccion de stats
#Intento1 No sirve
##rank = soup.find('div', {'class':'rating-entry__rank-info'}).text.strip()
##rank

#Posible sentencia 2
##pruebaRank =soup.find('div', {'class': ['rating-summary__content','rating-entry__rank-info','value']}).text.strip()
##pruebaRank

rankList = soup.find_all('div',{'class':'rating-entry'})
rankList

if rankList:
    currenRank = rankList[0].find('div', {'class':'value'}).text
    peakRank = rankList[1].find('div', {'class':'value'}).text
else:
    print("La lista de stats esta vacia")




'''rank = soup.find('div', {'class':'rating-summary__content','class':'rating-entry__rank-info','class':'value'}).text.strip()
rank


peakrank = soup.find('div', {'class':'rating-summary__content rating-summary__content--secondary','class':'rating-entry__rank-info','class':'value'}).text.strip()
peakrank
'''

#lista de Matches
matchesList = soup.find_all('text', {'fill':'#fff'})
##matchesList       ##--------Imprimir la lista

numberWins = matchesList[0].text
numberWins

numberLose = matchesList[1].text
numberLose


##Lista de estadisticas generales

statList  = soup.find_all('div',{'class':'numbers'})
##statList     ###----- Imprimir la lista

#Extraccion de Stats de Combate
if statList:
    winrate = statList[3].find('span', {'class':'value'}).text[:-1]
    avgCS = statList[10].find('span', {'class':'value'}).text
    kdaRatio = statList[11].find('span', {'class':'value'}).text
    killsPerRound = statList[12].find('span', {'class':'value'}).text
    avgDmgRound = statList[0].find('span', {'class':'value'}).text
    kills = statList[7].find('span', {'class':'value'}).text
    deadths = statList[8].find('span', {'class':'value'}).text
    assist = statList[9].find('span', {'class':'value'}).text

else:
    print("La lista de stats esta vacia")


#Lista de Accuracy

accuracyList = soup.find_all('td',{'class':'stat'})
accuracyList ##----- Imprimir la lista

'''v1 = accuracyList[0].find('span',{'class':'stat__value'}).text
v2 = accuracyList[1].find('span',{'class':'stat__value'}).text
v3 = accuracyList[2].find('span',{'class':'stat__value'}).text
v4 = accuracyList[3].find('span',{'class':'stat__value'}).text
v5 = accuracyList[4].find('span',{'class':'stat__value'}).text
v6 = accuracyList[5].find('span',{'class':'stat__value'}).text'''

if accuracyList:  # Verificar si accuracyList no está vacía
    headPercent = accuracyList[0].find('span',{'class':'stat__value'}).text[:-1]
    boddyPercent = accuracyList[2].find('span', {'class':'stat__value'}).text[:-1]
    legsPercent = accuracyList[4].find('span', {'class':'stat__value'}).text[:-1]
    # Continuar con el procesamiento de los datos...
else:
    print("La lista accuracyList está vacía")
    
'''jugador = {'riotID':player, 'tag':tag, 'currentRank':currenRank, 'peakRank':peakRank, 'numWins':numberWins, 
           'numLose':numberLose, 'winrate':winrate, 'avgCS':avgCS, 'KDArat':kdaRatio, 'kpr':killsPerRound, 
           'avgDmgRound':avgDmgRound, 'kills':kills, 'deaths':deadths, 'assist':assist, 
           'headPercent':headPercent, 'boddyPercent':boddyPercent, 'legsPercent':legsPercent}'''

dataTest = pd.DataFrame([{'riotID':player, 'tag':tag, 'currentRank':currenRank, 'peakRank':peakRank, 'numWins':numberWins, 
           'numLose':numberLose, 'winrate':winrate, 'avgCS':avgCS, 'KDArat':kdaRatio, 'kpr':killsPerRound, 
           'avgDmgRound':avgDmgRound, 'kills':kills, 'deaths':deadths, 'assist':assist, 
           'headPercent':headPercent, 'boddyPercent':boddyPercent, 'legsPercent':legsPercent}])

dataTest























