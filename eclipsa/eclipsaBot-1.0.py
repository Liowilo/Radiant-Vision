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
import undetected_chromedriver as uc


##Obtener HTML/pagina del perfil

browser = uc.Chrome()
url = "https://tracker.gg/valorant/profile/riot/CDC%20JuuzouJoseph%23Okami/overview"
browser.get(url)
browser.implicitly_wait(10)

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
tag = soup.find('span', {'class':'trn-ign__discriminator'}).text
tag

##Extraccion de stats
#Intento1 No sirve
##rank = soup.find('div', {'class':'rating-entry__rank-info'}).text.strip()
##rank

#Posible sentencia 2
##pruebaRank =soup.find('div', {'class': ['rating-summary__content','rating-entry__rank-info','value']}).text.strip()
##pruebaRank

rank = soup.find('div', {'class':'rating-summary__content','class':'rating-entry__rank-info','class':'value'}).text.strip()
rank


peakrank = soup.find('div', {'class':'rating-summary__content rating-summary__content--secondary','class':'rating-entry__rank-info','class':'value'}).text.strip()
peakrank

numberWins = soup.find('span', {'class':'wins'}).text[:-1]
numberWins


numberLose = soup.find('span', {'class':'losses'}).text[:-1]
numberLose

winrate = soup.find('span', {'class':'muted'}).text[1:-2]
winrate

##Lista de estadisticas generales
statList  = soup.find_all('div',{'class':'numbers'})
##statList ----- Imprimir la lista

avgCS = statList[10].find('span', {'class':'value'}).text
kdaRatio = statList[11].find('span', {'class':'value'}).text
killsPerRound = statList[12].find('span', {'class':'value'}).text
avgDmgRound = statList[0].find('span', {'class':'value'}).text
kills = statList[7].find('span', {'class':'value'}).text
deadths = statList[8].find('span', {'class':'value'}).text
assist = statList[9].find('span', {'class':'value'}).text

#Lista de Accuracy

accuracyList = soup.find_all('td',{'class':'stat'})
accuracyList ##----- Imprimir la lista

headPercent =accuracyList[0].find('span',{'class':'stat__value'}).text[:-1]
headPercent
boddyPercent = accuracyList[2].find('span', {'class':'stat__value'}).text[:-1]
boddyPercent
legsPercent = accuracyList[4].find('span', {'class':'stat__value'}).text[:-1]
legsPercent

























